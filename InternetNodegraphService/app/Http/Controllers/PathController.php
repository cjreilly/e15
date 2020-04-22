<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Arr;
use Str;
use App\Path;
use App\Query;
use App\Server;

class PathController extends Controller
{
    /**
     * GET /path/create
     * Display the form to add a new book
     */
    public function create(Request $request)
    {
        if ($request->hasAny(['server','port','path','query']))
        {
            $validator = Validator::make($request->all(), [
                    'server' => 'required|max:256',
                    'port' => 'nullable|integer',
                    'path' => 'nullable|max:2048',
                    'query' => 'nullable|max:2048'
            ]);
            $validator->validate();
            if ($validator->fails()) {
                return view('path.create')->with(['options'=>1])
                      ->withErrors($validator, 'create');
            }
            $serverText = $request->input('server');
            $portText = $request->input('port');
            $pathText = $request->input('path');
            $queryText = $request->input('query');
            $serverId=0;
            $portId=$portText;
            if ($portId == 0) {
                $portId = 80;
            }
            $pathId=0;
            $queryId=0;
            DB::table('servers')->updateOrInsert(['server' => $serverText],
                      [
                          'server' => $serverText,
                          'destroy_on' => now()->addDays(5)->toDateTimeString()
            ]);
            $server = Server::where('server',$serverText)->first();
            $serverId=$server->id;
            if ($pathText != null) {
                DB::table('paths')->updateOrInsert(['path' => $pathText],
                          [
                              'path' => $pathText,
                              'destroy_on' => now()->addDays(5)->toDateTimeString()
                ]);
                $path = Path::where('path',$pathText)->first();
                $pathId=$path->id;
            }
            if ($queryText != null) {
                DB::table('queries')->updateOrInsert(['query' => $queryText],
                            [
                                'query' => $queryText,
                                'destroy_on' => now()->addDays(5)->toDateTimeString()
                ]);
                $query = Query::where('query',$queryText)->first();
                $queryId=$query->id;
            }
            $pathTagText = PathController::encodeParameterFields(
                            $serverId, $portId, $pathId, $queryId);
            return view('path.receipt')
                    ->with(['options'=>1,'tag'=>$pathTagText]);
        }
        return view('path.create')->with(['options'=>1]);
    }

    /**
     * POST /path/destroy
     * Process the form for destroying a path
     */
    public function destroy(Request $request)
    {
        return view('path.destroy')->with(['options'=>1]);
    }

    /**
     * POST /path/reuse
     */
    public function reuse(Request $request, $tag=null)
    {
        if ($request->input('tag')) {
            $tag = $request->input('tag');
        }
        if ($tag == null) {
            return view('path.reuse')->with(['options'=>1]);
        } else {
            $resource = PathController::decodeParameterFields($tag);
            $server = Server::where('id',$resource['ServerIDX'])->first();
            $portText = $resource['Port'];
            $path = Path::where('id',$resource['PathIDX'])->first();
            $query = Query::where('id',$resource['QueryIDX'])->first();
            $serverText='/';
            $pathText='';
            $queryText='';
            if ($server != null) {
                $serverText = $server->server;
            } else {
                return view('path.index');
            }
            if ($path != null) {
                $pathText = $path->path;
            }
            if ($query != null) {
                $queryText = $query->query;
            }
            $uri = $serverText.
                      ($portText == '' ? '' : ':'.$portText).
                      ($pathText == '' ? '' : '/'.$pathText).
                      ($queryText == '' ? '' : $queryText);
            return redirect()->away($uri);
        }
    }

    /**
     * GET /
     * Show all the path in the library
     */
    public function index($option=null)
    {
        $options=['create'=>0,'destroy'=>0,'reuse'=>0];
        if (isset($option)) {
            $option=explode("&",$option);
            foreach ($option as $optionWord) {
                $options[$optionWord]=1;
            }
        }
        return view('path.index')->with(['options'=>$options]);
    }

    /**
     * Convert a raw parameter decimal to binary and left-pad with zeros.
     */
    private static function normalizeParameter($parameter,$length)
    {
        $normalizedParameter=str_pad(decbin($parameter),$length,"0",STR_PAD_LEFT);
        return $normalizedParameter;
    }
    /**
     * Convert an integer to its encoded character equivalent.
     */
    private static function integerParameterCharacter($integer)
    {
        if ($integer <= 9) {
            return chr($integer+48);
        } else if ($integer <= 35) {
            return chr($integer+65-10);
        } else if ($integer == 36) {
            return chr(61);
        } else if ($integer <= 62) {
            return chr($integer+97-37);
        } else if ($integer == 63) {
            return chr(95);
        } else {
            return '\0';
        }
        return '\0';
    }
    /**
     * Convert a one-character equivalent to its decoded integer value.
     */
    private static function parameterCharacterInteger($character)
    {
        if (ord($character) <= 57 && ord($character) >= 48) {
            return ord($character)-48;
        } else if (ord($character) <= 90 && ord($character) >= 64) {
            return ord($character)-65+10;
        } else if (ord($character) == 61) {
            return 36;
        } else if (ord($character) <= 122 && ord($character) >= 97) {
            return ord($character)-97+37;
        } else if (ord($character) == 95) {
            return 63;
        } else {
            return 0;
        }
        return 0;
    }
    /**
     * Convert a normalized binary parameter to a parameter string.
     */
    private static function parameterString($normalizedParameter,$length)
    {
        // split the string to 8 bit chunks
        $field=str_split($normalizedParameter,$length);
        $parameter="";
        foreach ($field as $F)
        {
            $integerF = base_convert($F,2,10);
            $characterF = PathController::integerParameterCharacter($integerF);
            $parameter.=$characterF;
        }
        return $parameter;
    }
    /**
     * Convert a parameter string to a normalized binary parameter.
     */
    private static function stringParameter($string,$length)
    {
        // split the field to 1 character chunks
        $field=str_split($string,1);
        $parameter="";
        foreach ($field as $F)
        {
            $integerF = PathController::parameterCharacterInteger($F);
            $binaryF = base_convert($integerF,10,2);
            $binaryF = str_pad($binaryF,$length,"0",STR_PAD_LEFT);
            $parameter.="$binaryF";
        }
        return $parameter;
    }
    /**
     * Encode a parameter.
     * \param parameter the unencoded integer parameter.
     */
    protected static function encodeParameter($parameter)
    {
        $normalizedParameter = PathController::normalizeParameter($parameter,84);
        $parameterString = PathController::parameterString($normalizedParameter,6);
        $encodedString = ltrim($parameterString, "0");
        $leadingZeroCount = strlen($parameterString)-strlen($encodedString);
        if ($leadingZeroCount <= 3) {
            return $parameterString;
        } else {
            $leadingZeroCount = str_pad($leadingZeroCount,2,"0");
            return "$encodedString";
        }
        return $parameterString;
    }
    /**
     * Decode a parameter.
     * \param $parameter the encoded parameter string.
     * \param $length the parameter bit length. Usually 14.
     */
    protected static function decodeParameter($parameter,$length)
    {
        $leadingZeroCount=0;
        if (strlen($parameter) < 12) {
            $leadingZeroCount=$length-strlen($parameter);
            $encodedString = $parameter;
            $encodedString = str_pad($encodedString,$leadingZeroCount,"0",STR_PAD_LEFT);
        } else {
            $encodedString = $parameter;
        }
        $normalizedParameter=PathController::stringParameter($encodedString,6);
        return base_convert($normalizedParameter,2,10);
    }
    /**
     * Encode all parameter fields.
     * \param $field1 field 1
     * \param $field2 field 2
     * \param $field3 field 3
     * \param $field4 field 4
     * \return An encoded parameter string with the leading header included.
     */
    public static function encodeParameterFields($field1,$field2,$field3,$field4)
    {
        $encodedField1 = PathController::encodeParameter($field1);
        $encodedField2 = PathController::encodeParameter($field2);
        $encodedField3 = PathController::encodeParameter($field3);
        $encodedField4 = PathController::encodeParameter($field4);
        $encodedFieldLength1 = strlen($encodedField1);
        $encodedFieldLength2 = strlen($encodedField2);
        $encodedFieldLength3 = strlen($encodedField3);
        $encodedFieldLength4 = strlen($encodedField4);
        $normalizedFieldLength1 = PathController::normalizeParameter($encodedFieldLength1,4);
        $normalizedFieldLength2 = PathController::normalizeParameter($encodedFieldLength2,4);
        $normalizedFieldLength3 = PathController::normalizeParameter($encodedFieldLength3,4);
        $normalizedFieldLength4 = PathController::normalizeParameter($encodedFieldLength4,4);
        $normalizedFieldLength=$normalizedFieldLength1.$normalizedFieldLength2.$normalizedFieldLength3.$normalizedFieldLength4;
        $encodedHeader=PathController::parameterString($normalizedFieldLength,8);
        $fieldString=$encodedHeader.
            $encodedField1.
            $encodedField2.
            $encodedField3.
            $encodedField4;
        return $fieldString;
    }
    /**
     * Decode all parameter fields
     * \param $fields an encoded string with the leading header included.
     * \return An associative array with the ServerIDX, Port, PathIDX, QueryIDX.
     */
    protected static function decodeParameterFields($fields)
    {
        $encodedHeader="0".substr($fields,0,1)."0".substr($fields,1,1);
        $character1=PathController::parameterCharacterInteger(substr($fields,0,1));
        $character2=PathController::parameterCharacterInteger(substr($fields,1,1));
        $normalizedCharacter1=base_convert($character1,10,2);
        $normalizedCharacter2=base_convert($character2,10,2);
        $normalizedCharacter1=str_pad($normalizedCharacter1,8,"0",STR_PAD_LEFT);
        $normalizedCharacter2=str_pad($normalizedCharacter2,8,"0",STR_PAD_LEFT);

        $normalizedFieldLength=PathController::stringParameter($encodedHeader,6);
        $normalizedFieldLength1=substr($normalizedCharacter1,0,4);
        $normalizedFieldLength2=substr($normalizedCharacter1,4,4);
        $normalizedFieldLength3=substr($normalizedCharacter2,0,4);
        $normalizedFieldLength4=substr($normalizedCharacter2,4,4);
        $fieldLength1=base_convert($normalizedFieldLength1,2,10);
        $fieldLength2=base_convert($normalizedFieldLength2,2,10);
        $fieldLength3=base_convert($normalizedFieldLength3,2,10);
        $fieldLength4=base_convert($normalizedFieldLength4,2,10);
        $encodedField1 = substr($fields,2,$fieldLength1);
        $encodedField2 = substr($fields,2+$fieldLength1,$fieldLength2);
        $encodedField3 = substr($fields,2+$fieldLength1+$fieldLength2,$fieldLength3);
        $encodedField4 = substr($fields,2+$fieldLength1+$fieldLength2+$fieldLength3,$fieldLength4);
        $decodedField1=PathController::decodeParameter($encodedField1,14);
        $decodedField2=PathController::decodeParameter($encodedField2,14);
        $decodedField3=PathController::decodeParameter($encodedField3,14);
        $decodedField4=PathController::decodeParameter($encodedField4,14);
        return ["ServerIDX" => $decodedField1,
               "Port" => $decodedField2,
               "PathIDX" => $decodedField3,
               "QueryIDX" => $decodedField4];
    }

    /**
     * Show an example.
     */
    public function showAlgo(Request $request)
    {
#
# All fields set at the maximum value: 262143
#
        $out1=262143;
        $out2=262143;
        $out3=262143;
        $out4=262143;
        $queryData=[
            "ServerIDX" => $out1,
            "Port" => $out2,
            "PathIDX" => $out3,
            "QueryIDX" => $out4
        ];
        dump($queryData);
        $encodedParameterFields = PathController::encodeParameterFields($out1,$out2,$out3,$out4);
        $pathIndexString=$out1."_".$out2."_".$out3."_".$out4;
        dump("Unencoded String: ".$pathIndexString);
        dump("Encoded String:   ".$encodedParameterFields);
        $decodedParameterFields = PathController::decodeParameterFields($encodedParameterFields);
        dump($decodedParameterFields);
    }
}

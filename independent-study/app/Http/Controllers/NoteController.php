<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    private static $defaultPin = [
                      "id" => "",
                      "route" => "",
                      "title" => "",
                      "name" => "Pin",
                      "description" => ""];
    private static $title = [
                      "industry-classification" => "Industry Classification",
                      "basic-networking" => "Basic Networking",
                      "iot-protocols" => "IoT Protocols",
                      "interoperability" => "Interoperability",
                      "frequency-allocation" => "Frequency Allocation"];
    public function home()
    {
        $title='Internet Things';
        $section = [
            'Industry Classification',
            'Basic Networking',
            'IoT Protocols',
            'Interoperability',
            'Frequency Allocation'
        ];
        $farmData = [
            'cols'=> [
              array('id'=> 'input',  'label'=> 'Input', 'type'=> 'string'),
              array('id'=> 'output', 'label'=> 'Output',' type'=> 'string'),
              array('id'=> 'volume', 'label'=> 'Volume',' type'=> 'number')
            ],
            'rows'=> [
              ['Farm Output', 'Milk', 2.52],
              ['Farm Output','Cattle', 1.38]
            ]
        ];
        return view('introduction')->with(['title' => $title,
                                           'section' => $section,
                                           'farmData' => json_encode($farmData)]);

    }
    public function filterSection($id)
    {
        return view('introduction')->with([
                          'title' => NoteController::$title[$id],
                          'section' => [NoteController::$title[$id]]]);
    }
    public function clearSession()
    {
        session(['pin'=>null]);
        return $this->home();
    }
    public function pin($id)
    {
        //session_name('userdata');
        session_start();
        $pinset = session('pin');
        if (!isset($pinset)) {
            $pinset = [];
            session(['pin'=>$pinset]);
        }
        if (!array_key_exists($id, $pinset)) {
            $pinset[$id] = NoteController::$defaultPin;
            $pinset[$id]['id'] = $id;
            $pinset[$id]['route'] = $id;
            $pinset[$id]['title'] = $id;
            session(['pin'=>$pinset]);
        }
        session_write_close();
        return $this->home();
    }
}

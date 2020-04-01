<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    private static $title = [
                      "industry-classification" => "Industry Classification",
                      "basic-networking" => "Basic Networking",
                      "iot-protocols" => "IoT Protocols",
                      "interoperability" => "Interoperability"];
    public function home()
    {
        $title='Internet Things';
        return view('introduction')->with(['title' => $title,
                                            'section' =>
                          ['Industry Classification',
                            'Basic Networking',
                            'IoT Protocols',
                            'Interoperability']]);
    }
    public function filterSection($id)
    {
        return view('introduction')->with([
                          'title' => NoteController::$title[$id],
                          'section' => [NoteController::$title[$id]]]);
    }
}

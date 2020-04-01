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

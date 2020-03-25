<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function initialView()
    {
        $title = 'Comments and Suggestions';
        return view('layouts.form')->with(['title' => $title]);
    }

    public function acceptComment(Request $request)
    {
        $title = 'Comments and Suggestions';
        $validator = Validator::make($request->all(), [
          'hint' => 'required',
          'telephone-number' => 'nullable|regex:/^[1-9][0-9]{2}-[0-9]{3}-[0-9]{4}/i|',
          'email-address' => 'nullable|email',
          'form-rating' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }
        return view('layouts.accepted')->with(['title' => $title]);
    }

    public function completeComment()
    {
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\Cricket;
use Session;

class CricketController extends Controller
{
    public function index() {
        return view('cricket.cricket_reg');
    }
    public function create(Request $request) {
        $this->validate($request, [
            'teamname' => 'required',
            'name' => 'required',
            'roll_no' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'gender' => 'required',
            'player2'=> 'required',
            'player3'=> 'required',
            'player4'=> 'required',
            'player5'=> 'required',

        ]);
        $cricket = new Cricket;
        $cricket->teamname = $request->teamname;
        $cricket->name = $request->name;
        $cricket->roll_no = $request->roll_no;
        $cricket->email = $request->email;
        $cricket->gender = $request->gender;
        $cricket->batch = $request->batch;
        $cricket->phone = $request->phone;
        $cricket->player2 = $request->player2;
        $cricket->player3 = $request->player3;
        $cricket->player4 = $request->player4;
        $cricket->player5 = $request->player5;
        $cricket->save();

        Session::flash('success', 'Cricket Registration done successfully!');
        return redirect('/');
    }
}

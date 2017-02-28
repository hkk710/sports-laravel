<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\Register;
use Session;
use Mail;

class RegisterController extends Controller
{
    public function index() {
        $events = Event::all()->where('relay', '!=', true);
        return view('register.index')->withEvents($events);
    }
    public function create(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'roll_no' => 'required|unique:registers,roll_no',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'gender' => 'required',
            'event_one' => 'not_in:none',
            'event_two' => 'not_in:none',
            'event_three' => 'not_in:none'
        ]);
        Mail::send('register.mail', $request->all(), function($message) use ($request) {
	    	$message->from("hkk710@gmail.com");
            $message->to($request->email);
	     	$message->subject('Registration success!');
	  	});
        $registers = Register::all();
        $register = new Register;
        $register->name = $request->name;
        $register->roll_no = $request->roll_no;
        $register->email = $request->email;
        $register->gender = $request->gender;
        $register->batch = $request->batch;
        if ($request->batch == 'ME') {
            if (count($registers->where('batch', '=', 'ME')) >= 1100) {
                if (count($registers->where('batch', '=', 'ME')) >= 200) {
                    # code...
                }
                elseif (count($registers->where('batch', '=', 'ME')) > 100) {
                    $last = $registers->where('batch', '=', 'ME')->last();
                    $register->chest_no = $last->chest_no + 1;
                }
                else {
                    $register->chest_no = 1001;
                }
            }
            elseif (count($registers->where('batch', '=', 'ME')) > 0) {
                $last = $registers->where('batch', '=', 'ME')->last();
                $register->chest_no = $last->chest_no + 1;
            }
            else {
                $register->chest_no = 101;
            }
        }
        if ($request->batch == 'ECE') {
            if (count($registers->where('batch', '=', 'ECE')) >= 100) {
                if (count($registers->where('batch', '=', 'ECE')) >= 200) {
                    # code...
                }
                elseif (count($registers->where('batch', '=', 'ECE')) > 100) {
                    $last = $registers->where('batch', '=', 'ECE')->last();
                    $register->chest_no = $last->chest_no + 1;
                }
                else {
                    $register->chest_no = 1101;
                }
            }
            elseif (count($registers->where('batch', '=', 'ECE')) > 0) {
                $last = $registers->where('batch', '=', 'ECE')->last();
                $register->chest_no = $last->chest_no + 1;
            }
            else {
                $register->chest_no = 201;
            }
        }
        if ($request->batch == 'EEE') {
            if (count($registers->where('batch', '=', 'EEE')) >= 100) {
                if (count($registers->where('batch', '=', 'EEE')) >= 200) {
                    # code...
                }
                elseif (count($registers->where('batch', '=', 'EEE')) > 100) {
                    $last = $registers->where('batch', '=', 'EEE')->last();
                    $register->chest_no = $last->chest_no + 1;
                }
                else {
                    $register->chest_no = 1201;
                }
            }
            elseif (count($registers->where('batch', '=', 'EEE')) > 0) {
                $last = $registers->where('batch', '=', 'EEE')->last();
                $register->chest_no = $last->chest_no + 1;
            }
            else {
                $register->chest_no = 301;
            }
        }
        if ($request->batch == 'CSE') {
            if (count($registers->where('batch', '=', 'CSE')) >= 100) {
                if (count($registers->where('batch', '=', 'CSE')) >= 200) {
                    # code...
                }
                elseif (count($registers->where('batch', '=', 'CSE')) > 100) {
                    $last = $registers->where('batch', '=', 'CSE')->last();
                    $register->chest_no = $last->chest_no + 1;
                }
                else {
                    $register->chest_no = 1301;
                }
            }
            elseif (count($registers->where('batch', '=', 'CSE')) > 0) {
                $last = $registers->where('batch', '=', 'CSE')->last();
                $register->chest_no = $last->chest_no + 1;
            }
            else {
                $register->chest_no = 401;
            }
        }
        if ($request->batch == 'CSA') {
            if (count($registers->where('batch', '=', 'CSA')) >= 100) {
                if (count($registers->where('batch', '=', 'CSA')) >= 200) {
                    # code...
                }
                elseif (count($registers->where('batch', '=', 'CSA')) > 100) {
                    $last = $registers->where('batch', '=', 'CSA')->last();
                    $register->chest_no = $last->chest_no + 1;
                }
                else {
                    $register->chest_no = 1401;
                }
            }
            elseif (count($registers->where('batch', '=', 'CSA')) > 0) {
                $last = $registers->where('batch', '=', 'CSA')->last();
                $register->chest_no = $last->chest_no + 1;
            }
            else {
                $register->chest_no = 501;
            }
        }
        $register->phone = $request->phone;
        $register->event_one = Event::find($request->event_one)->event;
        $register->event_two = Event::find($request->event_two)->event;
        $register->event_three = Event::find($request->event_three)->event;
        $register->save();

        Session::flash('success', 'Registration done successfully!');
        return redirect('/');
    }
    public function show() {
        $registers = Register::all();
        return view('register.show')->withRegisters($registers);
    }
    public function pindex() {
        $events = Event::all();
        return view('register.pindex')->withEvents($events);
    }
    public function pshow($id) {
        $event = Event::find($id);
        $registers = Register::all()->where('gender', '=', $event->gender);
        return view('register.pshow')->withEvent($event)->withRegisters($registers);
    }
}

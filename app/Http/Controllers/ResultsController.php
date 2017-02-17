<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\Result;
use App\Register;
use App\Department;
use Session;

class ResultsController extends Controller
{
    public function index() {
        $events = Event::all();
    	return view('results.index')->withEvents($events);
    }
    public function create(Request $request) {
        $event = Event::find($request->event);
    	return view('results.create')->withEvent($event);
    }
    public function store(Request $request) {
        $this->validate($request, [
            'event' => 'required|numeric',
            'chest1' => 'required|numeric|exists:registers,chest_no',
            'chest2' => 'required|numeric|exists:registers,chest_no',
            'chest3' => 'required|numeric|exists:registers,chest_no',
            'time1' => 'required',
            'time2' => 'required',
            'time3' => 'required'
        ]);

        $event = Event::find($request->event);
        $register1 = Register::all()->where('chest_no', '=', $request->chest1)->first();
        $result1 = new Result;
        $result1->name = $register1->name;
        $result1->chest_no = $request->chest1;
        $result1->event_id = $request->event;
        $result1->position = 1;
        $result1->time = $request->time1;
        $result1->save();
        $register1->score = $register1->score + 5;
        $register1->save();

        $register2 = Register::all()->where('chest_no', '=', $request->chest2)->first();
        $result2 = new Result;
        $result2->name = $register2->name;
        $result2->chest_no = $request->chest2;
        $result2->event_id = $request->event;
        $result2->position = 2;
        $result2->time = $request->time2;
        $result2->save();
        $register2->score = $register2->score + 3;
        $register2->save();

        $register3 = Register::all()->where('chest_no', '=', $request->chest3)->first();
        $result3 = new Result;
        $result3->name = $register3->name;
        $result3->chest_no = $request->chest3;
        $result3->event_id = $request->event;
        $result3->position = 3;
        $result3->time = $request->time3;
        $result3->save();
        $register3->score = $register3->score + 2;
        $register3->save();

        Session::flash('success', 'Result updated successfully');
        return redirect('results');
    }
    public function group(Request $request) {
        if ($request->event == 'marchpast') {
            $event = Event::find(1);
            $event->id = 0;
            $event->event = 'marchpast';
            $event->gender = 'both';
        }
        else {
            $event = Event::where('event', '=', $request->event)->first();
        }
        return view('results.group')->withEvent($event);
    }
    public function groupstore(Request $request) {
        $department1 = Department::find($request->department1);
        $department1->score = $department1->score + 10;
        $department1->save();

        $department1 = Department::find($request->department1);
        $department1->score = $department1->score + 6;
        $department1->save();

        $department1 = Department::find($request->department1);
        $department1->score = $department1->score + 3;
        $department1->save();

        Session::flash('success', 'Score updated successfully');
        return redirect('results');
    }
    public function show_ind() {
        $events = Event::all();
    	return view('results.view')->withEvents($events);
    }
    public function show_ind_form($gender, $id) {
        $event = Event::find($id);
        $results = Result::all()->where('event_id', '=', $id);
        return view('results.show')->withResults($results)->withEvent($event);
    }
    public function show_group() {
        $departments = Department::all();
        return view('results.viewgroup')->withDepartments($departments);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use App\Department;

class ScoreController extends Controller
{
    public function male() {
        // use take(10) at last of sortByDesc if need to take only a limited number of datas instead of all
        $registers = Register::all()->where('gender', '=', 'male')->sortByDesc('score');
        return view('score.male')->withRegisters($registers);
    }
    public function female() {
        // use take(10) at last of sortByDesc if need to take only a limited number of datas instead of all
        $registers = Register::all()->where('gender', '=', 'female')->sortByDesc('score');
        return view('score.female')->withRegisters($registers);
    }
    public function group($department) {
        $Cdepartment = Department::find($department);
        if ($department == 1) {
            $registers = Register::all()->where('batch', '=', 'ME')->sortByDesc('score');
        }
        if ($department == 2) {
            $registers = Register::all()->where('batch', '=', 'ECE')->sortByDesc('score');
        }
        if ($department == 3) {
            $registers = Register::all()->where('batch', '=', 'EEE')->sortByDesc('score');
        }
        if ($department == 4) {
            $registers = Register::all()->where('batch', '=', 'CSE')->sortByDesc('score');
        }
        if ($department == 5) {
            $registers = Register::all()->where('batch', '=', 'CSA')->sortByDesc('score');
        }
        return view('score.group')->withDepartment($Cdepartment)->withRegisters($registers);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todo;

class AppController extends Controller
{
    public function status()
    {
        return "コーディングなう！";
    }

    public function getApp()
    {
        $todos = Todo::all();
        //return view('app', ['todos' => $todos]);
        return view('app', compact('todos'));
    }
}

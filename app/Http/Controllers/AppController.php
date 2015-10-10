<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function status()
    {
        return "コーディングなう！";
    }

    public function getApp()
    {
        return view('app');
    }
}

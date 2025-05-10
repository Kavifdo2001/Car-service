<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Team;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

        return view('pages.home');
    }

    public function about(){

        $team = Team::all();

        return view('pages.about' , compact('team'));
    }

    public function service(){

        return view('pages.service');
    }

    public function contact(){

        return view('pages.contact');
    }

    public function spare_parts(){

        $spareParts = Car::all();

        return view('pages.spare-parts',compact('spareParts'));
    }


    public function login(){

        return view('pages.auth.login');
    }


}

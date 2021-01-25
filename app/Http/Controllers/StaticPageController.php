<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework;

class StaticPageController extends Controller
{
    public function index() {
        $homeworks = Homework::get();

        return view('homepage', [
            'data' => json_encode($homeworks),
        ]);
    }

    public function about() {
        return view('about');
    }

    public function help() {
        return view('help');
    }
}

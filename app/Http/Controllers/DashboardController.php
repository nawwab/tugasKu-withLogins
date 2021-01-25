<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {
        $homeworks = Homework::get();

        return view('dashboard', [
            'data' => json_encode($homeworks),
            'isAdmin' => True
        ]);
    }
}

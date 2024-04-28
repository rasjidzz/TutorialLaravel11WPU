<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Homepage',
            'owner' => 'Risjad Shidqi'
        ];
        return view('homePage.index', $data);
    }
}

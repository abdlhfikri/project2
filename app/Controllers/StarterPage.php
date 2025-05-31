<?php

namespace App\Controllers;

class StarterPage extends BaseController
{
    public function index(): string
    {
        return view('starter_page');
    }
}

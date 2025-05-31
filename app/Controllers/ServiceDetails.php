<?php

namespace App\Controllers;

class ServiceDetails extends BaseController
{
    public function index(): string
    {
        return view('service_details');
    }
}

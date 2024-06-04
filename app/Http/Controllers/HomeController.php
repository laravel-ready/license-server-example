<?php

namespace App\Http\Controllers;

use LaravelReady\LicenseServer\Models\License;

class HomeController extends Controller
{
    public function __invoke()
    {
        $licenses = License::all();

        return view('welcome', compact('licenses'));
    }
}

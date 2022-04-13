<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function reportElis()
    {
        return view('page.elis');
    }

    public function reportCompany()
    {
        return view('page.company');
    }
}

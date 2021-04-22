<?php

namespace App\Controllers;

class WelcomeController
{
    protected $pageTitle;

    public function home()
    {
        $pageTitle = "Home";

        return view('home', compact('pageTitle'));
    }

    public function index()
    {
        $pageTitle = "Test Crud";

        return view('testCrud/index', compact('pageTitle'));
    }
}

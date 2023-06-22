<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

class InertiaController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }
}

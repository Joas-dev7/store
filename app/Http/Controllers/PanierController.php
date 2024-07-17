<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index()
    {
        return 'liste';
    }

    public function ajouter()
    {
        return 'ajouter';
    }

    public function commander()
    {
        return 'commander';
    }
}

<?php

namespace App\Http\Controllers;

class LegalController extends Controller
{
    public function mentionsLegales()
    {
        return view('legal.mentions-legales');
    }

    public function confidentialite()
    {
        return view('legal.confidentialite');
    }

    public function remboursement()
    {
        return view('legal.remboursement');
    }

    public function cgu()
    {
        return view('legal.cgu');
    }
}
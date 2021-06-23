<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class PDFMakerController extends Controller
{
    function gen()
    {
    	$pdf = App::make('dompdf.wrapper');
    	$pdf -> loadHTML('<h1>Hello World</h1>');
    	return $pdf ->stream();
    }
}


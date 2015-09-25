<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Dress;

class CatalogController extends Controller
{
    
    public function index()
    {
        return view('shop.home');
    }

    public function catalog_lusso()
    {
        $dresses = Dress::where('collection', 1)->get();

        return view('catalog.women.collection-lusso', compact('dresses'));
    }

    public function catalog_fiori()
    {
        $dresses = Dress::where('collection', 2)->get();

        return view('catalog.women.collection-fiori', compact('dresses'));
    }

    public function details($id)
    {
        $dress = Dress::findOrFail($id);

        return view('catalog.details-item', compact('dress'));
    }
}

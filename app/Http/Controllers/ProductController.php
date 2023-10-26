<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const BASE_URI = 'https://fakestoreapi.com/products';
    public function index (){
        $products = Http::withoutVerifying()->get(self::BASE_URI)->json();
        return view('index', compact('products'));
    }
    public function show ($uri){
        $product = Http::withoutVerifying()->get(self::BASE_URI . '/' . $uri)->json();
        return view('show', compact('product'));
    }
    public function region (){
        return view('region');
    }
}

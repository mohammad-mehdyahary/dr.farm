<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitController extends Controller
{
    public function FruitView()
    {
        $fruits = Fruit::latest()->get();
        return view('backend.brand.brand_view',compact('fruits'));
    }
}

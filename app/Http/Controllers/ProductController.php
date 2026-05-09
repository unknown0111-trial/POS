<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        return "Halaman Food Beverage";
    }

    public function beautyHealth()
    {
        return "Halaman Beauty Health";
    }

    public function homeCare()
    {
        return "Halaman Home Care";
    }

    public function babyKid()
    {
        return "Halaman Baby Kid";
    }
}
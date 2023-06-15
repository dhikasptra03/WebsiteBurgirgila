<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Our Menu
     */
    public function index()
    {
        $menus = Menu::all();

        return view('menus.index', compact('menus'));
    }
}

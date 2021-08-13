<?php

namespace App\Http\Controllers;

use App\Models\Santa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $santas = Santa::all();
        return view('admin',compact('santas'));
    }
    public function mix()
    {
        $i = 0;
        $santas = Santa::all();
        $collection = collect(Santa::all('id'));
        $collection = $collection->shuffle()->toArray();
        foreach ($santas as $santa)
        {
            $santa->gift_to = $collection[$i]['id'];
            $i++;
            $santa->save();
        }
        return redirect(route('admin.index'));
    }


}

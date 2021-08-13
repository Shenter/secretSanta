<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterSantaRequest;
use App\Models\Santa;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SantaController extends Controller
{
    public function register(RegisterSantaRequest $request):JsonResponse
    {


        $santa = new Santa($request->all());
        $santa->save();
        return response()->json(['result'=>'ok']);
    }
}

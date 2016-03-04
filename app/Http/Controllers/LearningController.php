<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LearningController extends Controller
{
    public function index()
    {
        $learning = \App\Models\LearningObject::get();
        return response()->json([
              "learning" =>  $learning->toArray()
          ],200
        );
    }
}

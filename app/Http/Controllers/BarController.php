<?php

namespace App\Http\Controllers;

use App\Bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class BarController extends Controller
{
    public function index ()
    {
      //list
      //GET /Bars
      $Bars = Bar::all();
      return Response::json($Bars);
    }

    public function create (Request $request)
    {
      //POST /Bars
      //create a new Bar
      Bar::create($request->all());
      return Response::json(['created' => true]);
    }

    public function show ($id)
    {
      //Get /Bars/$id
      $Bar = Bar::find($id);
      return Response::json($Bar);
    }

    public function update (Request $request, $id)
    {
      //PUT /Bars/$id
      //updates a single Bar
      $Bar = Bar::find($id);
      $Bar = $Bar->update($request->all());
      return Response::json(['Updated' => true]);
    }

    public function destroy (Request $request, $id)
    {
      //Delete /Bars/$id
      //Remove a single Bar

      $Bar= Bar::find($id);
      $Bar->delete();
      return Response::json(['deleted' => true]);
    }
}

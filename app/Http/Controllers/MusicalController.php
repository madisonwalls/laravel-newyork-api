<?php

namespace App\Http\Controllers;

use App\Musical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class MusicalController extends Controller
{
    public function index ()
    {
      //list
      //GET /musicals
      $musicals = Musical::all();
      return Response::json($musicals);
    }

    public function create (Request $request)
    {
      //POST /musicals
      //create a new musical
      Musical::create($request->all());
      return Response::json(['created' => true]);
    }

    public function show ($id)
    {
      //Get /musicals/$id
      $musical = Musical::find($id);
      return Response::json($musical);
    }

    public function update (Request $request, $id)
    {
      //PUT /musicals/$id
      //updates a single musical
      $musical = Musical::find($id);
      $musical = $musical->update($request->all());
      return Response::json(['Updated' => true]);
    }

    public function destroy (Request $request, $id)
    {
      //Delete /musicals/$id
      //Remove a single musical

      $musical= Musical::find($id);
      $musical->delete();
      return Response::json(['deleted' => true]);
    }
}

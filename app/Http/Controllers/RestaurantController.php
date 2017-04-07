<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class RestaurantController extends Controller
{
    public function index ()
    {
      //list
      //GET /Restaurants
      $Restaurants = Restaurant::all();
      return Response::json($Restaurants);
    }

    public function create (Request $request)
    {
      //POST /Restaurants
      //create a new Restaurant
      Restaurant::create($request->all());
      return Response::json(['created' => true]);
    }

    public function show ($id)
    {
      //Get /Restaurants/$id
      $Restaurant = Restaurant::find($id);
      return Response::json($Restaurant);
    }

    public function update (Request $request, $id)
    {
      //PUT /Restaurants/$id
      //updates a single Restaurant
      $Restaurant = Restaurant::find($id);
      $Restaurant = $Restaurant->update($request->all());
      return Response::json(['Updated' => true]);
    }

    public function destroy (Request $request, $id)
    {
      //Delete /Restaurants/$id
      //Remove a single Restaurant

      $Restaurant= Restaurant::find($id);
      $Restaurant->delete();
      return Response::json(['deleted' => true]);
    }
}

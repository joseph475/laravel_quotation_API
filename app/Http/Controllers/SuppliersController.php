<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
  const MODEL = 'Supplier';

  public function fetchData()
  {
    $data = Supplier::all();
    return response()->json(['data' => $data]);
  }

  public function store (Request $request) 
  {
    $result = storeAllData ($request, self::MODEL);

    if ($result) {
      return $result;
    }
  }

  public function destroy ($id) 
  {
    $result = deleteRecord($id, self::MODEL);
    
    if ($result) {
      return $result;
    }
  }
}

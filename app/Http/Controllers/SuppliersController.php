<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
  const MODEL = 'Supplier';

  public function fetchData()
  {
    $result = fetchAllData(self::MODEL);
    if ($result) {
      return $result;
    }
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

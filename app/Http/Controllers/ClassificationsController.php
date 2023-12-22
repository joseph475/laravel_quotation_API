<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassificationsController extends Controller
{
  const MODEL = 'Classification';

  public function fetchData()
  {
    $result = fetchAllData(self::MODEL);
    if ($result) {
      return $result;
    }
  }

  public function store (Request $request) 
  {
    $result = storeAllData($request, self::MODEL);

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

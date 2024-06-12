<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function fetchData($endpoint)
  {
    $result = fetchAllData($endpoint);
    if ($result) {
      return $result;
    }
  }

  public function store (Request $request, $endpoint) 
  {
    $result = storeAllData($request, $endpoint);

    if ($result) {
      return $result;
    }
  }

  public function destroy ($endpoint, $id) 
  {
    $result = deleteRecord($id, $endpoint);
    
    if ($result) {
      return $result;
    }
  }
}

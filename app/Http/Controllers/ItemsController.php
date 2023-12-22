<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
  const MODEL = 'Item';

  public function fetchData()
  {
    // $result = Item::with('class_id')->get();  

    $data = DB::table('tbl_items')
    ->join('tbl_classifications', 'tbl_items.class_id', '=', 'tbl_classifications.id')
    // ->join('tbl_purchases_receiving', 'tbl_items.id', '=', 'tbl_purchases_receiving.item_id')
    ->select('tbl_items.*', 'tbl_classifications.name as class_name')
    ->orderBy('tbl_items.itemName', 'asc')
    ->get();

    $result = response()->json($data);

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

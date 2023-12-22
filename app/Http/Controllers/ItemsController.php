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
    $result = fetchAllData(self::MODEL);
    if ($result) {
      return $result;
    }
    // $data = DB::table('tbl_items')
    // ->join('tbl_suppliers', 'tbl_items.supplier_id', '=', 'tbl_suppliers.id')
    // // ->join('tbl_purchases_receiving', 'tbl_items.id', '=', 'tbl_purchases_receiving.item_id')
    // ->select('tbl_items.*', 'tbl_suppliers.supplierName')
    // ->orderBy('tbl_items.itemName', 'asc')
    // ->get();

    // return response()->json($data);
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

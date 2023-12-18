<?php

function fetchAllData ($modelParam) {
  try {
    $model = app("App\\Models\\$modelParam");
    $result = $model::all();

    if ($result) {
      return [
        'count' => $model::count(),
        'data' => $result,
        'status' => true
      ];
    } else {
      return [
        'message' => 'Data Empty'
      ];
    }

  } catch (\Exception $e) {
    return [
      'status' => false,
      'message' => $e->getMessage()
    ];
  }
}

function deleteRecord ($id, $modelParam)
{
  try {
    $model = app("App\\Models\\$modelParam");
    $result = $model::destroy($id);
    if ($result) {
      return [
        'message' => $modelParam . ' Deleted Succesfully!!!'
      ];
    } else {
      return [
        'message' => 'Item Not Found!!!'
      ];
    }
  } catch (\Exception $e) {
    return [
      'status' => false,
      'message' => $e->getMessage()
    ];
  }
}

function storeAllData ($data, $modelParam) {

  $postData = $data->all();
  try {
    $model = app("App\\Models\\$modelParam");
    // query on updating items
    if ($data->isMethod('put')) {
      $result = $model::findOrFail($data->id)->update($postData);
      
      if ($result) {
        return [
          'status' => $result,
          'data' => $postData
        ];
      }
    }

    // query on creating new items
    $result = $model::create($data->all());
    return $result;

  } catch (\Exception $e) {
    return [
      'status' => false,
      'message' => $e->getMessage()
    ];
  }

}

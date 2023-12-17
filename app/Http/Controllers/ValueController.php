<?php

namespace App\Http\Controllers;

use App\Models\Value;
use Illuminate\Http\Request;

class ValueController extends Controller
{
    public function create(Request $request)
    {
        Value::insert([
            'attribute_id' => $request->attr_id,
            'name' => $request->name,
            'unit' => $request->unit,
            'value' => 0
        ]);
        return redirect('/value?attrId='.strval($request->attr_id));
    }

    public function delete($id)
    {
        if(isset($id)){
            Value::find($id)->delete();
        };
        return redirect('/value?attrId='.strval($_GET['attrId']));
    }
}

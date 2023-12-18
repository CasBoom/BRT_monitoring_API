<?php

namespace App\Http\Controllers;

use App\Models\Token;
use App\Models\Value;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    public function update($id, Request $request){
        if(Token::where('token', $request->token)->where('expiresAt', '>', Carbon::now())->exists()){                
            if(isset($id)&&Value::where('id', $id)->exists()){
                Value::where('id', $id)->update(['value' => $request->value]);
                return response('', 201);
            }
            return response('', 404);
        }
        return response('', 401);
    }
}

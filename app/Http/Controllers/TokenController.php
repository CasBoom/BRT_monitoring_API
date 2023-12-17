<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function create(Request $request)
    {
        Token::insert([
            'name' => $request->name,
            'expiresAt' => $request->expiresAt,
            'token' => bin2hex(random_bytes(16))
        ]);
        return redirect('/tokens');
    }

    public function delete(Request $request)
    {
        if(isset($_POST['id'])){
            Token::find($_POST['id'])->delete();
        };
        return redirect('/tokens');
    }
}

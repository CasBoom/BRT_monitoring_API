@extends('layouts.master')

@section('title')
    Dashboard
@endsection
@section('header')
    <h1>
        Tokens
    </h1>
@endsection
@section('content')
    <main>
        <h2>Data</h2>
        <div class="row">
            <div class='block full'>
                <h2>Tokens</h2>
                <form method="post" action="{{@url('/tokens')}}">
                    @csrf
                    Name: <input type="text" name="name">
                    Expiry date: <input type="date" name="expiresAt">
                    <input type="submit" value="Submit"> 
                </form>
                <table class="data"> 
                    <tr>
                        <th>Name</th>
                        <th>Token</th>
                        <th>Experires At</th>
                        <th></th>
                    </tr>
                    @foreach(App\Models\Token::get() as $token)
                        <tr>
                            <td>{{$token->name}}</td>
                            <td>{{$token->token}}</td>
                            <td>{{date('d-m-Y H:i:s', strtotime($token->expiresAt))}}</td>
                            <td><a href="/tokens">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
@endsection
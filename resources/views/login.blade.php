@extends('layouts.login')

@section('title')
    Login
@endsection
@section('header')
<header>
    <h1>Login</h1>
</header>
@endsection
@section('content')
    @if ($errors->any())
    <ul>
            {{implode('', $errors->all('<li>: message</li>'))}}
    </ul>
    @endif
    <form method="post" target="" class="login_form">
    @csrf
    <h3>Login</h3>
    <p>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </p>
    <input type="submit" name="Submit" value="Login">
    </form>
@endsection
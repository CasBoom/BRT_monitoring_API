@extends('layouts.master')

@section('title')
    Attributes
@endsection
@section('header')
    <h1>
        Attributes
    </h1>
@endsection
@section('content')
    <main>
        <div class="row">
                <div class='block full'>
                    <h2>Attributes</h2>
                    <form method="post" action="{{@url('/attribute')}}">
                        @csrf
                        Name: <input type="text" name="name">
                        Description: <input type="text" name="description">
                        <input type="submit" value="Submit"> 
                    </form>
                    <table class="data"> 
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach(App\Models\Attribute::get() as $attribute)
                        <tr>
                                <td>{{$attribute->name}}</td>
                                <td>{{$attribute->description}}</td>
                                <td><a href="{{@url('/value?attrId='.strval($attribute->id))}}">Value</a></td>
                                <td><a href="{{@url('/attribute/delete/'.strval($attribute->id))}}">Delete</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </main>
@endsection
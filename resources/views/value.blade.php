@extends('layouts.master')

@section('title')
    value
@endsection
@section('header')
    <h1>
        {{App\Models\Attribute::get()->where('id', $_GET['attrId'])[0]['name']}} -> Values
    </h1>
@endsection
@section('content')
    <main>
        <h2>Data</h2>
        <div class="row">
                <div class='block full'>
                    <h2>{{App\Models\Attribute::get()->where('id', $_GET['attrId'])[0]['name']}} -> Values</h2>
                    <form method="post" action="{{@url('/value')}}">
                        @csrf
                        Name: <input type="text" name="name">
                        Unit: <input type="text" name="unit">
                        <input type="hidden" name="attr_id" value="{{$_GET['attrId']}}">
                        <input type="submit" value="Submit"> 
                    </form>
                    <table class="data"> 
                        <tr>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Created at</th>
                            <th></th>
                        </tr>
                        @foreach(App\Models\Value::get()->where('attribute_id', $_GET['attrId']) as $value)
                        <tr>
                                <td>{{$value->name}}</td>
                                <td>{{$value->unit}}</td>
                                <td>{{date('d-m-Y H:i:s', strtotime($value->createdAt))}}</td>
                                <td><a href="{{@url('/value/delete/'.strval($value->id).'?attrId='.strval($_GET['attrId']))}}">Delete</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </main>
@endsection
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
        <h2>Data</h2>
        <div class="row">
                <div class='block full'>
                    <h2>Attributes</h2>
                    <table class="data"> 
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach(App\Models\Attribute::get() as $attribute)
                        <tr>
                                <td>{{$attribute->name}}</td>
                                <td>{{$attribute->description}}</td>
                                <td>{{date('d-m-Y H:i:s', strtotime($attribute->createdAt))}}</td>
                                <td><a href="{{@url('/value?attrId='.strval($attribute->id))}}">Value</a></td>
                                <td><a href="{{@url('/attribute/delete/'.strval($attribute->id))}}">Delete</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </main>
@endsection
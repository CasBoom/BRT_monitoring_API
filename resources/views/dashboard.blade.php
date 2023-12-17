@extends('layouts.master')

@section('title')
    Dashboard
@endsection
@section('header')
    <h1>
        Dashboard
    </h1>
@endsection
@section('content')
    <main>
        <h2>Data</h2>
        <div class="row">
            @foreach(App\Models\Attribute::get() as $attribute)
                <div class='block half'>
                    <h2>{{$attribute->name}}</h2>
                    <details>
                        <summary>Details</summary>
                        <p>{{$attribute->description}}</p>
                    </details>
                    <table class="data"> 
                        <tr>
                            <th>Name</th>
                            <th>Value</th>
                        </tr>
                        @foreach(App\Models\Value::where('attribute_id','=', $attribute->id)->get() as $value)
                            <tr>
                                <td>{{$value->name}}</td>
                                <td>{{$value->value}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            @endforeach
        </div>
    </main>
@endsection
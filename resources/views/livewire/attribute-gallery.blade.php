<div wire:poll.1s>
    @foreach(App\Models\Attribute::get() as $attribute)
        <div class='block half'>
            <h2>{{$attribute->name}}</h2>
                <p>{{$attribute->description}}</p>
            <table class="data"> 
                <tr>
                    <th>Name</th>
                    <th>Value</th>
                </tr>
                @foreach(App\Models\Value::where('attribute_id','=', $attribute->id)->get() as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->value . ' ' . $value->unit}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endforeach
</div>

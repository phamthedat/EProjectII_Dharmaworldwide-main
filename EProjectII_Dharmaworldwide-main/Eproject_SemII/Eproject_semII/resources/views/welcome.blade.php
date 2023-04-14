[
@foreach($data as $items)
    <pre>
        [
        'id'=>{{$items->id}},
        'name'=>'{{$items->name}}'
        'labelName'=>{{$items->labelName}},
        'price'=>{{$items->price}},
        'weight'=>{{$items->weight}},
        'category'=>{{$items->category}},
        'vitamin'=>{{$items->vitamin}},
        'nutrient'=>{{$items->nutrient}},
        'thumbnail'=>{{$items->thumbnail}},
        'description'=>{{$items->description}},
        'created_at'=>Carbon::now(),
        'created_at'=>Carbon::now(),

        ],
    </pre>
@endforeach
]

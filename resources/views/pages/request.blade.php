@extends('layouts.master')
<link rel="stylesheet" href="css/Request.css">
@section('body')
<main>
    @foreach ($items as $item )
        <div class="gallery">
            <div class="content">
                <img src="/images/{{$item->photo}}">
                <h3>{{$item->item-name}}</h3>
                <p>{{$item->details}}</p>
                <h6>{{$item->price}}</h6>
                <h4>{{$item->prescription-requirment}}</h4>
                <form action="{{route('items.destroy'),$item->id}}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
                </form>
                <a href="{{route('items.edit'),$item->id}}">Edit</a>
                <a href="{{route('items.show'),$item->id}}">Show</a>
            </div>
        </div>
    @endforeach
    {!! $items->links() !!}
</main>
@endsection
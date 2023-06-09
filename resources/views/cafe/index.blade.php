@extends('layouts.main')

@section('content')

    <div class="card-body row mb-3">
        @foreach($cafes as $cafe)
            <div class="col-md-6 offset-md-4 card">
                <a class="btn btn-primary  btn-link" href="{{route("cafe.show", ["cafe"=>$cafe->id])}}"><h1>{{$cafe->name}} </h1></a>
                <p>{{$cafe->address}}</p>
            </div>
        @endforeach
        <div class="col-md-6 offset-md-4 card">
            {{$cafes->links()}}
        </div>
        @can('view', auth()->user())
            <div class="col-md-6 offset-md-4 card">
                <a class="btn btn-primary btn-link" href="{{route("cafe.create")}}">Добавить кафе</a>
            </div>
        @endcan
    </div>
@endsection

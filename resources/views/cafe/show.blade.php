@extends('layouts.main')

@section('content')
    <div class="card-body row mb-3">
        <div class="col-md-6 offset-md-4 card">
            {{$cafe->name}}
        </div>
        @foreach($events as $event)
            <div class="col-md-6 offset-md-4 card">
            <a class="btn btn-primary  btn-link" href="{{route("event.show", ["event"=>$event->id])}}"><h3>{{$event->title}}</h3></a>
                <p>{{$event->description}}</p>
                <p>{{$event->date}}</p>
                <br>
            </div>
        @endforeach
        <div class="col-md-6 offset-md-4 card">
            {{$events->links()}}
        </div>
        <div class="col-md-6 offset-md-4 card">
            <a class="btn btn-primary  btn-link" href="{{route("event.create", ["cafe"=>$cafe->id])}}">Добавить событие</a>
            <a class="btn btn-primary  btn-link" href="{{route("cafe.edit", ["cafe"=>$cafe->id])}}">Изменить кафе</a>
            <form action="{{route('cafe.delete', $cafe->id)}}" class="btn   btn-link" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="btn btn-danger">
            </form>
            <a class="btn btn-primary  btn-link" href="{{route("cafe.index")}}">Назад</a>
        </div>
    </div>
@endsection

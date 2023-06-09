@extends('layouts.main')

@section('content')
    <div class="col-md-6 offset-md-4 card">
        <a class="btn btn-primary  btn-link" href="{{route("event.edit", ["event"=>$event->id])}}"><h3>{{$event->title}}</h3></a>
        <p>{{$event->description}}</p>
        <p>{{$event->date}}</p>
        <br>
    </div>
    <div class="col-md-6 offset-md-4 card">
        @if(auth()->user())
            <a class="btn btn-primary  btn-link" href="{{route("event.subscribe", $event->id)}}">Подписаться</a>
        @endif
        @can('view', auth()->user())
            <a class="btn btn-primary  btn-link" href="{{route("event.edit", ["event"=>$event->id])}}">Изменить событие</a>
            <form action="{{route('event.delete', $event->id)}}" class="btn   btn-link" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="btn btn-danger">
            </form>
            <a class="btn btn-primary  btn-link" href="{{route("cafe.show", ["cafe"=>$event->cafe->id])}}">Назад</a>
        @endcan
    </div>
@endsection

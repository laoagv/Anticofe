@extends('layouts.main')

@section('content')
        <div class="col-md-6 offset-md-4 card">
            <h1>{{$event->title}}</h1>
        </div>
        <form action="{{route("event.update", ["event"=>$event->id])}}" method="post">
            @csrf
            @method("patch")
            <div class="col-md-6 offset-md-4 card">
                <label for="title"></label>
                <input class="form-check" type="text" name="title" id="title" placeholder="Название" value="{{$event->title}}">
            </div>
            <div class="col-md-6 offset-md-4 card">
                <label for="description"></label>
                <input class="form-check" type="text" name="description" id="description" placeholder="Описание" value="{{$event->description}}">
            </div>
            <div class="col-md-6 offset-md-4 card">
                <label for="date"></label>
                <input class="form-check" type="datetime-local" name="date" id="date" placeholder="Дата" value = "{{$event->date}}">
            </div>
            <div class="col-md-6 offset-md-4 card">
                <button class="btn btn-primary btn-link" type="submit">Изменить</button>
            </div>
        </form>
@endsection

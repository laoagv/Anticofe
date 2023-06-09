@extends('layouts.main')

@section('content')
    <div class="col-md-6 offset-md-4 card">
        <h1>{{$cafe->name}}</h1>
    </div>
    <form action="{{route("event.store")}}" method="post">
        @csrf
        <div class="col-md-6 offset-md-4 card">
            <label for="title"></label>
            <input class="form-check" type="text" name="title" id="title" placeholder="Название">
        </div>
        <div class="col-md-6 offset-md-4 card">
            <label for="description"></label>
            <input class="form-check" type="text" name="description" id="description" placeholder="Описание">
        </div>
        <div class="col-md-6 offset-md-4 card">
            <label for="date"></label>
            <input class="form-check" type="datetime-local" name="date" id="date" placeholder="Адрес Кафе">
        </div>
        <input name="cafe_id" type="hidden" value="{{$cafe->id}}">
        <div class="col-md-6 offset-md-4 card">
            <button class="btn btn-primary btn-link" type="submit">Добавить</button>
        </div>
    </form>
@endsection

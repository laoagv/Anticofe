@extends('layouts.main')

@section('content')
    <form action="{{route("cafe.store")}}" method="post">
        @csrf
        <div class="col-md-6 offset-md-4 card">
            <label for="name"></label>
            <input type="text" name="name" id="name" placeholder="Название Кафе">
        </div>
        <div class="col-md-6 offset-md-4 card">
            <label for="address"></label>
            <input type="text" name="address" id="address" placeholder="Адрес Кафе">
        </div>
        <div class="col-md-6 offset-md-4 card">
            <button class="btn btn-primary btn-link" type="submit">Добавить</button>
        </div>
    </form>
@endsection

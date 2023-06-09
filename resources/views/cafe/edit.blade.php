@extends('layouts.main')

@section('content')
    <form action="{{route("cafe.update", ["cafe"=>$cafe->id])}}" method="post">
        @csrf
        @method("patch")
        <div class="col-md-6 offset-md-4 card">
            <label for="name"></label>
            <input type="text" name="name" id="name" placeholder="Название Кафе" value="{{$cafe->name}}">
        </div>
        <div class="col-md-6 offset-md-4 card">
            <label for="address"></label>
            <input type="text" name="address" id="address" placeholder="Адрес Кафе" value="{{$cafe->address}}">
        </div>
        <div class="col-md-6 offset-md-4 card">
            <button  class="btn btn-primary btn-link" type="submit">Изменить</button>
        </div>
    </form>
@endsection

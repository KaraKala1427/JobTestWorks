@extends('layouts.standard')

@section('title-block')
Все объявления
@endsection

@section('content')
    <h1>Список объявлений</h1>
    <div class="col-md-12 mb-3">
{{--        <span class="font-weight-bold sort-font">Сортировка : </span>--}}
        <div class="sort-font"><a href="{{route('sortByDate', ["sort" => 'desc' ])}}">Новые к старым</a></div>
        <div class="sort-font"><a href="{{route('sortByDate', ["sort" => 'asc' ])}}">Старые к новым</a></div>
        <div class="sort-font"><a href="{{route('sortByPrice', ["sort" => 'asc' ])}}">Дешевые к дорогим</a></div>
        <div class="sort-font"><a href="{{route('sortByPrice', ["sort" => 'desc' ])}}">Дорогие к дешевым</a></div>
    </div>
@foreach($data as $element)
    <div class="alert alert-info">
        <h3>{{ $element->name}}</h3>
        <p><strong>{{ $element->price}} тг</strong></p>
        <p><small>{{ $element->created_at }}</small></p>
        <a href="{{ route('declarationDetail', $element->id) }}"><button class="btn btn-warning">Детально</button></a>
    </div>
@endforeach

    <span>
        {{$data->links()}}
    </span>
@endsection

<style>

</style>

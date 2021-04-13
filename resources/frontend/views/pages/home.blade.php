@extends('frontend::layout.app')

@section('title', 'Home')

@section('content')

    <div class="content">
        <div class="content__image">
            <div class="content__image-description">Первая и неповторимая</div>
            <div class="content__image-title">Камера α1</div>
            <div class="content__image-button">Узнать больше</div>
            <img class="content__image-img" src="/{{ 'img/home-screen.webp' }}" alt="image">
        </div>
        <div>

        </div>
    </div>

@endsection

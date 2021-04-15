@extends('frontend::layout.app')

@section('title', 'Home')

@section('content')

    <div class="categories">

        <div class="categories__category">
            <div class="categories__category-img">
                <img class="card__image" src="/{{ 'img/products/iphone_x.jpg' }}" alt="">
            </div>
            <div class="categories__category-title">
                <a class="categories__category-title" href="#">Мобильные телефоны</a>
            </div>
            <div class="categories__category-description">В этом разделе вы найдете мобильные телефоны</div>
        </div>

        <div class="categories__category">
            <div class="categories__category-img">
                <img class="card__image" src="/{{ 'img/products/iphone_x.jpg' }}" alt="">
            </div>
            <div class="categories__category-title">
                <a class="categories__category-title" href="#">Мобильные телефоны</a>
            </div>
            <div class="categories__category-description">В этом разделе вы найдете мобильные телефоны</div>
        </div>

        <div class="categories__category">
            <div class="categories__category-img">
                <img class="card__image" src="/{{ 'img/products/iphone_x.jpg' }}" alt="">
            </div>
            <div class="categories__category-title">
                <a class="categories__category-title" href="#">Мобильные телефоны</a>
            </div>
            <div class="categories__category-description">В этом разделе вы найдете мобильные телефоны</div>
        </div>


    </div>

@endsection

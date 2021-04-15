@extends('frontend::layout.app')

@section('title', 'Home')

@section('content')

    <div class="product">
        <div class="product__title">
            iPhone X 64GB
        </div>
        <div class="product__price">
            Цена: <span class="product__price-bold">71990</span> руб.
        </div>
        <div class="product__img">
            <img class="product__img" src="/{{ 'img/products/iphone_x.jpg' }}" alt="">
        </div>
        <div class="product__description">
            Отличный смартфон от Apple
        </div>
        <div class="product__button button button__green">
            добавить в корзину
        </div>
    </div>

@endsection

@extends('frontend::layout.app')

@section('title', 'Home')

@section('content')

    <div class="content">
        <div class="content__image">
            <div class="content__image-title">Камера α1</div>
            <div class="content__image-description">Первая и неповторимая</div>
            <div class="content__image-button">Узнать больше</div>
            <img class="content__image-img" src="/{{ 'img/home-screen.webp' }}" alt="image">
        </div>
        <div class="content__products">
            <div class="content__products-title">
                Рекомендуемые <span>товары</span>
            </div>
            <div class="content__products-cards">
                <div class="content__products-card card">
                    <div class="card__image">
                        <img class="card__image" src="/{{ 'img/products/iphone_x.jpg' }}" alt="">
                    </div>
                    <div class="card__title">Arvum</div>
                    <div class="card__description">Gran Reserva Vinegar, 200ml</div>
                    <div class="card__price">31,51 €</div>
                    <div class="card__buttons">
                        <div class="card__buttons-button button">Подробнее</div>
                        <div class="card__buttons-button button button__green">Добавить в корзину</div>
                    </div>
                </div>

                <div class="content__products-card card">
                    <div class="card__image">
                        <img class="card__image" src="/{{ 'img/products/iphone_x.jpg' }}" alt="">
                    </div>
                    <div class="card__title">Arvum</div>
                    <div class="card__description">Gran Reserva Vinegar, 200ml</div>
                    <div class="card__price">31,51 €</div>
                    <div class="card__buttons">
                        <div class="card__buttons-button button">Подробнее</div>
                        <div class="card__buttons-button button button__green">Добавить в корзину</div>
                    </div>
                </div>

                <div class="content__products-card card">
                    <div class="card__image">
                        <img class="card__image" src="/{{ 'img/products/iphone_x.jpg' }}" alt="">
                    </div>
                    <div class="card__title">Arvum</div>
                    <div class="card__description">Gran Reserva Vinegar, 200ml</div>
                    <div class="card__price">31,51 €</div>
                    <div class="card__buttons">
                        <div class="card__buttons-button button">Подробнее</div>
                        <div class="card__buttons-button button button__green">Добавить в корзину</div>
                    </div>
                </div>

                <div class="content__products-card card">
                    <div class="card__image">
                        <img class="card__image" src="/{{ 'img/products/iphone_x.jpg' }}" alt="">
                    </div>
                    <div class="card__title">Arvum</div>
                    <div class="card__description">Gran Reserva Vinegar, 200ml</div>
                    <div class="card__price">31,51 €</div>
                    <div class="card__buttons">
                        <div class="card__buttons-button button">Подробнее</div>
                        <div class="card__buttons-button button button__green">Добавить в корзину</div>
                    </div>
                </div>
            </div>
            <div class="content__products-button button button__green">Shop all products</div>
        </div>
    </div>

@endsection

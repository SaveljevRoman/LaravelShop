@extends('frontend::layout.app')

@section('title', 'Home')

@section('content')

    <div class="basket">

        <div class="basket__title">Корзина</div>

        <div class="basket__items">
            <div class="basket__items-left">

                <div class="basket__item">
                    <div class="basket__item-img">
                        <img class="basket__item-img" src="{{ 'img/products/iphone_x.jpg' }}" alt="img">
                    </div>
                    <div class="basket__item-caption">
                        <div class="basket__item-caption title">iPhone X 64GB</div>
                        <div class="basket__item-caption delete">Удалить</div>
                    </div>
                    <div class="basket__item-counter">
                        <div class="basket__item-counter--left">
                            <button></button>
                        </div>
                        <div class="basket__item-counter--center">
                            1
                        </div>
                        <div class="basket__item-counter--right">
                            <button></button>
                        </div>
                    </div>
                    <div class="basket__item-price">
                        67382 ₽
                    </div>
                </div>

                <div class="basket__item">
                    <div class="basket__item-img">
                        <img class="basket__item-img" src="{{ 'img/products/iphone_x.jpg' }}" alt="img">
                    </div>
                    <div class="basket__item-caption">
                        <div class="basket__item-caption title">iPhone X 64GB</div>
                        <div class="basket__item-caption delete">Удалить</div>
                    </div>
                    <div class="basket__item-counter">
                        <div class="basket__item-counter--left">
                            <button></button>
                        </div>
                        <div class="basket__item-counter--center">
                            1
                        </div>
                        <div class="basket__item-counter--right">
                            <button></button>
                        </div>
                    </div>
                    <div class="basket__item-price">
                        67382 ₽
                    </div>
                </div>

            </div>

            <div class="basket__items-right">
                <div class="basket__order-price">
                    Итого: 2 товара на 134764 ₽
                </div>
                <div class="basket__order-button button button__green">Заказать</div>
            </div>
        </div>


    </div>



@endsection

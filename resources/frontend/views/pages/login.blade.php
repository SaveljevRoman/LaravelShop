@extends('frontend::layout.app')

@section('title', 'Home')

@section('content')

<div class="auth">
    <div class="auth__wrap">
        <div class="auth__wrap-title">Вход</div>
        <form class="auth__wrap-form" action="" method="POST">
            <div class="input__field">
                <input class="input" type="email" placeholder="E-mail">
            </div>
            <div class="input__field">
                <input class="input" type="password" placeholder="Пароль">
            </div>
            <div>
                <button class="button">Войти</button>
            </div>
        </form>
    </div>
</div>

@endsection

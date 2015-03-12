@extends('template.template')

@section('content')

    <h2>Регистрация</h2>

    <form method="post" action="/registration">

        <p><input name="email" type="text" placeholder="Введите email" ></p><br />

        <p><input name="password" placeholder="Введите пароль" ></p><br />

        <p><input name="password_confirmation" placeholder="Повторите пароль" ></p><br />

        <p><input type="submit" value="Зарегистрироваться"></p>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

@stop
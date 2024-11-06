@extends('layouts.layout')
@section('title', 'Вход')

@section('content')
  <section>
    <h2>Вход</h2>

    @error('error')
    <strong class="warning">
      {{$message}}
    </strong>
    @enderror

    <form action="{{route('login')}}" method="post" enctype="application/x-www-form-urlencoded">
      @csrf

      <div>
        <label for="log-in-email">
          Почта
        </label>

        <input id="log-in-email" name="email" required type="email" placeholder="Введите email">
      </div>

      <div>
        <label for="log-in-password">
          Пароль
        </label>

        <input id="log-in-password" name="password" required type="password" placeholder="Введите password">
      </div>

      <div>
        <button type="submit">Вход</button>
      </div>
    </form>
  </section>
@endsection

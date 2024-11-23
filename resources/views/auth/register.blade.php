@extends('layouts.layout')

@section('title', 'Регистрация')

@section('content')
  <section>
    <h2>Регистрация</h2>

    @error('error')
    <strong class="warning">
      {{$message}}
    </strong>
    @enderror

    <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
      @csrf

      <div>
        <label for="register-surname">
          Фамилия
        </label>

        <input id="register-surname" name="surname" required type="text" placeholder="Введите фамилию">

        @error('surname')
        <p class="warning">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="register-name">
          Имя
        </label>

        <input id="register-name" name="name" required type="text" placeholder="Введите имя">

        @error('name')
        <p class="warning">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="register-patronymic">
          Отчество
        </label>

        <input id="register-patronymic" name="patronymic" type="text" placeholder="Введите отчество">

        @error('name')
        <p class="warning">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="register-email">
          Почта
        </label>

        <input id="register-email" name="email" required type="email" placeholder="Введите email">

        @error('email')
        <p class="warning">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label>
          Пол
        </label>

        <input id="register-sex-0" name="sex" type="radio" value="1" checked> М
        <input id="register-sex-1" name="sex" type="radio" value="0"> Ж

        @error('sex')
        <p class="warning">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="register-birthday">
          ДР
        </label>

        <input id="register-birthday" name="birthday" type="date" required placeholder="Введите др YYYY-MM-DD">

        @error('birthday')
        <p class="warning">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="register-nickname">
          Ник
        </label>

        <input id="register-nickname" name="nickname" type="text" placeholder="Введите ник" required>

        @error('nickname')
        <p class="warning">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="register-phone">
          Номер телефона
        </label>

        <input id="register-phone" name="phone" type="text" placeholder="Введите номер телефона">

        @error('phone')
        <p class="warning">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="register-password">
          Пароль
        </label>

        <input id="register-password" name="password" required type="password" placeholder="Введите password">
      </div>

      <div>
        <label for="register-password2">
          Подтвердите пароль
        </label>

        <input id="register-password2" name="password_confirmation" required type="password"
               placeholder="Введите password">
      </div>

      <div>
        <label for="register-avatar">
          Аватар
        </label>

        <input id="register-avatar" name="avatar" type="file" accept="image/jpeg,image/png,image/svg+xml">

        @error('avatar')
        <p class="warning">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <button type="submit">Регистрация</button>
      </div>
    </form>
  </section>
@endsection

@extends('layouts.layout')
@section('title', 'Регистрация • Bububu')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-5">
        <div class="card-header bg-primary text-white">
          <h2 class="mb-0">Регистрация</h2>
        </div>
        <div class="card-body">
          @error('error')
          <p class="alert alert-danger">{{ $message }}</p>
          @enderror
          <form action="{{ route('signup') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-3">
              <label for="surname">Фамилия *</label>
              <input id="surname" name="surname" class="form-control" placeholder="Введите фамилию" required>
              @error('surname')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mt-3">
              <label for="name">Имя *</label>
              <input id="name" name="name" class="form-control" placeholder="Введите имя" required>
              @error('name')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mt-3">
              <label for="patronymic">Отчество *</label>
              <input id="patronymic" name="patronymic" class="form-control" placeholder="Введите отчество">
              @error('patronymic')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mt-3">
              <label for="nickname">Никнейм *</label>
              <input id="nickname" name="nickname" class="form-control" placeholder="Введите никнейм" required>
              @error('nickname')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mt-3">
              <label>Пол *</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="sex-m" name="sex" value="1" checked>
                <label class="form-check-label" for="sex-m">Мужской</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="sex-f" name="sex" value="0">
                <label class="form-check-label" for="sex-f">Женский</label>
              </div>
              @error('sex')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mt-3">
              <label for="birthday">Дата рождения *</label>
              <input id="birthday" type="date" name="birthday" class="form-control" placeholder="Введите дату рождения"
                     required>
              @error('birthday')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mt-3">
              <label for="email">Электронная почта *</label>
              <input id="email" type="email" name="email" class="form-control" placeholder="Введите почту" required>
              @error('email')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mt-3">
              <label for="phone">Номер телефона</label>
              <input id="phone" type="tel" name="phone" class="form-control" placeholder="Введите номер телефона">
              @error('phone')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mt-3">
              <label for="password">Пароль *</label>
              <input id="password" type="password" name="password" class="form-control" placeholder="Придумайте пароль"
                     required>
              @error('password')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mt-3">
              <label for="password_confirmation">Потдверждение пароля *</label>
              <input id="password_confirmation" type="password" name="password_confirmation" class="form-control"
                     placeholder="Повторите пароль" required>
              @error('password_confirmation')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group mt-3">
              <label for="avatar">Аватар</label>
              <input id="avatar" name="avatar" type="file" class="form-control-file" accept="image/jpeg,image/png">
              @error('avatar')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-3">Зарегистрироваться</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
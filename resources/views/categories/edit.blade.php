@extends('layouts.layout')
@section('title', 'Изменение категории'. ($category->name ? "$category->name " : '' ). '• Bububu')
@section('content')
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Изменение категории товаров</h2>
    <a class="btn btn-secondary" href="{{ route('categories.index') }}">К списку</a>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Название категории *</label>
              <input id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                     placeholder="Введите название категории" value="{{ $category->name }}" required>
              @error('name')
              <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-3">Изменить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

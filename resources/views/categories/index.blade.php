@extends('layouts.layout')
@section('title', 'Категории товаров • Bububu')
@section('content')
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Категории товаров</h2>
    <a class="btn btn-success" href="{{ route('categories.create') }}">Добавить категорию</a>
  </div>
  <div class="row categories">
    @foreach($categories as $category)
      <div class="col-md-4 mb-2">
        <div class="card">
          <div class="card-body d-flex justify-content-between align-items-center">
            <h5 class="card-title">{{ $category->name }}</h5>
            <div class="d-flex gap-2">
              <a class="btn btn-primary btn-sm mr-2" href="{{ route('categories.show', $category->id) }}"
                 title="Посмотреть">
                <img src="{{ asset('assets/images/show.png') }}" alt="Посмотреть" class="img-fluid"
                     style="max-width: 20px; height: auto;">
              </a>
              <a class="btn btn-secondary btn-sm mr-2" href="{{ route('categories.edit', $category->id) }}"
                 title="Редактировать">
                <img src="{{ asset('assets/images/edit.png') }}" alt="Редактировать" class="img-fluid"
                     style="max-width: 20px; height: auto;">
              </a>
              <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" title="Удалить" class="btn btn-danger btn-sm">
                  <img src="{{ asset('assets/images/delete.png') }}" alt="Удалить" class="img-fluid"
                       style="max-width: 20px; height: auto;">
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection

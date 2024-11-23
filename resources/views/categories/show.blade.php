@extends('layouts.layout')
@section('title', 'Категория '. ($category->name ? "$category->name " : '' ). '• Bububu')
@section('content')
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Категория{{ $category->name ? ": $category->name" : '' }}</h2>
    <a class="btn btn-secondary" href="{{ route('categories.index') }}">К списку</a>
  </div>
  <div class="row categories">
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body d-flex justify-content-between align-items-center">
          <h5 class="card-title">{{ $category->name }}</h5>
          <div class="d-flex gap-2">
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
  </div>
@endsection

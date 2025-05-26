@extends('layouts.backend.app',[
    'title' => 'Edit Category',
    'pageTitle' => 'Edit Category',
])
@section('content')
@include('layouts.components.alert-dismissible')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('category.index') }}" class="btn btn-danger btn-sm">Batalkan</a>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('category.update', $category->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input required type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary btn-sm mt-2">Update</button>
        </form>
    </div>
</div>
@stop

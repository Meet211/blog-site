@extends('components.layout')
@section('content')
    <div class="container">
        <section class="my-5">
            <form action="{{ url('admin/categories/manage/save') }}" method="POST" id="submit-form">
                @if ($edit_category != [])
                    <input type="hidden" name="id" id="id" value="{{ $edit_category['id'] }}">
                @endif
                @php
                    $name = $edit_category['name'] ?? '';
                @endphp
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Category name" name="name"
                        value="{{ $name }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                </div>
            </form>
        </section>
    </div>
@stop

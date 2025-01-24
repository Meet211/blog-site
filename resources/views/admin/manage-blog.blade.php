@extends('components.layout')
@section('content')
    <div class="container">
        <section class="my-5 bg-white p-4 rounded">
            <form action="{{ url('admin/manage-blog/save') }}" method="POST" enctype="multipart/form-data"
                id="submit-form">
                @if ($edit_blog != [])
                    <input type="hidden" name="id" id="id" value="{{ $edit_blog['id'] }}">
                @endif
                @php
                    $title = $edit_blog['title'] ?? '';
                    $description = $edit_blog['description'] ?? '';
                    $image = isset($edit_blog['image']) ? url('storage/' . $edit_blog['image']) : '';
                    $category_id = $edit_blog['category_id'] ?? '';
                    $read_time = $edit_blog['read_time'] ?? '';
                @endphp
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="title" name="title"
                        value="{{ $title }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $description }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="read-time" class="form-label">Read time</label>
                    <input type="text" class="form-control" id="read-time" placeholder="5 min" name="read_time"
                        value="{{ $read_time }}">
                    @error('read_time')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Select Category</label>
                    <select class="form-select" aria-label="Default select example" id="category" name="category">
                        <option value="">select category</option>
                        @if (isset($categories))
                            @foreach ($categories as $category)
                                <option value="{{ $category['id'] }}"
                                    {{ $category['id'] == $category_id ? 'Selected' : '' }}>{{ $category['name'] }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                    @error('category')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                    <div class="img-box-200">
                        <img src="{{$image}}" alt="{{$title}}">
                    </div>
                    @error('image')
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

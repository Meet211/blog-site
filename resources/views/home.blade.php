@extends('components.layout')
@section('content')
    <div class="container">
        <section class="py-4">
            @foreach ($blogs as $index => $blog)
                @if ($index % 2 == 0)
                    <div class="row mb-3 g-3">
                        <div class="col-md-8 col-12">
                            <div class="blog-card shadow">
                                <div class="row g-0">
                                    <div class="col-md-6 col-12">
                                        <div class="blog-img-box">
                                            <a href="{{ url('blogs/' . $blog['id']) }}" class="w-100 h-100">
                                                @php
                                                    $img_style_1 = file_exists('storage/' . $blog['image'])
                                                        ? 'storage/' . $blog['image']
                                                        : asset('images/placeholder.png');
                                                @endphp
                                                <img src="{{ $img_style_1 }}" class="card-img-top"
                                                    alt="{{ $blog['title'] }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 p-3">
                                        <p class="mb-2 text-danger text-uppercase fw-medium">
                                            {{ $blog['category']['name'] ?? '' }}</p>
                                        <p class="mb-2 text-muted fst-italic">Read time {{ $blog['read_time'] }} minutes</p>
                                        <a href="{{ url('blogs/' . $blog['id']) }}">
                                            <h4>{{ $blog['title'] }}</h4>
                                        </a>
                                        <p class="card-text text-ellipsis">{{ $blog['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (isset($blogs[$index + 1]))
                            <div class="col-md-4 col-12">
                                <div class="blog-card shadow p-3">
                                    <p class="mb-2 text-danger text-uppercase fw-medium">
                                        {{ $blogs[$index + 1]['category']['name'] ?? '' }}</p>
                                    <p class="mb-2 text-muted fst-italic">Read time {{ $blogs[$index + 1]['read_time'] }}
                                        minutes
                                    </p>
                                    <a href="{{ url('blogs/' . $blogs[$index + 1]['id']) }}">
                                        <h4>{{ $blogs[$index + 1]['title'] }}</h4>
                                    </a>
                                    <p class="card-text text-ellipsis">{{ $blogs[$index + 1]['description'] }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        </section>
    </div>
@stop

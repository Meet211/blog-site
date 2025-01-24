@extends('components.layout')
@section('content')
    <div class="container">
        <div class="cs-blog-detail">
            <div class="cs-main-post">
                <figure>
                    @php
                        $img_style_1 = file_exists('storage/' . $blog->image)
                            ? url('storage/' . $blog->image)
                            : asset('images/placeholder.png');
                    @endphp
                    <img src="{{ $img_style_1 }}" alt="{{ $blog->title }}" class="img-fluid"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </figure>
            </div>

            <div class="cs-post-title">

                <div class="post-option mt-2">
                    <span class="post-date"><i class="cs-color icon-calendar6"></i> {{ $blog->created_at->format('M d, Y') }}

                    </span>
                </div>
            </div>

            <div class="cs-post-option-panel">
                <h1>{{ $blog->title }}</h1>
                <div class="rich-editor-text mt-3">
                    <p>{{ $blog->description }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection

@extends('components.layout')
@section('content')
    <div class="container">
        <section class="my-5 bg-white p-3 rounded">
            <div class="">
                <h3>Blogs</h3>
                <a class="btn btn-primary" href="{{ url('admin/home/create') }}">Create a New Blog</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">image</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($blogs) --}}
                        @if (isset($blogs))
                            @foreach ($blogs as $key => $blog)
                                @php
                                    $img = file_exists('storage/' . $blog['image'])
                                        ? url('storage/' . $blog['image'])
                                        : asset('images/placeholder.png');
                                @endphp
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $blog['title'] }}</td>
                                    <td>
                                        <div class="img-box-200"><img src="{{ $img }}" alt="{{ $blog['title'] }}"
                                                srcset=""></div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center gap-2"><a
                                                href="{{ url('admin/home/create?id=' . $blog['id']) }}"
                                                class="btn btn-primary">Edit</a>
                                            <button class="btn btn-danger delete_blog" data-id="{{ $blog['id'] }}">
                                                Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection

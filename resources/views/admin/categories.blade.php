@extends('components.layout')
@section('content')
    <div class="container">
        <section class="my-5">
            <div class="p-3 bg-white rounded">
                <a class="btn btn-primary" href="{{ url('admin/categories/manage') }}">Create a New Category</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($categories))
                            @foreach ($categories as $key => $category)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $category['name'] }}</td>
                                    <td>
                                        <div><a href="{{ url('admin/categories/manage?id=' . $category['id']) }}"
                                                class="btn btn-primary">Edit</a></div>
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

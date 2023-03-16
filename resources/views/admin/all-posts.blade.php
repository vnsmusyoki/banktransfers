@extends('layouts.main')
@section('title', 'Admin | All Posts')
@section('content')

    <!-- Dashboard Section start -->
    <section class="dashboard-section body-collapse transactions recipients">
        <div class="overlay pt-120">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('admin.createblog') }}">Add New Post</a>
                    </div>
                    <hr>
                    @foreach ($blogs as $item)
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <div class="card" style="100%;">
                                <img class="card-img-top" src="{{ asset('storage/pictures/' . $item->image) }}"
                                    style="height:40vh;" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">{{ $item->description }}</p>
                                    <a href="{{ route('admin.editblog', $item->slug) }}" class="btn btn-primary">Edit
                                        Post</a>
                                        <a href="{{ route('admin.deleteblog', $item->slug) }}" class="btn btn-danger">Delete
                                            Post</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section end -->

@endsection

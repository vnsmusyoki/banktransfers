@extends('layouts.main')
@section('title', 'Admin | Create New Blog')
@section('content')

    <!-- Dashboard Section start -->
    <section class="dashboard-section body-collapse transactions recipients">
        <div class="overlay pt-120">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-header bg-warning text-white">
                                Editing  Blog & Posts
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.updateblog', $blog->slug) }}" method="POST" autocomplete="off"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input type="text" name="title" placeholder="Write the topic here..."
                                                    style="border-color:black;" value="{{ $blog->title}}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="">Upload Image/Photo</label>
                                                <input type="file" name="picture" placeholder=""
                                                    style="border-color:black;">
                                                @error('picture')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="">Select Category</label>
                                                <select name="category" id="" class="form-control"
                                                    style="border-color:black;">
                                                    <option value="">click to select</option>
                                                    <option value="blog">Upload this as a Blog</option>
                                                    <option value="post">Upload this as a Post</option>
                                                </select>
                                                @error('category')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea name="description" id="" cols="30" rows="5" class="form-control"
                                                    style="border-color:black;">{{ $blog->description }}</textarea>

                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning mt-3">Create New Post/Blog</button>

                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section end -->

@endsection

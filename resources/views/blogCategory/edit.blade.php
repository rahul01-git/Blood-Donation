@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 m-auto ">
                <div class="section-body justify-content-center">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header text-center mb-3 justify-content-between">
                                    <h4>Edit Blog Category</h4>
                                    <div>
                                        <a href="{{ route('blogCategory.index') }}" class="btn btn-primary"> View Blog Categories</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('blogCategory.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label>Category Name: </label>
                                            <input type="text" class="form-control" name="category_name" value={{ $item->category_name }}>
                                        </div>
                                        <div class="mb-3">
                                            <label>Category Slug: </label>
                                            <input type="text" class="form-control" name="category_slug" value={{ $item->category_slug}}>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

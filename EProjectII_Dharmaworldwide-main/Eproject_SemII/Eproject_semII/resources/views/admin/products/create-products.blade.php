    @section('title', 'Add Product')
@extends('admin.layouts.master')
@section('custom-style')
    <style>

    </style>
@endsection
@section('main-content')
    <section class="h-100">
        <div class="container mt-4 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="col-xl-12">
                            <form action="{{route('create-products')}}" method="post">
                                @csrf
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-3 text-uppercase text-center">Add new product</h3>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control border-success" name="name"
                                               placeholder="">
                                        @error('name')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Picture</label>
                                                <input type="text" class="form-control border-success" name="thumbnail"
                                                       placeholder=" ">
                                            </div>
                                            @error('thumbnail')
                                            <div class="text-danger">* {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Capacity</label>
                                                <input type="text" class="form-control border-success" name="weight"
                                                       placeholder=" ">
                                            </div>
                                            @error('weight')
                                            <div class="text-danger">* {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Price</label>
                                                <input type="text" class="form-control border-success" name="price"
                                                       placeholder=" ">
                                                @error('price')
                                                <div class="text-danger">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Category</label>
                                                <select name="category" class="form-control border-success">
                                                    @foreach(App\Enums\Category::getValues() as $type)
                                                        <option value="{{$type}}">{{App\Enums\Category::getDescription($type)}}</option>
                                                    @endforeach
                                                </select>
                                                @error('category')
                                                <div class="text-danger">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline mb-4">
                                                <label class="form-label">Label Name Title</label>
                                                <input type="text" class="form-control border-success" name="labelName"
                                                       placeholder=" ">
                                                @error('labelName')
                                                <div class="text-danger">* {{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Tag</label>
                                                <input type="text" class="form-control border-success" name="Tag"
                                                       placeholder=" ">
                                            </div>
                                            @error('Tag')
                                            <div class="text-danger">* {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Label detail (category)</label>
                                        <input type="text" class="form-control border-success" name="labelTitle"
                                               placeholder="">
                                        @error('labelTitle')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Description</label>
                                        <input type="text" class="form-control border-success" name="description"
                                               placeholder="">
                                        @error('labelTitle')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="row justify-content-center px-3">
                                        <button type="submit" class="btn btn-success">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-js')
    <script>

    </script>
@endsection

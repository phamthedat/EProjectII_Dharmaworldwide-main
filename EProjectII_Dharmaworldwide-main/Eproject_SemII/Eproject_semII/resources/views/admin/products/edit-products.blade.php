@section('title', 'Product')
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
                            <form action="{{route('update-product', $edit->id )}}" method="post">
                                @method('put')
                                @csrf
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-3 text-uppercase">Product Edit</h3>
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
                                               placeholder="" value="{{$edit->name}}">
                                        @error('name')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Picture</label>
                                                <input type="text" class="form-control border-success" name="thumbnail"
                                                       placeholder=" " value="{{$edit->thumbnail}}">
                                            </div>
                                            @error('thumbnail')
                                            <div class="text-danger">* {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Size</label>
                                                <input type="text" class="form-control border-success" name="weight"
                                                       placeholder=" " value="{{$edit->weight}}">
                                                @error('weight')
                                                <div class="text-danger">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Price</label>
                                                <input type="text" class="form-control border-success" name="price"
                                                       placeholder=" " value="{{$edit->price}}">
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
                                                        <option {{$edit->category == $type ? 'selected' : ''}} value="{{$type}}">{{App\Enums\Category::getDescription($type)}}</option>
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
                                                <label class="form-label">Label Name</label>
                                                <input type="text" class="form-control border-success" name="labelName"
                                                       placeholder=" " value="{{$edit->labelName}}">
                                                @error('labelName')
                                                <div class="text-danger">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Tag</label>
                                                <input type="text" class="form-control border-success" name="Tag"
                                                       placeholder=" " value="{{$edit->Tag}}">
                                            </div>
                                            @error('Tag')
                                            <div class="text-danger">* {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">label</label>
                                        <input type="text" class="form-control border-success" name="labelTitle"
                                               placeholder="" value="{{$edit->labelTitle}}">
                                        @error('labelTitle')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="row justify-content-center px-3">
                                        <button type="submit" class="btn btn-success">Send</button>
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

@section('title', 'User')
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
                        <form action="{{route('update-user', $obj->id)}}" method="post">
                            @method('put')
                            @csrf
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-3 text-uppercase">
                                    Edit account information</h3>
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
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control border-success" name="fullName"
                                           value="{{$obj->fullName}}">
                                    @error('fullName')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control border-success" name="phone"
                                                   value="{{$obj->phone}}">
                                        </div>
                                        @error('phone')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control border-success" name="address"
                                                   value="{{$obj->address}}">
                                        </div>
                                        @error('address')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control border-success" name="email"
                                                   value="{{$obj->email}}">
                                            @error('email')
                                            <div class="text-danger">* {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Username</label>
                                            <input type="text" class="form-control border-success" name="username"
                                                   value="{{$obj->username}}">
                                            @error('username')
                                            <div class="text-danger">* {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control border-success" name="password"
                                                   value="{{$obj->password}}">
                                            @error('password')
                                            <div class="text-danger">* {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Position</label>
                                            <select name="role" class="form-control border-success">
                                                <option value="{{\App\Enums\Role::ADMIN}}">Admin</option>
                                                <option value="{{\App\Enums\Role::USER}}">User</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label">Status</label>
                                    <select class="form-control border-success" name="status">
                                        @foreach(App\Enums\UserStatus::getValues() as $type)
                                            <option {{$obj->type == $type ? 'selected' : ''}} value="{{$type}}">{{App\Enums\UserStatus::getDescription($type)}}</option>
                                        @endforeach
                                    </select>
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
    </section>
@endsection
@section('custom-js')
    <script>

    </script>
@endsection

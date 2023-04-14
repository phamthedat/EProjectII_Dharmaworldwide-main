@section('title', 'Login')
@extends('client.layouts.master-1')

@section('custom-style')

@endsection

@section('main-content')
    <section>
        <div class="container mt-4 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img
                                    src="/libs/client/img/logo/login.jpg"
                                    width="525px" height="600px"
                                />
                            </div>
                            <div class="col-xl-6">
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="card-body text-black" style="padding: 80px">
                                        <h3 class="mb-3 text-uppercase text-center">Login</h3>
                                        @if(session('error-login'))
                                            <div class="text-danger" style="font-weight: bold; margin-bottom: 10px;">
                                                {{session('error-login')}}
                                            </div>
                                        @endif
                                        <label class="form-label">Username</label>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-success border-success"><i class="fas fa-user" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="text" class="form-control border-success py-2" name="username"
                                                   placeholder=" ">

                                        </div>
                                        @error('username')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror


                                        <label class="form-label mt-2">Password</label>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text  bg-success border-success"><i class="fas fa-key" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="password" class="form-control border-success" name="password"
                                                   placeholder=" ">

                                        </div>
                                        @error('password')
                                        <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                                        <div class="row justify-content-center px-3"> <button type="submit" class="btn-block btn-submit">Send</button> </div>
                                        <div class="row justify-content-center my-2"> <a href="#" class="text-muted">Forgot Password?</a> </div>
                                        <div class="bottom text-center mb-5">
                                            <p href="/home/register" class="sm-text mx-auto mb-3">You don't have an account?
                                                <a href="/register" class="btn btn-success ml-2 btn-register">Create new
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-js')

@endsection

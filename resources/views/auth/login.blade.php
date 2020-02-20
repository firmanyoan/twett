@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow" style="rounded">
                <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="" id="" class="form-control bg-light" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" name="" id="" class="form-control bg-light" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                    @endif
                    <br>
                    <br>
                    <div class="form-group row mb-0">
                       3 <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                              {{ __('Log in') }}
                            </button>
                        </div>
                    </div>       
                </form>
                    <div class="py-3"></div>
                </div>
                    <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('img/mhgsvdaksj.jpg')}}" alt="" class="" height="40" style="margin-top; -30px;">
                    </div>
                    <br>
                        <h3 class="text-secondary text-center">She what's happening in <br> the world rigth now</h3>
                    <br>
                        <a href="http://twitter.com/account/access?flow=signup">
                            <h6 class="font-weight-bold">Join Twitter Today.</h6>
                        </a>
                        @if (Route::has('register'))
                        <div class="form-group row mb-10">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary col-md-10">
                                    {{ __('Sign Up') }}
                                </button>    
                        </div>
                        </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

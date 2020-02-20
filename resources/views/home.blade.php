@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex">
                        
                            <img src="{{asset('img/ethan-dow-xssEs_oCv-A-unsplash.jpg')}}" 
                                     width="50" 
                                     height="50" 
                                     class="rounded-circle"
                                     alt="">
                                     <div class="ml-3">
                                
                                <h6 class="text-dark">
                                    Firman
                                    <small class="text-muted">@firman
                                    </small>
                                </h6>
                                <h6 class="text-primary">@Man
                                    <span class="text-muted">
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipisching elit,
                                    sed do .
                                    </span>
                                </h6>
                            </div>       
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
@endsection

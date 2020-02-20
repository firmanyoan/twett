@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-3">
            <!-- posisi kiri -->
        </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="d-flex card-header border-0">
                        <div class="mr-auto">
                            <h6 class="text-muted">Tweet</h6>
                        </div>
                        <div>
                            <svg fill="none" 
                                 height="24" 
                                 stroke="#000" 
                                 stroke-linecap="round" 
                                 stroke-linejoin="round" 
                                 stroke-width="2" 
                                 viewBox="0 0 24 24" 
                                 width="24" 
                                 xmlns="http://www.w3.org/2000/svg">
                                 <circle cx="12" cy="12" r="2"/>
                                 <circle cx="12" cy="4" r="2"/>
                                 <circle cx="12" cy="20" r="2"/>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="d-flex">
                                <img src="{{asset('img/ethan-dow-xssEs_oCv-A-unsplash.jpg')}}" 
                                     width="50" 
                                     height="50" 
                                     class="rounded-circle"
                                     alt="">
                                <h6 class="text-dark">Man
                                    <h6 class="text-muted">@man</h6>
                                </h6>
                                <p class="text-primary">@man
                                    <p class="text-muted">
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipisching elit,
                                    sed do .
                                    </p>
                                </p>
                            </div>
                                <div>

                                </div>
                            </div>

                    </div>  
                </div>
            </div>
        <!-- posisi kanan -->
    <div class="col-md-3">
        <div class="card-body">

        </div>
    </div>
</div>
@endsection

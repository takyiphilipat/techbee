@extends('layouts.extends.appab')
@section('content')
  <div class="container-fluid p-0">


        <div class="page-header pb-5">
            <div class="container text-center py-5">
                <h1 class="display-4 text-uppercase mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('users.welcome') }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-primary active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

@include('ui.service')
@include('ui.banner')
@include('ui.testimony')
@endsection

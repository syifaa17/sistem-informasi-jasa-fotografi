@extends('layouts.app')
@section('content')
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2><span>Hi {{ auth()->user()->name }}</span></h2>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
@endsection

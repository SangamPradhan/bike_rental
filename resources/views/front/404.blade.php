@extends('layouts.app')
@section('content')

<main id="main">

<section class="error-page-area default-padding">
        <div class="container">
            <div class="row align-center text-center">
                <div class="col-lg-8 offset-lg-2">
                    <div class="error-box">
                        <h1>4<img src="{{ asset('assets/img/icon/sad.png')}}" class="img-fluid" alt="">4</h1>
                        <h2>Sorry Page Was Not Found!</h2>
                        <p>
                            We're sorry, but the page you were looking for doesn't exist. It might have been removed, had its name changed, or is temporarily unavailable.
                        </p>
                        <a class="btn btn-primary" href="/"><i class="bi bi-angle-right"></i> Back to Home</a>

                    </div>
                </div>
            </div>
        </div>
</section>

</main>

@endsection

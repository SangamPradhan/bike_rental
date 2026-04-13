@extends('layouts.app')

@push('css')
    <meta property="og:title" content="{{ $service->title }} - Gratifying Spa" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{{ strip_tags($service->description) }}" />
    <meta property="og:url" content="{{ route('service-details', $service->id) }}" />
    <meta property="og:image" content="{{ $service->image_url }}" />
@endpush

@section('content')
    <main>
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="">
                    <h2>Experience the Best of {{ ucwords(strtolower($service->category)) }} at Our Spa</h2>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                        <li class="breadcrumb-item active" style="color: black">{{ $service->title }}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="services-area">
            <div class="container py-5">
                <div class="row">
                    <!-- Main Service Content -->
                    <div class="col-lg-8 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="{{ $service->getImage() }}" class="card-img-top" alt="{{ $service->title }}"
                                style="height: 400px; object-fit: cover;">
                            <div class="card-body p-4">
                                <h2 class="service-title mb-3" style="color: var(--color-primary);">{{ $service->title }}
                                </h2>

                                <!-- First time/price (always shown) -->
                                <div class="d-flex align-items-center mb-3">
                                    <span class="badge me-2"
                                        style="background-color: var(--color-primary); color:rgb(238, 239, 240);">{{ number_format($service->time_one) }}
                                        minutes</span>
                                    <span class=" fw-bold" style="color: #306e3d;"> Rs.
                                        {{ number_format($service->price) }}/-</span>
                                </div>

                                <!-- Second time/price (conditional) -->
                                @if ($service->price_two && $service->time_two)
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="badge me-2"
                                            style="background-color: var(--color-primary); color:rgb(244, 245, 246);">
                                            {{ number_format($service->time_two) }} minutes</span>
                                        <span class=" fw-bold" style="color: #306e3d;"> Rs.
                                            {{ number_format($service->price_two) }}/-</span>
                                    </div>
                                @endif

                                <!-- Third time/price (conditional) -->
                                @if ($service->price_three && $service->time_three)
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="badge me-2"
                                            style="background-color: var(--color-primary); color: rgb(244, 245, 246);">
                                            {{ number_format($service->time_three) }} minutes</span>
                                        <span class=" fw-bold" style="color: #306e3d;"> Rs.
                                            {{ number_format($service->price_three) }}/-</span>
                                    </div>
                                @endif

                                <div class="card-text mb-4 rich-text-content">
                                    {!! $service->description !!}
                                </div>
                                <div class="button-container">
                                    <button type="button" onclick="window.location.href='{{ route('ride-booking') }}';"
                                        class="btn btn-primary">Book Now</button>
                                    <a href="{{ route('services') }}"
                                        class="btn btn-secondary animated fadeInUp scrollto">Back to
                                        Services<!-- <i class="bi bi-chevron-double-right"></i> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Related Services Sidebar -->
                    <div class="col-lg-4">
                        <h3 class="mb-4">Related Services</h3>
                        <div class="related-service-container">
                            @foreach ($relatedServices as $relatedService)
                                <a href="{{ route('service-details', $relatedService->id) }}" class="text-decoration-none">
                                    <div class="card mb-3 border-0 shadow-sm related-service-item">
                                        <div class="row g-0">
                                            <div class="col-4">
                                                <img src="{{ $relatedService->getImage() }}"
                                                    class="img-fluid rounded-start related-service-image"
                                                    alt="{{ $relatedService->title }}"
                                                    style="width: 150px; height: 100px; object-fit: cover;">
                                            </div>
                                            <div class="col-8">
                                                <div class="card-body">
                                                    <h5 class="card-title" style="color: var(--color-primary);">
                                                        {{ $relatedService->title }}
                                                    </h5>
                                                    <p class="card-text">
                                                        <small class="text-muted">
                                                            Starting From Rs {{ number_format($relatedService->price) }}/-
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection

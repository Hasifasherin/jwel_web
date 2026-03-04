@extends('layouts.app')
@section('title','Wings of jewels')
@section('meta_description','jewellery page')

@section('content')

<!-- ===== FULL IMAGE SLIDER ===== -->
<div class="container hero-slider">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slider-container">
                    <img src="{{ asset('images/slider1.png') }}" class="slider-img" alt="Jewellery Banner">
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider-container">
                    <img src="{{ asset('images/slider1.png') }}" class="slider-img" alt="Jewellery Banner">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== CATEGORY SECTION ===== -->
<div class="container category-section py-5">
    <div class="text-center mb-5">
        <h2 class="category-title">Find Your Perfect Match</h2>
        <p class="category-subtitle">Shop by Categories</p>
    </div>

    <div class="row">
        @php
        $categories = [
            ['bracelet','bracelet.png','BRACELET'],
            ['chain','chain.png','CHAIN'],
            ['finger-ring','ring.png','FINGER RING'],
            ['earrings','earrings.jpg','EARRINGS'],
            ['bangles','bangles.png','BANGLES'],
            ['all','view.png','VIEW MORE']
        ];
        @endphp

        @foreach($categories as $cat)
        <div class="col-lg-2 col-md-3 col-6 mb-4">
            <a href="{{ route('category',$cat[0]) }}" class="category-card">
                <img src="{{ asset('images/'.$cat[1]) }}" alt="{{ $cat[2] }}">
                <h5>{{ $cat[2] }}</h5>
            </a>
        </div>
        @endforeach
    </div>
</div>

<!-- ===== NEW ARRIVALS ===== -->
<div class="container new-arrivals-section py-5">
    <div class="text-center mb-5">
        <h2 class="category-title">New Arrivals</h2>
        <p class="category-subtitle">Discover Our Latest Collection</p>
    </div>

    <div class="row">
        @php
        $newProducts = [
            ['new1.jpg','₹13,500'],
            ['new2.jpg','₹9,200'],
            ['new3.jpg','₹6,800'],
            ['new4.jpg','₹11,000'],
            ['new1.jpg','₹7,500'],
            ['new2.jpg','₹10,200']
        ];
        @endphp

        @foreach($newProducts as $index => $product)
        <div class="col-lg-3 col-md-4 col-6 mb-4 {{ $index >= 4 ? 'extra-new d-none' : '' }}">
            <div class="card product-card border-0">
                <div class="position-relative">
                    <span class="new-badge">NEW</span>
                    <img src="{{ asset('images/'.$product[0]) }}" class="card-img-top">
                </div>
                <div class="card-body text-center">
                    <p class="text-danger fw-bold mb-0">{{ $product[1] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <button id="toggleNewArrivals" class="btn btn-outline-dark px-4">
            View More
        </button>
    </div>
</div>

<!-- ===== TRUST SECTION ===== -->
<div class="container trust-section py-5">
    <div class="text-center mb-5">
        <h2 class="category-title">Trust Us To Be Part Of Your Precious Moments</h2>
        <p class="category-subtitle">Because Every Memory Deserves Brilliance</p>
    </div>

    <div class="row text-center">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="trust-card p-4">
                <div class="trust-icon mb-3">💎</div>
                <h5>Premium Quality</h5>
                <p>Crafted with certified materials and exceptional detail.</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="trust-card p-4">
                <div class="trust-icon mb-3">🔒</div>
                <h5>Secure Payments</h5>
                <p>Safe and encrypted transactions for peace of mind.</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="trust-card p-4">
                <div class="trust-icon mb-3">🚚</div>
                <h5>Fast Delivery</h5>
                <p>Reliable shipping for your special occasions.</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="trust-card p-4">
                <div class="trust-icon mb-3">❤️</div>
                <h5>Customer Satisfaction</h5>
                <p>Your happiness is always our priority.</p>
            </div>
        </div>
    </div>
</div>

<!-- ===== BEST SELLERS ===== -->
<div class="container best-seller-section py-5">
    <div class="text-center mb-5">
        <h2 class="category-title">Best Sellers</h2>
        <p class="category-subtitle">Our Most Loved Jewellery</p>
    </div>

    <div class="row">
        @php
        $bestSellers = [
            ['chain1.png','₹12,000'],
            ['bangle.jpeg','₹15,000'],
            ['sted.png','₹8,500'],
            ['bracelet1.jpg','₹5,000'],
            ['new1.jpg','₹7,500'],
            ['new2.jpg','₹10,200'],
            ['new3.jpg','₹6,800'],
            ['new4.jpg','₹11,000'],
            ['new1.jpg','₹9,500'],
            ['new2.jpg','₹13,200'],
            ['new3.jpg','₹14,800'],
            ['new4.jpg','₹16,000']
        ];
        @endphp

        @foreach($bestSellers as $index => $item)
        <div class="col-lg-3 col-md-4 col-6 mb-4 {{ $index >= 8 ? 'extra-best d-none' : '' }}">
            <div class="card product-card border-0">
                <img src="{{ asset('images/'.$item[0]) }}" class="card-img-top">
                <div class="card-body text-center">
                    <p class="text-danger fw-bold mb-0">{{ $item[1] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <button id="toggleBestSellers" class="btn btn-outline-dark px-4">
            Show More
        </button>
    </div>
</div>



@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

    // NEW ARRIVALS
    const toggleNew = document.getElementById("toggleNewArrivals");
    if (toggleNew) {
        toggleNew.addEventListener("click", function () {
            document.querySelectorAll(".extra-new").forEach(el => {
                el.classList.toggle("d-none");
            });

            toggleNew.innerText =
                toggleNew.innerText.trim() === "View More"
                ? "Show Less"
                : "View More";
        });
    }

    // BEST SELLERS
    const toggleBest = document.getElementById("toggleBestSellers");
    if (toggleBest) {
        toggleBest.addEventListener("click", function () {
            document.querySelectorAll(".extra-best").forEach(el => {
                el.classList.toggle("d-none");
            });

            toggleBest.innerText =
                toggleBest.innerText.trim() === "Show More"
                ? "Show Less"
                : "Show More";
        });
    }

});
</script>
@endpush
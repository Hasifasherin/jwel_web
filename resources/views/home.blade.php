@extends('layouts.app')
@section('title', 'Wings of Jewels - Exquisite Jewellery Collection')
@section('meta_description', 'Explore Wings of Jewels for a premium collection of fine and affordable jewellery. Shop our beautiful range of bracelets, necklaces, earrings, and rings.')
@section('meta_keywords', 'jewellery, buy jewellery online, fine jewelry, bracelets, diamond rings, gold necklaces, affordable jewelry')

@section('content')


<!-- ===== FULL IMAGE SLIDER ===== -->
<div class="container hero-slider" data-aos="fade-in">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
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
    <div class="text-center mb-5" data-aos="fade-up">
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
            ['Anklet','anklet.jpg','ANKLET '],
            ['Hip-Chain','hip-chain.png','HIP CHAIN '],
            ['all','view.png','VIEW MORE']
        ];
        @endphp

        @foreach($categories as $index => $cat)
        <div class="col-lg-3 col-md-3 col-6 mb-4"
             data-aos="zoom-in"
             data-aos-delay="{{ $index * 100 }}">
            <a href="{{ route('category',$cat[0]) }}" class="category-card text-center d-block">
                <img src="{{ asset('images/'.$cat[1]) }}" alt="{{ $cat[2] }}">
                <h5 class="mt-3">{{ $cat[2] }}</h5>
            </a>
        </div>
        @endforeach
    </div>
</div>

<!-- ===== NEW ARRIVALS ===== -->
<div class="container new-arrivals-section py-5">
    <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="category-title">New Arrivals</h2>
        <p class="category-subtitle">Discover Our Latest Collection</p>
    </div>

    <div class="row" id="newArrivalContainer">
        @php
        $newProducts = [
            ['anklet400.png','₹400'],
            ['ring6.jpeg','₹159'],
            ['bangles319.png','₹319'],
            ['bangle319.png','₹319'],
            ['ring5.jpeg','₹159'],
            ['chain319.png','₹319'],
        ];
        @endphp

        @foreach($newProducts as $index => $product)
        <div class="col-lg-3 col-md-4 col-6 mb-4 new-item {{ $index >= 4 ? 'd-none' : '' }}"
             data-aos="fade-up"
             data-aos-delay="{{ $index * 120 }}">
            <div class="card product-card border-0">
                <div class="position-relative">
                    <span class="new-badge">NEW</span>
                    <img src="{{ asset('images/'.$product[0]) }}" class="card-img-top">
                </div>
                <div class="card-body text-center">
                    <p class=" fw-bold mb-0"style="color:#C9A227;">{{ $product[1] }}</p>
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
    <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="category-title">Trust Us To Be Part Of Your Precious Moments</h2>
        <p class="category-subtitle">Because Every Memory Deserves Brilliance</p>
    </div>

    <div class="row text-center">
        @php
        $trustItems = [
            ['💎','Premium Quality','Crafted with certified materials and exceptional detail.'],
            ['🔒','Secure Payments','Safe and encrypted transactions for peace of mind.'],
            ['🚚','Free Delivery','Reliable shipping for your special occasions.'],
            ['❤️','Customer Satisfaction','Your happiness is always our priority.']
        ];
        @endphp

        @foreach($trustItems as $index => $item)
        <div class="col-lg-3 col-md-6 mb-4"
             data-aos="fade-up"
             data-aos-delay="{{ $index * 150 }}">
            <div class="trust-card p-4 h-100">
                <div class="trust-icon mb-3">{{ $item[0] }}</div>
                <h5>{{ $item[1] }}</h5>
                <p>{{ $item[2] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- ===== BEST SELLERS ===== -->
<div class="container best-seller-section py-5">
    <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="category-title">Best Sellers</h2>
        <p class="category-subtitle">Our Most Loved Jewellery</p>
    </div>

    <div class="row">
        @php
        $bestSellers = [
        ['bang329.jpeg','₹329'],
            ['chain259.png','₹259'],
             ['braclet239.png','₹239'],
            ['b359.jpeg','₹359'], 
            ['3.jpeg','₹319'],
            ['bracelte329.png','₹329'],
            ['279.jpeg','₹279'],
             ['ring3.jpeg','₹159'],
            ['259.jpeg','₹259'],
            ['bangle.jpeg','₹299'],
            ['ring2.jpeg','₹159'],
            ['259.1.jpeg','₹259'],           
            
        ];
        @endphp

        @foreach($bestSellers as $index => $item)
        <div class="col-lg-3 col-md-4 col-6 mb-4 best-item {{ $index >= 8 ? 'd-none' : '' }}"
             data-aos="zoom-in-up"
             data-aos-delay="{{ $index * 80 }}">
            <div class="card product-card border-0">
                <img src="{{ asset('images/'.$item[0]) }}" class="card-img-top">
                <div class="card-body text-center">
                    <p class="fw-bold mb-0" style="color:#C9A227;">{{ $item[1] }}</p>
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

document.addEventListener("DOMContentLoaded", function(){

// NEW ARRIVALS
let newBtn = document.getElementById("toggleNewArrivals");
let newItems = document.querySelectorAll(".new-item");
let newExpanded = false;

newBtn.addEventListener("click", function(){

newItems.forEach((item,index)=>{
if(index >= 4){
item.classList.toggle("d-none");
}
});

newExpanded = !newExpanded;
newBtn.innerText = newExpanded ? "Show Less" : "View More";

});


// BEST SELLERS
let bestBtn = document.getElementById("toggleBestSellers");
let bestItems = document.querySelectorAll(".best-item");
let bestExpanded = false;

bestBtn.addEventListener("click", function(){

bestItems.forEach((item,index)=>{
if(index >= 8){
item.classList.toggle("d-none");
}
});

bestExpanded = !bestExpanded;
bestBtn.innerText = bestExpanded ? "Show Less" : "Show More";

});

});

</script>
@endpush
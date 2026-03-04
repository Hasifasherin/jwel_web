@extends('layouts.app')

@section('title', ucfirst($slug))

@section('content')

<div class="container py-5">

    <h2 class="text-center mb-5 text-uppercase fw-semibold">
        {{ $slug == 'all' ? 'All Products' : ucfirst($slug) }}
    </h2>

    <div class="row g-4">

        @php
        $products = [];

        if($slug == 'all'){
            $products = [
                ['bracelet.png','₹5,000'],
                ['bracelet1.jpg','₹5,000'],
                ['new1.jpg','₹5,000'],
                ['chain1.png','₹12,000'],
                ['chain.png','₹12,000'],
                ['chain2.jpg','₹12,000'],
                ['new2.jpg','₹12,000'],
                ['chains.jpg','₹12,000'],
                ['ring.png','₹15,000'],
                ['new4.jpg','₹8,500'],
                ['sted.png','₹8,500'],
                ['earrings.jpg','₹8,500'],
            ];
        }

        elseif($slug == 'bracelet'){
            $products = [
                ['bracelet1.jpg','₹5,000'],
                ['bracelet.png','₹5,000'],
                ['new1.jpg','₹5,000'],
            ];
        }

        elseif($slug == 'chain'){
            $products = [
                ['chain1.png','₹12,000'],
                ['chains.jpg','₹12,000'],
                ['chain2.jpg','₹12,000'],
                ['new2.jpg','₹12,000'],
            ];
        }
        elseif($slug == 'finger-ring'){
            $products = [
                ['ring.png','₹15,000'],
            ];
        }

        elseif($slug == 'earrings'){
            $products = [
                ['new4.jpg','₹8,500'],
                ['sted.png','₹8,500'],
                ['earrings.jpg','₹8,500'],
            ];
        }
        @endphp

        @forelse($products as $product)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/'.$product[0]) }}" 
                         class="card-img-top img-fluid"
                         alt="Jewellery Product">

                    <div class="card-body text-center">
                        <p class="text-danger fw-bold mb-0 fs-5">
                            {{ $product[1] }}
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>No products found.</p>
            </div>
        @endforelse

    </div>

</div>

@endsection
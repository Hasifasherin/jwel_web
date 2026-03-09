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
                ['279.jpeg','₹279'],
                ['bangles319.png','₹319'],
                ['chain329.png','₹329'],
                ['ring1.jpeg','₹159'],
                ['259.jpeg','₹259'],
                ['braclet239.png','₹239'],
                ['chains259.png','₹259'],
                ['ring2.jpeg','₹159'],
                ['329.jpeg','₹329'],
                ['ban349.jpeg','₹349'],
                ['chain-289.png','₹289'],
                ['ring3.jpeg','₹159'],
                ['359.jpeg','₹359'],
                ['bangle.jpeg','₹299'],
                ['259.1.jpeg','₹259'],
                ['ring4.jpeg','₹159'],
                ['279.1.jpeg','₹279'],
                ['bracelte329.png','₹329'],
                ['259.3.jpeg','₹259'],
                ['ring5.jpeg','₹159'],
                ['259.4.jpeg','₹259'],
                ['ban359.jpeg','₹359'],
                ['a.jpeg','₹359'],
                ['ring6.jpeg','₹159'],
                ['b359.jpeg','₹359'],
                ['3.jpeg','₹319'],
                ['chain259.png','₹259'],
                ['1.jpeg','₹319'],
                ['chain329.jpeg','₹329'],
                ['2.jpeg','₹319'],
                ['chain319.png','₹319'],
                ['119.jpeg','₹119'],
                ['chain-earing.png','₹359'],
                ['189.1.jpeg','₹189'],
                ['bang329.jpeg','₹329'],
                ['ring189.jpeg','₹259'],
                ['anklets.jpeg','₹400'],
                ['anklet400.png','₹400']
            ];
        }

        elseif($slug == 'bracelet'){
            $products = [
                ['braclet239.png','₹239'],
                ['bracelte329.png','₹329'],
                
            ];
        }

        elseif($slug == 'chain'){
            $products = [
                ['279.jpeg','₹279'],
                 ['chain329.png','₹329'],
                ['chains259.png','₹259'],
                ['chain-289.png','₹289'],
                ['259.jpeg','₹259'],
                ['359.jpeg','₹359'],
                ['259.1.jpeg','₹259'],
                ['279.1.jpeg','₹279'],
                ['329.jpeg','₹329'],
                ['259.3.jpeg','₹259'],
                ['259.4.jpeg','₹259'],
                ['a.jpeg','₹359'],
                ['b359.jpeg','₹359'], 
                ['chain259.png','₹259'],
                ['chain329.jpeg','₹329'],
                ['chain319.png','₹319'], 
                ['chain-earing.png','₹359'],
                


            ];
        }
        elseif($slug == 'bangles'){
            $products = [
                 ['bangles319.png','₹319'],
                 ['bangle319.png','₹319'],
                ['ban349.jpeg','₹349'],
                 ['ban359.jpeg','₹359'],
                 ['3.jpeg','₹319'],
                ['bangle.jpeg','₹299'],
                 ['bang329.jpeg','₹329'],
                 ['1.jpeg','₹319'],
                 ['2.jpeg','₹319'],
                 
            ];
        }

        elseif($slug == 'finger-ring'){
            $products = [
                 ['119.jpeg','₹119'],
                 ['189.1.jpeg','₹189'],
                ['ring189.jpeg','₹259'],
                ['ring1.jpeg','₹159'],
                ['ring2.jpeg','₹159'],
                ['ring3.jpeg','₹159'],
                ['ring4.jpeg','₹159'],
                ['ring5.jpeg','₹159'],
                ['ring6.jpeg','₹159'],
                
            ];
        }
        elseif($slug == 'Anklet'){
            $products = [
                ['anklets.jpeg','₹400'],
                ['anklet400.png','₹400'],

            ];
        }

        elseif($slug == 'earrings'){
            $products = [

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
                        <p class="fw-bold mb-0 fs-5" style="color:#C9A227;">
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
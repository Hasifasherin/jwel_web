@extends('layouts.app')

@section('title', 'Contact Us - My Laravel Website')

@section('meta_description', 'Get in touch with us.')

@section('content')

<section class="contact-section py-5">
<div class="container">

    <div class="text-center mb-5">
        <h1 class="fw-light">Tell Us Your Message</h1>
        <p class="text-muted">
            We would love to hear from you. Fill out the form below.
        </p>
    </div>

    <div class="row g-5">

        <!-- ===== FORM SECTION ===== -->
        <div class="col-lg-7">
            <div class="contact-card p-4">

                {{-- ✅ Success Message --}}
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                {{-- ❌ Error Message --}}
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <input type="text" name="name"
                                   class="form-control form-control-lg"
                                   placeholder="Full Name"
                                   value="{{ old('name') }}"
                                   required>
                        </div>

                        <div class="col-md-6">
                            <input type="email" name="email"
                                   class="form-control form-control-lg"
                                   placeholder="Email Address"
                                   value="{{ old('email') }}"
                                   required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="text" name="phone"
                               class="form-control form-control-lg"
                               placeholder="Phone Number"
                               value="{{ old('phone') }}">
                    </div>

                    <div class="mb-3">
                        <textarea name="message" rows="6"
                                  class="form-control form-control-lg"
                                  placeholder="Write your message..."
                                  required>{{ old('message') }}</textarea>
                    </div>

                    <button type="submit"
                            class="btn btn-dark w-100 py-3 fw-semibold">
                        SEND MESSAGE
                    </button>

                </form>

            </div>
        </div>

        <!-- ===== MAP SECTION ===== -->
        <div class="col-lg-5">
            <div class="map-box">

                <iframe
                    src="https://maps.google.com/maps?q=karuvarakundu%20malappuram&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    width="100%"
                    height="420"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

            </div>
        </div>

    </div>

</div>
</section>

@endsection
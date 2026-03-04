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

        <!-- ===== FORM SECTION (LEFT) ===== -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm p-4 rounded-4">

                <form action="#" method="POST">
                    @csrf

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <input type="text" name="name"
                                   class="form-control form-control-lg rounded-3"
                                   placeholder="Name" required>
                        </div>

                        <div class="col-md-6">
                            <input type="email" name="email"
                                   class="form-control form-control-lg rounded-3"
                                   placeholder="Email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="text" name="phone"
                               class="form-control form-control-lg rounded-3"
                               placeholder="Phone number">
                    </div>

                    <div class="mb-3">
                        <textarea name="message" rows="6"
                                  class="form-control form-control-lg rounded-3"
                                  placeholder="Your Message"
                                  required></textarea>
                    </div>

                    <button type="submit"
                            class="btn btn-dark w-100 py-3 rounded-3 fw-semibold">
                        SEND MESSAGE
                    </button>

                </form>

            </div>
        </div>


        <!-- ===== CONTACT INFO (RIGHT) ===== -->
        <div class="col-lg-5">
            <div class="ps-lg-4">

                <div class="mb-4">
                    <h5 class="fw-semibold">Address</h5>
                    <p class="text-muted">
                        8016, Raj Textile Tower Block A,<br>
                        Surat, Gujarat, India
                    </p>
                </div>

                <div class="mb-4">
                    <h5 class="fw-semibold">Phone</h5>
                    <p class="text-muted">
                        +91 6354 914 240
                    </p>
                </div>

                <div class="mb-4">
                    <h5 class="fw-semibold">Email</h5>
                    <p class="text-muted">
                        info@yourjewellery.com
                    </p>
                </div>

            </div>
        </div>

    </div>

</div>
</section>

@endsection
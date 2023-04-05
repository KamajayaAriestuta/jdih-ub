@extends('user.layouts.base')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 justify-content-center mb-5">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-envelope-open fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Email Address</h4>
                    <p class="mb-2">htl.ub.ac.id</p>
                    <a class="btn btn-primary px-4" href="mailto:htl@ub.ac.id">Email Now <i
                            class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Office Address</h4>
                    <p class="mb-2">+62 821 3309 0908</p>
                    <a class="btn btn-primary px-4" href="https://goo.gl/maps/znSfv1uYz62zweV99"
                        target="blank">Direction <i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.50361238209!2d112.59460982238201!3d-7.960048957226629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f2d620975%3A0xf19b7459bbee5ed5!2sUniversitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1680600036461!5m2!1sid!2sid"
                    frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fw-medium text-uppercase text-primary mb-2">Contact Us</p>
                <h1 class="display-5 mb-4">If You Have Any Queries, Please Feel Free To Contact Us</h1>
                <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form
                    with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                    done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                <div class="row g-4">
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Call Us</h6>
                                <span>+012 345 67890</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Mail Us</h6>
                                <span>info@example.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 150px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      {{-- <style>
        section {
          background-color:dimgray; 
        }
      </style> --}}
      <div class="container" data-aos="fade-up">

        @include('_message')

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Uzbekistan Xarezm street Ashxabad</p>
              </div>

              <div class="container">
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>asadbek@gmail.com</p>
              </div>
            </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+998883611208</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form class="contactform" method="Post" action="{{url('contact/post')}}"> 

              @csrf

              <div class="row">
                 <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" 
                         id="name" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" 
                         name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" 
                       name="subject" id="subject" placeholder="Subject" required>
              </div>

              <div style="border-block-color: dark" class="form-group mt-3">
                <textarea class="form-control" name="message" 
                rows="10"  required>
              </textarea>
              </div>
              <br>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->
@endsection

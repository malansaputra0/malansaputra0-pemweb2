@extends('layouts/web.main')

@section('index')

<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <h3>Personal Information</h3>
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Address:</h4>
                <p>Jl. Bromo, Blok AG. 30, Komp. OPI, Jakabaring</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>malansaputra0@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 822 8269 8823</p>
              </div>
              
             <div class="instagram">
                <i class="bi bi-instagram"></i>
                <h4>Instagram:</h4>
                <p>@m.alansptr</p>
              </div>
              
              <div class="line">
                <i class="bi bi-line"></i>
                <h4>Line:</h4>
                <p>alansa.</p>
              </div>
              
              <div class="linkedin">
                <i class="bi bi-linkedin"></i>
                <h4>Linkedin:</h4>
                <p>M. Alan Saputra</p>
              </div>
              
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            @if ($errors -> any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="process" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <h3>Send Me an Email</h3>
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10"></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" value="Process">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  
</main>

@endsection
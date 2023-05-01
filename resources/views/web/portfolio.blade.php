@extends('layouts/web.main')

@section('index')

<main id="main">

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">
        <h3 class="resume-title">Summary</h3>
        <div class="resume-item pb-0">
          <h4>M. Alan Saputra</h4>
          <p><em>Aspiring and experience-seeking Web Developer .</em></p>
          <ul>
            <li>Palembang, Indonesia</li>
            <li>(62) 822 8269 8823</li>
            <li>malansaputra0@gmail.com</li>
          </ul>
        </div>

        <h3 class="resume-title">Education &amp Organization</h3>
        <div class="resume-item">
          <h4>Undergraduate of Information System</h4>
          <h5>2021 - Present</h5>
          <p><em>Sriwijaya University, Palembang, Indonesia</em></p>
          <p>Currently 4th semester undergradute student of Information System</p>
        </div>
        <div class="resume-item">
          <h4>Deputy Head of Research &amp Technology Department</h4>
          <h5>2022 - Present</h5>
          <p><em>HIMSI, Sriwijaya University</em></p>
          <p>Appointed as Deputy Head of R &amp T Department after one period of being a staff.</p>
        </div>
        <div class="resume-item">
          <h4>Staff of Information Technology Development Division</h4>
          <h5>2021 - 2022</h5>
          <p><em>Research &amp Technology Department, HIMSI, Sriwijaya University</em></p>
          <p>Successfully accepted as Staff member of ITD Division after a recruitment process</p>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Professional Experience</h3>
        <div class="resume-item">
          <h4>Sponsorship specialist</h4>
          <h5>2021 - 2022</h5>
          <p><em>SIFEST, HIMSI, Sriwijaya University</em></p>
          <ul>
            <li>Managed to bring in numerous sponsorship deals for organizational event's need.</li>
            <li>Negotiate with client on sponsorship deals.</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Web developer specialist</h4>
          <h5>2021 - Present</h5>
          <p><em>HIMSI, Sriwijaya University</em></p>
          <ul>
            <li>Participate in developing numerous organization-oriented web.</li>
            <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
            <li>Consult, discuss, and work together with a team while developing web.</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Data specialist</h4>
          <h5>2021-2022</h5>
          <p><em>Badan Pusat Statistik, South Sumatera, Indonesia</em></p>
          <li>Validate and examine more than 50 district of citizen data.</li>
          <li>Entry data more than thousands of family into database</li>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Resume Section -->

  
<section id="portfolio" class="portfolio section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Portfolio</h2>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-aos="fade-up">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/sifest.jpg" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="assets/img/portfolio/sifest.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="{{ route('portfolio') }}" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
    
    </div>

  </div>
</section><!-- End Portfolio Section -->

</main>

@endsection
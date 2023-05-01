@extends('layouts/web.main')

@section('index')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div class="hero-container" data-aos="fade-in">
    <h1>M. Alan Saputra</h1>
    <p>I'm a <span class="typed" data-typed-items="Developer, Programmer, Writer"></span></p>
  </div>
</section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>About</h2>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>UI/UX Designer &amp; Web Developer.</h3>
        <p class="fst-italic">
          Youngest child and only-son out of 4 siblings, with 3 older sisters with each has considerable year gaps in between.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>M. Alan Saputra</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>29th February 2004</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Palembang, Indonesia</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Undergraduate</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>malansaputra0@gmail.com</span></li>
            </ul>
          </div>
        </div>
        <p>
          Born in Palembang, February 29th 2004. Loves serenity and a matcha-addict. A logic-based man while also being an overthinker. Likes to think a lot and be prepared instead of being impulsive. 
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

  <!-- ======= Interests Section ======= -->
<section id="interests" class="interests section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Interests</h2>
      <p>Apart from being a web developer, I have numerous other hobbies that i constantly do in order to destress from job. Most of them could be mainly done indoors. I enjoy reading foreign webnovels in my spare time, and also playing games when I'm in the mood. I do self-proclaim myself as a gourmet, mainly from my love of eating good food, and constantly spending considerable amount of money to buy it. </p>
    </div>

    <div class="row no-gutters">

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Years</strong> as a computer enthusiast.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="count-box">
          <i class="bi bi-book"></i>
          <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Years</strong>+ of reading foreign language novels.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="count-box">
          <i class="bi bi-person-workspace"></i>
          <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Web Projects</strong> completed.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="count-box">
          <i class="bi bi-calendar-event"></i>
          <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Events</strong> completed as a part of committee.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Interests Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills">
  <div class="container">

    <div class="section-title">
      <h2>Skills</h2>
      <p>Semi-Fullstack Web Developer, while more heavily interested being a back-end web developer. Not too much of an expert as a front-end web developer because of heavily limited by artistic and aesthetic sense.</p>
    </div>

    <div class="row skills-content">

      <div class="col-lg-6" data-aos="fade-up">

        <div class="progress">
          <span class="skill">HTML <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">CSS <i class="val">70%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">JavaScript <i class="val">60%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

        <div class="progress">
          <span class="skill">PHP <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">MySQL <i class="val">90%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

        <div class="progress">
          <span class="skill">Laravel <i class="val">70%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>

      </div>

    </div>

  </div>
</section><!-- End Skills Section -->

</main>

@endsection
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <a href="{{ route('home') }}"><img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle"></a>
      <h1 class="text-light" id="navtext"><a href="{{ route('home') }}">M. Alan Saputra</a></h1>
      <div class="social-links mt-3 text-center">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/m.alansptr/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

    <nav id="navbar" class="nav-menu navbar">
      <ul>
        <li><a href="{{ route('home') }}" class="nav-link {{ $nav["active"] === "Home" ? "active" : "" }}"><i class="bx bx-home"></i> <span id="navtext">Home</span></a></li>
        <li><a href="{{ route('portfolio') }}" class="nav-link {{ $nav["active"] === "Portfolio" ? "active" : "" }}"><i class="bx bx-file-blank"></i> <span id="navtext">Portfolio</span></a></li>
        <li><a href="{{ route('contact') }}" class="nav-link {{ $nav["active"] === "Contact" ? "active" : "" }}"><i class="bx bx-user"></i> <span id="navtext">Contact</span></a></li>
      </ul>
    </nav>
  </div>
</header>
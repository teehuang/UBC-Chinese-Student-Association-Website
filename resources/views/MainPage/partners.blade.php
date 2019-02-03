<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

  <title>Partners</title>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ url('/') }}"><img id="logo" src="images/CSAlogo.png" alt="CSAlogo" style="width:117.8px;height:58.2px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item mobile-only">
          <a class="nav-link" href="{{ url('/') }}"><b>Home</b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About <b>Us</b>    <img id="arrow" src="images/arrow.png" alt="arrow" style="width:17px;height:17px;margin-left: 10px">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('/about') }}">About Us</a>
            <a class="dropdown-item" href="{{ url('/executives') }}">Executives</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Our <b>Events</b>    <img id="arrow" src="images/arrow.png" alt="arrow" style="width:17px;height:17px;margin-left: 10px">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('/') }}#carouselExampleIndicators">Upcoming Events</a>
            <a class="dropdown-item" href="{{ url('/pastevents') }}">Past Events</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/partners') }}">Our <b>Partners</b></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Get <b>Involved</b>     <img id="arrow" src="images/arrow.png" alt="arrow" style="width:17px;height:17px;margin-left: 10px">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('/member') }}">Become a Member</a>
            <a class="dropdown-item" href="{{ url('/hiring') }}">Hiring</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact <b>Us</b></a>
        </li>
      </ul>
    </div>
  </nav>
    <div id="mainBackground">
      <div class= "filter">
        <div class="container">
          <div class="heading">
             <h1>OUR <b>PARTNERS</b></h1>
             <hr>
          </div>
          <div class="main">
            <div class="content">
              <p>CSA enjoys a variety of partnerships: connecting with local and international businesses alike to mutually benefit one another in our endeavors.
                We hope to enlighten our members with exclusive offers with our premium partners, and to share the fruits of working with our partners to provide a valuable exchange.</p>
              <p>Our 2017 partners are soon to be announced.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

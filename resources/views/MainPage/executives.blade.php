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

  <title>Executives</title>
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
    <div id="threeBackground">
      <div class="filter">
        <div class="groupImgHeader">
          <div class="container" id="exec-container">
              <div class="heading">
                 <h1>OUR <b>EXECUTIVES</b></h1>
                 <hr>
              </div>
            <div class="main-PastEvents">
                <div class="groups">
                  <div class="pageHeading">
                    <h2>PRESIDENTIAL <b>PORTFOLIO</b></h2>
                  </div>
                  <div class="row pageRow">
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>STEVEN SHI</b></br>
                            PRESIDENT
                         </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pageRow">
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>EDWARD XING</b><br>
                            VICE PRESIDENT <br>
                            EVENTS
                         </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>SERAPH YU</b><br>
                            VICE PRESIDENT <br>
                            PUBLIC RELATIONS
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>ERIC CUI</b><br>
                            VICE PRESIDENT <br>
                            HUMAN RESOURCES
                         </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pageRow">
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>ALICE ZONG</b><br>
                            VICE PRESIDENT <br>
                            HUMAN RESOURCES
                         </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>ANQI SUO</b><br>
                            VICE PRESIDENT <br>
                            MARKETING
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>JONATHAN OK</b><br>
                            VICE PRESIDENT <br>
                            FINANCE
                         </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="groups">
                  <div class="pageHeading">
                    <h2>BOARD OF <b>DIRECTORS</b></h2>
                  </div>
                  <div class="row pageRow">
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>SABRINA OUYANG</b><br>
                            DIRECTOR <br>
                            EVENTS
                         </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>MIFFY WANG</b><br>
                            ASSISTANT DIRECTOR <br>
                            EVENTS
                         </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pageRow">
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>JOSHUA KOENTJORO</b><br>
                            DIRECTOR <br>
                            SPORTS
                         </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>JEFFERY CHANG</b><br>
                            ASSISTANT DIRECTOR <br>
                            SPORTS
                         </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pageRow">
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>ANGELA TAM</b><br>
                            DIRECTOR <br>
                            SOCIAL
                         </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>WALTER YEUNG</b><br>
                            ASSISTANT DIRECTOR <br>
                            SOCIAL
                         </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pageRow">
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>ALEX DUNATOV</b><br>
                            SPECIALIST <br>
                            PUBLIC RELATIONS
                         </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pageRow">
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>LEO PENG</b><br>
                            DIRECTOR <br>
                            HUMAN RESOURCES
                         </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>ANDREA LEE</b><br>
                            ASSISTANT DIRECTOR <br>
                            HUMAN RESOURCES
                         </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pageRow">
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>FEI FEI YUAN</b><br>
                            DIRECTOR <br>
                            MARKETING
                         </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 box">
                      <div class="row">
                        <div class="col-lg-5 imgBox">
                        </div>
                        <div class="col-lg-5 textBox">
                          <span class="names">
                            <b>ADAM HUANG</b><br>
                            ASSISTANT DIRECTOR <br>
                            MARKETING
                         </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="newlogo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>FOOD BRIDGE</title>
</head>

<body>

  <nav class="nav">
    <div class="img">
      <img src="assets/newlogo.jpg" height="90px">FOODBRIDGE

    </div>
    <ul class="nav_list">
      <!-- <li class="pgtitle">FOODBRIDGE</li> -->
      <li class="nav_item"><a href="home.html" id="nav_link"><b>Home</b></a></li>
      <li class="nav_item"><a href="AboutUssuru.html" id="nav_link"><b>About Us</b></a></li>
      <li class="nav_item"><a href="#" id="nav_link"><b>Volunteer</b></a></li>
      <li class="nav_item"><a href="#" id="nav_link"><b>Contact Us</b></a></li>
      <li class="nav_item"><a href="FAQ.html" id="nav_link"><b>FAQs</b></a></li>
      <button class="loginbutton" onclick="showAlert()">LOGIN</button>

      
    </ul>


  </nav>
  <header>
    <div class="header_container">
      <div class="options">
        <a href="" class="options_opt"><i>Meals Served</i></a>
        <a href="" class="options_opt"><i>Centres</i></a>
        <a href="" class="options_opt"><i>Schools</i></a>
        <a href="" class="options_opt"><i>Government Hospitals</i></a>
        <a href="" class="options_opt"><i>Anuual Report</i></a>

      </div>
      <img class="m_img" src="m_img.jpg">
    </div>
  </header>
  <!-- ********************************************************************************************************************************************************** -->
  <section class="section">
    <div class="container">
      <h2>VISION AND MISSION OF OUR PARTNERING CHARITIES</h2>
      <p id="demo"></p>
    </div>
    <!--
             <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="/img2.png" alt="" class="slide_1">
                  </div>
                  <div class="swiper-slide">
                    <img src="/img3.jpeg" alt="" class="slide_2">
                 </div>
                  <div class="swiper-slide">
                    <img src="/img4.jpeg" alt="" class="slide_3">
                  </div>
                 
          
            </div>

            <section> -->
    <div class="slideshow-container">

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="foodserving.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="foodpacking.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="vlounteer.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </section>
  </section>

<!-- ************************************************************************************************************************************* -->
  <section>
    <div class="container2">
      <div class="row">
        <div class="col-md-12">
          <h3 class="headingText">How Can You Help?</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="padding-bottom: 25px;">
          <div class="box">
            <h3 class="joinUsText"><img src="icon1.png" style="width: 35px;"
                alt="volunteers at robin hood army">&nbsp;&nbsp;Volunteer Time</h3>
            <p class="joinUsParagraph">All we need is 3 hours/week at least twice a month to make a real impact. If we
              have a team in your city looking to grow, FOODBRIDGE will reach out to you.</p>

            <h3 class="joinUsText"><img src="icon2.png" style="width: 35px;"
                alt="contribute food">&nbsp;&nbsp;Contribute Food</h3>
            <p class="joinUsParagraph">If you manage a restaurant or generally want to contribute regular meals from
              your family or workplace, let’s connect.</p>



              <button class="joinButton" style="width: 254px !important;"><a href="./timepass/login.php">Join our family</a></button>
            
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>

<!-- ************************************************************************************************************************************8 -->

  <section class="section event" id="event">
    <div class="container3">

      <p class="section-subtitle">
        <img src="icon3.png" width="32" height="7" alt=".">

        <span>Event & Program</span>

        <img src="icon3.png" width="32" height="7" alt=".">
      </p>

      <h2 class="h2 section-title">
        <strong>FOOD DRIVES</strong>                  Conducted by Charities
      </h2>

      <ul class="event-list">

        <li>
          <div class="event-card">

            <time class="card-time" datetime="01-05">
              <span class="month">Jan</span>

              <span class="date">05</span>
            </time>

            <div class="wrapper">

              <div class="card-content">
                <p class="card-subtitle">MEALS on WHEELS</p>

                <h3 class="card-title">In and around areas of Central Mumbai (2024)</h3>

                <p class="card-text">
                  A program that delivers meals to individuals at home who are unable to purchase or prepare their own meals. It primarily serves elderly individuals.
                </p>
              </div>

              <button class="btn btn-white">
                <span>View Events</span>

              </button>

            </div>

          </div>
        </li>

        <li>
          <div class="event-card">

            <time class="card-time" datetime="02-23">
              <span class="month">Feb</span>

              <span class="date">23</span>
            </time>

            <div class="wrapper">

              <div class="card-content">
                <p class="card-subtitle">FOOD BANKS</p>

                <h3 class="card-title">Near Lonavla and outskirts of Navi Mumbai (2024)</h3>

                <p class="card-text">
                  This organization operates food banks in various regions, redistributing surplus food to those in need through a network of community agencies.
                </p>
              </div>

              <button class="btn btn-white">
                <span>View Events</span>

              </button>

            </div>

          </div>
        </li>

        <li>
          <div class="event-card">

            <time class="card-time" datetime="03-27">
              <span class="month">Mar</span>

              <span class="date">27</span>
            </time>

            <div class="wrapper">

              <div class="card-content">
                <p class="card-subtitle">THE HUNGER PROJECT</p>

                <h3 class="card-title">Western and Central Mumbai regions (2024)</h3>

                <p class="card-text">
                  An organization committed to end world hunger.It works to empower people in hunger to become the agents of their own development through sustainable methods.
                </p>
              </div>

              <button class="btn btn-white">
                <span>View Events</span>

         
              </button>

            </div>

          </div>
        </li>

      </ul>

      <button class="btn btn-secondary">
        <span><a href="about.html">Learn More </a></span>

      </button>

    </div>
  </section>






  <!-- ******************************************************************************************************************************** -->
  <footer>
    <div>
      <p>Copyright &copy; foodbridge.com(Linking hunger to hope)</p>
    </div>

  </footer>
  <script>
    function showAlert() {
      window.location.href = './timepass/login.php';
    }
    function showLogOutAlert() {
      window.location.href = './timepass/logout.php'
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>























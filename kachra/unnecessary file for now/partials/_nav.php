<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <link rel="stylesheet" href="nav.css">
      <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Roboto:wght@300;400;500;700&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
</head>
<body>
    <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="#" class="logo">Food Bridge</a>
      </h1>


      <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">Wildvine</a>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>
              <span>Home</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>
              <span>About</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#service" class="navbar-link" data-nav-link>
              <span>Service</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#donate" class="navbar-link" data-nav-link>
              <span>Donate</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#event" class="navbar-link" data-nav-link>
              <span>Event</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-link" data-nav-link>
              <span>Contact</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <div class="header-action">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <button class="btn btn-primary">
          <span>Login</span>

          <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

    </div>
  </header>

  <script src="nav.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
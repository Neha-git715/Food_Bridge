<?php
session_start();
if ($_SESSION['loggedIn']) {
    if ($_SESSION['isAdmin']) {
        // // Load welcome_admin.php for admin users
        // header('location: welcome_admin.php');
        $href = "available_volunteer.php";
        $nav_item = "View Volunteers";
    } else {
        $href = "VolunteerForm.php";
        $nav_item = "Volunteer";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
    <nav class="nav">
        <div class="img">
            <img src="assets/newlogo.jpg" height="90px">FOODBRIDGE

        </div>
        <ul class="nav_list">
            <!-- <li class="pgtitle">FOODBRIDGE</li> -->
            <li class="nav_item"><a href="homeLoggedIn.php" id="nav_link"><b>Home</b></a></li>
            <li class="nav_item"><a href="AboutUssuru.php" id="nav_link"><b>About Us</b></a></li>
            <li class="nav_item"><a href="<?php echo $href ?>" id="nav_link"><b><?php echo $nav_item ?></b></a></li>
            <!-- <li class="nav_item"><a href="#" id="nav_link"><b>Contact Us</b></a></li> -->
            <li class="nav_item"><a href="FAQ.php" id="nav_link"><b>FAQs</b></a></li>
            <button class="loginbutton" onclick="showLogOutAlert()">LOGOUT</button>
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
            <img class="m_img" src="assets/m_img.jpg">
            <div class="achievements_cards">
                <article class="achievement_card">
                    <span class="achievement_icon">
                        <i class="uil uil-video"></i>
                    </span>
                    <h3 class="count" data-count="45+">0+</h3>
                    <p>Charities helped</p>
                </article>

                <article class="achievement_card">
                    <span class="achievement_icon">
                        <i class="uil uil-users-alt"></i>
                    </span>
                    <h3 class="count" data-count="790">0+</h3>
                    <p>Volunteers</p>
                </article>

                <article class="achievement_card">
                    <span class="achievement_icon">
                        <i class="uil uil-trophy"></i>
                    </span>
                    <h3 class="count" data-count="260">0+</h3>
                    <p>meals distributed</p>
                </article>
            </div>
        </div>
    </header>
    <script>
        const countElements = document.querySelectorAll('.count');


        let countUpInterval;
        let startTime;

        const countUpObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const count = parseInt(target.getAttribute('data-count'), 10);
                    let currentCount = 0;

                    const increment = getCountIncrement(count);
                    const duration = 1500; // 4 seconds
                    startTime = performance.now();

                    countUpInterval = setInterval(() => {
                        const elapsedTime = performance.now() - startTime;
                        const progress = Math.min(elapsedTime / duration, 1);
                        const incrementCount = Math.floor(progress * (count / increment)) * increment;

                        target.textContent = incrementCount + '+';

                        if (incrementCount >= count) {
                            target.textContent = count + '+';
                            clearInterval(countUpInterval);
                        }
                    }, 10);

                    observer.unobserve(target);
                }
            });
        });

        countElements.forEach((element) => {
            countUpObserver.observe(element);
        });

        function getCountIncrement(count) {
            if (count === 790) {
                return 100;
            } else if (count === 45) {
                return 10;
            } else if (count === 260) {
                return 1;
            } else {
                return 1;
            }
        }

        function showLogOutAlert() {
            window.location.href = 'logout.php';
        }
    </script>
</body>

</html>
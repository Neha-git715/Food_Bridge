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
    <title>FAQs</title>
    <link rel="stylesheet" href="faqcss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="nav">
        <div class="img">
            <img src="assets/newlogo.jpg" height="90px">FOODBRIDGE
        </div>
        <ul class="nav_list">
            <!-- <li class="pgtitle">FOODBRIDGE</li> -->
            <li class="nav_item"><a href="./homeLoggedIn.php" id="nav_link"><b>Home</b></a></li>
            <li class="nav_item"><a href="./AboutUssuru.php" id="nav_link"><b>About Us</b></a></li>
            <li class="nav_item"><a href="<?php echo $href; ?>" id="nav_link"><b><?php echo $nav_item; ?></b></a></li>
            <!-- <li class="nav_item"><a href="#" id="nav_link"><b>Contact Us</b></a></li> -->
            <li class="nav_item"><a href="./FAQ.php" id="nav_link"><b>FAQs</b></a></li>
            <button class="loginbutton" onclick="showLogOutAlert()">LOGOUT</button>
        </ul>
    </nav>
    <section class="section">
        <div class="bigboi">
            <h1>Frequently Answered
                Questions</h1>
            <p>Dishing Out Answers: Common Questions About Our Organisation Addressed</p>
        </div>

        <div class="QAs">
            <hr>
            <ul style="list-style-type: square;">
                <li><button class="question"><b>What types of food do you distribute?</b></button>
                    <div class="answer">
                        <p>We distribute a variety of non-perishable food items, including grains, canned goods, and
                            other essential staples.</p>
                    </div>
                </li>
                <hr>
                <li><button class="question"><b>Where are the nearest distribution centers?</b></button>
                    <div class="answer">
                        <p>Our distribution centers are strategically located in communities where there is a need. For
                            specific locations, please check our website or contact our helpline.</p>
                    </div>
                </li>
                <hr>
                <li><button class="question"><b>How is your charity funded?</b></button>
                    <div class="answer">
                        <p>Our charity is funded through a combination of individual donations, grants, and partnerships
                            with
                            businesses and organizations that support our mission.</p>
                    </div>
                </li>
                <hr>
                <li><button class="question"><b>Can I donate food to your charity?</b></button>
                    <div class="answer">
                        <p>Yes, we welcome food donations. Please refer to our website or contact our office to learn
                            more
                            about
                            the
                            types of items we accept and the donation process.</p>
                    </div>
                </li>
                <hr>
                <li><button class="question"><b>How can I stay updated on your charity's activities?</b></button>
                    <div class="answer">
                        <p>Stay updated on our charity's activities by following our social media pages, subscribing to
                            our
                            newsletter on our website, or contacting our helpline for the latest information.</p>
                    </div>
                </li>
                <hr>
                <li><button class="question"><b>Can I request specific food items due to dietary
                            restrictions?</b></button>
                    <div class="answer">
                        <p>While we aim to provide a variety of essential items, we may not always accommodate specific
                            dietary
                            restrictions. However, please inform our staff about any special needs, and we will do our
                            best
                            to
                            assist you within our limitations.</p>
                    </div>
                </li>
                <hr>
                <li><button class="question"><b>How can businesses or organizations partner with your
                            charity?</b></button>
                    <div class="answer">
                        <p>Businesses or organizations interested in partnering with our charity can reach out through
                            our
                            website,
                            where they will find information on sponsorship opportunities, collaborative events, and
                            other
                            ways
                            to
                            support our cause.</p>
                    </div>
                </li>
            </ul>
            <hr>
        </div>
    </section>
    <footer>
        <div class="footer">
            <p>Copyright &copy; foodbridge.com (Linking hunger to hope yuhh)</p>
        </div>
    </footer>
    <script type="text/javascript" src="faqjs.js">
        // var q = document.getElementsByClassName("question");
        // var i;
        // for (i = 0; i < q.length; i++) {
        //     q[i].addEventListener("click", function() {
        //         this.classList.toggle("active");
        //         var answer = this.nextElementSibling;
        //         if (answer.style.maxHeight) {
        //             answer.style.maxHeight = null;
        //         } else {
        //             answer.style.maxHeight = answer.scrollHeight + "px";
        //         }
        //     });
        // }


        // function showLogOutAlert() {
        //     window.location.href = './timepass/logout.php'
        // }
    </script>
</body>

</html>
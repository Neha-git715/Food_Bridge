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
    <title>About Us</title>
    <link rel="stylesheet" href="AboutUscsssuru.css">
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
    <section class="content">
        <div class="collage"><img src="./assets/collagesuru.png" alt="" style="max-width: 100%;"></div>
        <div class="div2">
            <h2 style="font-size: 45px;">Welcome to Food Bridge - Linking hunger to hope</h2>
            <p style="font-size: large;">At Food Bridge, we are passionate about bringing together volunteers who are
                eager to make a tangible
                impact in their communities. Inspired by the spirit of solidarity and service, we strive to combat
                hunger and food wastage through grassroots efforts and collective action.</p>
            <div class="tab">
                <div class="tab-options">
                    <button class="active" onclick="setActiveTab(this, 'mission')">Our Mission</button>
                    <button onclick="setActiveTab(this, 'identity')">Who We Are</button>
                    <button onclick="setActiveTab(this, 'impact')">Our Impact</button>
                </div>
                <div class="tab-content">
                    <div class="mission-content active">
                        <p>Our mission is rooted in the belief that every individual has the power to create positive
                            change. We are dedicated to mobilizing volunteers to conduct food drives, redistribute
                            surplus
                            food, and provide meals to those in need, fostering a culture of empathy, generosity, and
                            social
                            responsibility along the way. Food insecurity affects millions of people worldwide, with
                            far-reaching consequences for health, education, and economic stability. By addressing the
                            root causes of hunger and food wastage, we aim to build a future where no one goes to bed
                            hungry.</p>
                    </div>
                    <div class="identity-content">
                        <p>Food Bridge was born out of a shared commitment to address the twin challenges of hunger and
                            food
                            wastage. Just like the legendary Robin Hood, we believe in taking from the surplus and
                            giving to
                            the hungry, harnessing the collective strength of volunteers to create a more equitable and
                            compassionate world. We recognize that food insecurity is not just a logistical challenge
                            but a symptom of deeper societal issues such as poverty, inequality, and lack of access to
                            resources. Through our programs and partnerships, we strive to address these underlying
                            issues and create sustainable solutions for long-term change.</p>
                    </div>
                    <div class="impact-content">
                        <p>Since our inception, Food Bridge has mobilized thousands of volunteers and rescued
                            millions of
                            meals across Maharashtra. But our impact extends beyond the number of meals served; it's
                            about
                            the connections we forge, the lives we touch, and the communities we strengthen. Together,
                            we
                            are building a more inclusive and compassionate society, one meal at a time. We measure our
                            success not only in terms of metrics and numbers but also in the stories of individuals
                            whose lives have been transformed by a simple act of kindness. From providing nutritious
                            meals to school children to supporting local farmers, every initiative we undertake is
                            guided by our commitment to creating a better world for all.</p>
                    </div>
                </div>
            </div>
            <div class="volunteer">
                <div class="volunteer-btn">
                    <button onclick = "window.location.href = 'VolunteerForm.php'">Volunteer</button>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <p>Copyright &copy; foodbridge.com (Linking hunger to hope yuhh)</p>
        </div>
    </footer>
    <script>
        function setActiveTab(button, content) {
            // Remove 'active' class from all buttons
            const buttons = document.querySelectorAll('.tab-options button');
            buttons.forEach(btn => btn.classList.remove('active'));

            // Add 'active' class to the clicked button
            button.classList.add('active');

            // Hide all tab content
            const tabContents = document.querySelectorAll('.tab-content > div');
            tabContents.forEach(content => content.classList.remove('active'));

            // Display the corresponding tab content
            const activeContent = document.querySelector(`.${content}-content`);
            activeContent.classList.add('active');
        }

        function showLogOutAlert() {
            window.location.href = './timepass/logout.php'
        }
    </script>
</body>

</html>
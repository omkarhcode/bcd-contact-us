<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Responsive Nav bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/section.css">
</head>

<body id="body">

    <header class="header">
        <a href="#" class="logo">LOGO</a>

        <input type="checkbox" id="check">
        <label for="check" class="menu-icons">
            <img src="assets/menu.svg" alt="" id="hamburger">
            <img src="assets/close.png" alt="" id="close">
        </label>

        <nav class="navbar">
            <a href="#">PROJECTS</a>
            <a class="" href="#">ABOUT</a>
            <a class="" href="#">NRI AREA</a>
            <a class="" href="#">NEWS & THOUGHTS</a>
            <a class="" href="#">CONTACT</a>
        </nav>
    </header>



    <section class="section">
        <div class="contact-us-container">
            <h2>Contact Us</h2>
            <p>When we aren’t changing landscapes, we’re making headlines.</p>
            <h3>Send us an Enquiry</h3>
            <form id="contact-form">
                <!-- <label for="name">Name:</label> -->
                <input type="text" id="name" name="name" placeholder="Name" required>


                <input type="email" id="email" name="email" placeholder="Email Address" required>


                <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required>


                <select id="project" name="project" required>
                    <option value="" selected disabled>Select Project</option>
                    <option value="project1">Project 1</option>
                    <option value="project2">Project 2</option>
                </select>
                <button type="submit">Send</button>
            </form>
        </div>
        <div class="vl"></div>
        <div class="map-container">
            <img src="assets/map.png" alt="" class="map">
            <div class="text-container">
                <h4>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</h4>
                <p class="links">
                    <a href="tel:+91 000 0000 000" target="_blank">+91 000 0000 000 </a> |
                    <a href="mailto:test1@gmail.com" target="_blank">test1@gmail.com</a> |
                    <a href="mailto:test2@gmail.com" target="_blank">test2@gmail.com</a>
                </p>

                <h3>Sales Enquiry</h3>
                <p class="links">
                    <a href="tel:+91 000 0000 000" target="_blank">+91 000 0000 000 </a>
                    <br>
                    <a href="mailto:test1@gmail.com" target="_blank">test1@gmail.com</a>
                </p>


                <h3>Redevelopment Centre</h3>
                <p class="links">
                    <a href="tel:+91 000 0000 000" target="_blank">+91 000 0000 000 </a>
                    <br>
                    <a href="mailto:test2@gmail.com" target="_blank">test2@gmail.com</a>
                </p>
            </div>


    </section>







</body>

</html>
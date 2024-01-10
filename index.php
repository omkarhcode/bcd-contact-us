<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Responsive Nav bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/header.css">

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
        <!-- add line -->
        <!-- <div class="line"></div> -->
    </header>



    <section class="section">
        <div class="contact-us-container">
            <h2>Contact Us</h2>
            <p>When we aren’t changing landscapes, we’re making headlines.</p>
            <h3>Send us an Enquiry</h3>

            <form id="contact-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <label for="mobile">Mobile:</label>
                <input type="tel" id="mobile" name="mobile" placeholder="Your Mobile" required>

                <label for="project">Project:</label>
                <select id="project" name="project" required>
                    <option value="" selected disabled>Select Project</option>
                    <option value="project1">Project 1</option>
                    <option value="project2">Project 2</option>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="map-container">
            <img src="assets/map.png" alt="" class="map">
            <h1>Map details</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
        </div>
    </section>







</body>

</html>
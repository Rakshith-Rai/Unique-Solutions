<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Header navigation -->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo"><img height="50px"  src="Assets/logo.png" alt=""></a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About us</a>
            <a href="#service-page">Services</a>
            <!-- <a href="">Buy</a> -->
            <a href="#contact">Contact Us</a>
        </nav>

        <div class="icons">
            <!-- <a href="#" class="fa-solid fa-cart-shopping"></a> -->
            <a href="customer/login.php" class="fa-solid fa-user"></a>
        </div>

    </header>
<!--Header naavigation ends here  -->

<!-- home section -->
    <section class="home" id="home">
        <div class="content">
            <h3>UNIQUE SOLUTIONS</h3>
            <span> Connect, Secure, Automate: Your Trusted Partner in Technology.</span>
            <p>Stay connected and secure with our networking solutions.   From setup & configuration to ongoing maintenance & support, we've got you covered. </p>
            <a href="customer/login.php" class="btn">About Us</a>
        </div>
    </section>
<!-- home section ends -->

<!-- About Section  -->
    <section class="about" id="about">
        <h1 class="heading"><span> about </span> us</h1>

        <div class="row">
            <div class="img-container">
                <img src="Assets/Images/about-im.jpg" alt="about">
                <h3>Best Technology partners</h3>
            </div>
            <div class="content">
                <h3>why choose us?</h3>
                <p>In today's fast-paced digital landscape, staying ahead of the curve is essential.
                    At Unique Solutions, we understand the challenges businesses face and are here to provide the solutions you need to succeed.
                    Whether you're looking to enhance your network infrastructure, safeguard your assets with state-of-the-art security systems, 
                    or streamline your operations with cloud computing, we have the expertise and experience to make it happen.
                    Partner with us and unlock the full potential of your business
                </p>
                <a href="customer/login.php" class="btn">know more</a>
            </div>

        </div>


    </section>
<!-- About Section ends -->

<!-- service section starts -->

    <section class="products" id="products">
        <h1 class="heading"> Our <span>Services</span></h1>
        <div class=""></div>
    </section>





    <section>
        <div class="service-container" id="service-page">
            <div class="service">
                <h3>CCTV surveillance Systems</h3>
                <img src="Assets/Images/cctv-min.jpg" alt="Service 1">
                <div class="service-info">
                    <p>Stay connected and secure with our networking solutions. From setup and configuration to ongoing maintenance and support, we've got you covered.</p>
                    
                    <a href="customer/book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Solar Systems</h3>
                <img src="Assets\Images\solar-min.jpg" alt="Service 2">
                <div class="service-info">
                    <p>Protect your assets and ensure the safety of your premises with our state-of-the-art security systems. From CCTV surveillance to biometric access control, we offer comprehensive security solutions.</p>
                   
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Online Ups/Home Ups</h3>
                <img src="Assets/Images/homeups.jpg" alt="Service 3">
                <div class="service-info">
                    <p>Ensure the safety and accessibility of your data with our data storage solutions. From onsite storage solutions to cloud-based backups, we provide reliable data storage options.</p>
                    
                </div><a href="book.php"><button class="book-button">Book Now</button></a>
            </div>
            <div class="service">
                <h3>Video Door Entry Systems</h3>
                <img src="Assets/Images/doorentry.jpg" alt="Service 4">
                <div class="service-info">
                    <p>Keep your hardware infrastructure up to date with our hardware upgrade services. Whether you need to replace outdated equipment or enhance performance with the latest technology, we offer cost-effective upgrade solutions.</p>
                    <?php include 'check_login.php'; ?>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Biometric Attendence</h3>
                <img src="Assets/Images/biometrics-min.jpg" alt="Service 4">
                <div class="service-info">
                    <p>Keep your hardware infrastructure up to date with our hardware upgrade services. Whether you need to replace outdated equipment or enhance performance with the latest technology, we offer cost-effective upgrade solutions.</p>
                    <?php include 'check_login.php'; ?>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Gate/ Home Automation Systems</h3>
                <img src="Assets/Images/gate.jpg" alt="Service 4">
                <div class="service-info">
                    <p>Keep your hardware infrastructure up to date with our hardware upgrade services. Whether you need to replace outdated equipment or enhance performance with the latest technology, we offer cost-effective upgrade solutions.</p>
                    <?php include 'check_login.php'; ?>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>EPABX & Intercom Systems</h3>
                <img src="Assets/Images/intercom-min.jpg" alt="Service 4">
                <div class="service-info">
                    <p>Keep your hardware infrastructure up to date with our hardware upgrade services. Whether you need to replace outdated equipment or enhance performance with the latest technology, we offer cost-effective upgrade solutions.</p>
                    <?php include 'check_login.php'; ?>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Printers & Laptops</h3>
                <img src="Assets/Images/printer.jpg" alt="Service 4">
                <div class="service-info">
                    <p>Keep your hardware infrastructure up to date with our hardware upgrade services. Whether you need to replace outdated equipment or enhance performance with the latest technology, we offer cost-effective upgrade solutions.</p>
                    <?php include 'check_login.php'; ?>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Electronic Auto Control panels</h3>
                <img src="Assets/Images/about-img.jpg" alt="Service 4">
                <div class="service-info">
                    <p>Keep your hardware infrastructure up to date with our hardware upgrade services. Whether you need to replace outdated equipment or enhance performance with the latest technology, we offer cost-effective upgrade solutions.</p>
                    <?php include 'check_login.php'; ?>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Inverter & Battery</h3>
                <img src="Assets\Images\inverter.jpg" alt="Service 4">
                <div class="service-info">
                    <p>Keep your hardware infrastructure up to date with our hardware upgrade services. Whether you need to replace outdated equipment or enhance performance with the latest technology, we offer cost-effective upgrade solutions.</p>
                    <?php include 'check_login.php'; ?>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Access control systems</h3>
                <img src="Assets/Images/lu.jpg" alt="Service 4">
                <div class="service-info">
                    <p>Keep your hardware infrastructure up to date with our hardware upgrade services. Whether you need to replace outdated equipment or enhance performance with the latest technology, we offer cost-effective upgrade solutions.</p>
                    <?php include 'check_login.php'; ?>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Hardware Upgrades</h3>
                <img src="Assets/Images/iu.jpg" alt="Service 4">
                <div class="service-info">
                    
                    <p>Keep your hardware infrastructure up to date with our hardware upgrade services. Whether you need to replace outdated equipment or enhance performance with the latest technology, we offer cost-effective upgrade solutions.</p>
                    <?php include 'check_login.php'; ?>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
        </div>
</section>

<!-- service section ends -->

<section class="products" id="products">
    <h1 class="heading"> Our <span>Clients</span></h1>
    <div class=""></div>
</section>

  <section class="icons-container">

        <div class="icons">
            <img src="Assets/Images/client/ea012f8a3be5dc43162d8c36c090e1df.w400.h400.png" alt="">
            <div class="info">
                <h3>Campco ltd</h3>
                <span>choclate manufacturers</span>
            </div>
        </div>

        <div class="icons">
            <img src="Assets/Images/client/aloysius.webp" alt="">
            <div class="info">
                <h3>St aloysius</h3>
                <span>Educational Institute</span>
            </div>
        </div>

        <div class="icons">
            <img src="Assets/Images/client/MRPL_official_Logo.svg.png" alt="">
            <div class="info">
                <h3>Mrpl</h3>
                <span>oil </span>
            </div>
        </div>

        <div class="icons">
            <img src="Assets/Images/client/sharada.png" width="100px" alt="">
            <div class="info">
                <h3>Sharada College</h3>
                <span>Educational Institute</span>
            </div>
        </div>
        <div class="icons">
            <img src="Assets\Images\client\isprl.png" alt="">
            <div class="info">
                <h3>ISPRL</h3>
                <span>Petroleum ltd</span>
            </div>

        </div>

        <div class="icons">
            <img src="Assets\Images\client\kmc.jpg" alt="">
            <div class="info">
                <h3>KMC Mangalore</h3>
                <span>Hospital </span>
            </div>
        </div>
        <div class="icons">
            <img src="Assets\Images\client\tandoor.png" alt="">
            <div class="info">
                <h3>Tandoor Express</h3>
                <span>Restaurant</span>
            </div>
        </div>
        <div class="icons">
            <img src="Assets\Images\client\palki.png" alt="">
            <div class="info">
                <h3>Pallkhi</h3>
                <span>Restaurant</span>
            </div>
        </div>
    </section>



   
  
    
    <section class="products" id="products">
    <h1 class="heading"> Our <span>Partners</span></h1>
    <div class=""></div>
</section>


    <section class="partner-container">
    <div class="partner">
                <img src="Assets\Images\partner\Matrix.jpg" width="150px" height="100px" alt="Partner 1">
        
            </div>
            <div class="partner">
                <img src="Assets\Images\partner\avast.webp" width="300px" height="150px" alt="Partner 1">
        
            </div>
            <div class="partner">
                <img src="Assets\Images\partner\avg.png" width="150px" height="100px" alt="Partner 2">
               
            </div>
            <div class="partner">
                <img src="Assets\Images\partner\dell.jpg" width="150px" height="100px" alt="Partner 3">
              
            <div class="partner">
                <img src="Assets\Images\partner\intel.png" width="150px" height="100px" alt="Partner 4">
              
            </div>
            
            <div class="partner">
                <img src="Assets\Images\partner\lenovo.png" width="150px" height="150px" alt="Partner 1">
              
            </div>
            <div class="partner">
                <img src="Assets\Images\partner\mcafree.png" width="150px" height="150px" alt="Partner 1">
            </div>
            <div class="partner">
                <img src="Assets\Images\partner\sandisk.png" width="150px" height="150px" alt="Partner 1">
            </div>
            <div class="partner">
                <img src="Assets/Images/partner/kaspersky.png" width="150px" height="80px" alt="Partner 1">
                
            </div>
             
    </section>

 

    
<section class="contact-section" id="contact">
    <div class="contact-form">
        <form action="contactbk.php" method="post">
            <h2 class="contact-heading">Contact <span>Us</span></h2>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Send Message</button>
            </div>
        </form>
        
    </div>
    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.723357080144!2d74.83434627500318!3d12.861136217290664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a5187ca0dbb%3A0xe0e7acc79e406cfa!2sUnique%20Solutions!5e0!3m2!1sen!2sin!4v1714391037883!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


</section>

<footer class="footer">
    <div class="footer-content">
        <p>&copy; 2024 Unique Solutions. All Rights Reserved.</p>
        <div class="social-links">
            <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</footer>   


        
    




</body>
</html>
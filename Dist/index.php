<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/logo.png">
    <title>BigBuz.LK</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Header with Navigation -->
    <header>
    <div class="container">
        <div class="nav-left">
            <img src="../images/logo.png" alt="Logo" class="logo">
            <span class="company-name">BigBuz.LK</span>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#home">Bus Ticket</a></li>
                <li><a href="#train">Train Ticket</a></li>
                <li><a href="#offers">Offers</a></li>
                <li><a href="login.php" class="login-button">Login</a></li>
            </ul>
        </nav>
    </div>
    </header>



    <!-- Home Section with Booking -->
    <section id="home" class="section home-section">
        <div class="home-content">
            <h1>Welcome to Bus Booking</h1>
            <p>Book your bus tickets quickly and conveniently.</p>
            <form action="results.php" method="POST" class="search-bar">
                <select name="from" class="search-input" required>
                    <option value="" disabled selected>From</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Galle">Galle</option>
                </select>
                <select name="to" class="search-input" required>
                    <option value="" disabled selected>To</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Galle">Galle</option>
                </select>
                <input type="date" name="date" class="search-input" required>
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>
    </section>

    <!-- Placeholder Sections -->
    <section id="train" class="section">
        <div class="content2">
            <h1>Unbelievable Offers From BIGBUS</h1>
        </div>

        
        <div class="text-div">
        <p> We are thrilled to announce that <span>BigBuz</span> has collaborated with the <span>Sri Lankan Railways</span> to bring you an enhanced and
             reliable travel experience!  
            Through this partnership, we aim to combine our expertise in modern transportation with the trusted services of Sri Lankan Railways, ensuring seamless connectivity and convenience for all travelers.  
            Stay tuned—exciting updates are on the way as we prepare to launch this service soon!  

Together, let’s make travel better, faster, and more enjoyable!  </p>
        </div>
        
        
      <div class="content">
        <div class="offer">
        <img src="../images/logo.png" alt="BigBus Logo">
        <h2>Train Tickets Booking via our platform will be available soon</h2><br>
        <button>Explore More</button>
      </div>
    </div>
    </section>

    <section id="offers" class="section">
    <div class="trending-section">
        <div class="trending-header">
            <h2>Trending Offers</h2>
            <a href="#" class="view-all">View All</a>
        </div>
        <div class="offers-container">
            <div class="offer-card">
                <div class="offer-badge">ZEENA BUS</div>
                <h3>Save up to Rs 250 on bus tickets</h3>
                <p>Valid till 30 Nov</p>
                <button class="coupon-btn">FIRST</button>
            </div>
            <div class="offer-card">
                <div class="offer-badge">BLACK PEARL</div>
                <h3>Save up to Rs 300 on AP, TS routes</h3>
                <p>Valid till 30 Nov</p>
                <button class="coupon-btn">SUPERHIT</button>
            </div>
            <div class="offer-card">
                <div class="offer-badge">RAJA BUS</div>
                <h3>Save up to Rs 300 on Chartered Bus</h3>
                <p>Valid till 30 Nov</p>
                <button class="coupon-btn">CHARTERED15</button>
            </div>
            <div class="offer-card">
                <div class="offer-badge">QUEEN BUS</div>
                <h3>Save 25% or Rs 100 on SB routes</h3>
                <p>Valid till 30 Nov</p>
                <button class="coupon-btn">SBNEW</button>
            </div>
        </div>
    </div>
    </section>

    <section id="team" class="section">
  <h2>Meet Our Team</h2>
  <div class="cards-container">
    <!-- Card 1 -->
    <div class="card">
      <img src="../images/model1.jpg" alt="Person 1">
      <div class="card-content">
        <h3>John Doe</h3>
        <p class="position">Project Manager</p>
        <p>John leads the team with a decade of experience in project management.</p>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="card">
      <img src="../images/model2.jpg" alt="Person 2">
      <div class="card-content">
        <h3>Jane Smith</h3>
        <p class="position">Software Developer</p>
        <p>Jane specializes in creating robust and scalable software solutions.</p>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="card">
      <img src="../images/model3.jpg" alt="Person 3">
      <div class="card-content">
        <h3>Michael Lee</h3>
        <p class="position">UI/UX Designer</p>
        <p>Michael designs intuitive user interfaces that enhance user experience.</p>
      </div>
    </div>
    <!-- Card 4 -->
    <div class="card">
      <img src="../images/model4.jpg" alt="Person 4">
      <div class="card-content">
        <h3>Emily Davis</h3>
        <p class="position">Marketing Specialist</p>
        <p>Emily crafts strategies that effectively connect with the audience.</p>
      </div>
    </div>
  </div>
</section>

    <footer class="footer">
    <div class="footer-container">
        <!-- Company Info -->
        <div class="footer-section">
            <h3>Big Bus Company</h3>
            <p>Your trusted travel partner.</p>
        </div>

        <!-- Quick Links -->
        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer-section">
            <h4>Contact</h4>
            <p>📍 Address: Main Street, Colombo</p>
            <p>📞 Phone: +94 123 456 789</p>
            <p>✉️ Email: <a href="mailto:info@bigbus.lk">info@bigbus.lk</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Big Bus Company. All Rights Reserved.</p>
    </div>
</footer>


    <script src="script.js"></script>
</body>
</html>

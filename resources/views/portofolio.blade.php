<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
<header>
        <nav>
            <h1>SW</h1>
            <input type="checkbox" name="" id="check">
            <label for="check" class="checkbtn">
            <i class="ri-menu-line"></i>
            </label>
            <ul>
                <li><a href="/home" >Home</a></li>
                <li><a href="/home/about" >About</a></li>
                <li><a href="#" class="active">Portfolio</a></li>
                <li><a href="/home/contact" >Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="portfolio" id="portfolio-loc">
        <h1 data-aos="fade-up"
        data-aos-duration="1000">Portfolio</h1>
        <div class="portfolio-cards" data-aos="fade-down-right">
            <div class="portfolio-card">
                <img src="../assets/img/images/Screenshot 2023-11-25 224044.png" alt="images">
                <div class="overlay">
                    <h3></h3>
                    <p>Dicoding Sertificate!</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card" data-aos="fade-down">
                <img src="../assets/img/images/martin-martz-3_x1FRGAEwY-unsplash.jpg" alt="">
                <div class="overlay">
                    <h3>EMPTY</h3>
                    <p>This Space Is Empty!</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card" data-aos="fade-down-left">
                <img src="../assets/img/images/vimal-s-bVplevb7Bhk-unsplash.jpg" alt="">
                <div class="overlay">
                    <h3>EMPTY</h3>
                    <p>This Space Is Empty!</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card" data-aos="fade-up-right">
                <img src="../assets/img/images/warren-umoh-K7M7dQO-HrA-unsplash.jpg" alt="">
                <div class="overlay">
                    <h3>EMPTY</h3>
                    <p>This Space Is Empty!</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card" data-aos="fade-up">
                <img src="../assets/img/images/warren-umoh-pnMjGMOs2Xw-unsplash.jpg" alt="">
                <div class="overlay">
                    <h3>EMPTY</h3>
                    <p>This Space Is Empty!</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card" data-aos="fade-up-left">
                <img src="../assets/img/images/warren-umoh-VL12rhr4mi0-unsplash.jpg" alt="">
                <div class="overlay">
                    <h3>EMPTY</h3>
                    <p>This Space Is Empty!</p>
                    <button>See More -></button>
                </div>
            </div>
        </div>
        <Button>View More</Button>
    </section>

    <footer>
      <p class="footer-text">Copyright &copy; 2024</p>
    </footer> 

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="css/style.css">
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
                <li><a href="http://127.0.0.1:8000/home" >Home</a></li>
                <li><a href="http://127.0.0.1:8000/about" >About</a></li>
                <li><a href="#" class="active">Portfolio</a></li>
                <li><a href="http://127.0.0.1:8000/contact" >Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="portfolio" id="portfolio-loc">
        <h1 data-aos="fade-up"
        data-aos-duration="1000">Portfolio</h1>
        <div class="portfolio-cards" data-aos="fade-down-right">
            <div class="portfolio-card">
                <img src="img/images/Screenshot 2023-11-25 224044.png" alt="images">
                <div class="overlay">
                    <h3></h3>
                    <p>Dicoding Sertificate!</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card" data-aos="fade-down">
                <img src="img/images/martin-martz-3_x1FRGAEwY-unsplash.jpg" alt="">
                <div class="overlay">
                    <h3>EMPTY</h3>
                    <p>This Space Is Empty!</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card" data-aos="fade-down-left">
                <img src="img/images/vimal-s-bVplevb7Bhk-unsplash.jpg" alt="">
                <div class="overlay">
                    <h3>EMPTY</h3>
                    <p>This Space Is Empty!</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card" data-aos="fade-up-right">
                <img src="img/images/warren-umoh-K7M7dQO-HrA-unsplash.jpg" alt="">
                <div class="overlay">
                    <h3>EMPTY</h3>
                    <p>This Space Is Empty!</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card" data-aos="fade-up">
                <img src="img/images/warren-umoh-pnMjGMOs2Xw-unsplash.jpg" alt="">
                <div class="overlay">
                    <h3>EMPTY</h3>
                    <p>This Space Is Empty!</p>
                    <button>See More -></button>
                </div>
            </div>
            <div class="portfolio-card" data-aos="fade-up-left">
                <img src="img/images/warren-umoh-VL12rhr4mi0-unsplash.jpg" alt="">
                <div class="overlay">
                    <h3>EMPTY</h3>
                    <p>This Space Is Empty!</p>
                    <button>See More -></button>
                </div>
            </div>
        </div>
        <Button>View More</Button>
    </section>

</body>
</html>
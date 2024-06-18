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
                <li><a href="/home">Home</a></li>
                <li><a href="#" class="active">About</a></li>
                <li><a href="/home/portofolio">Portfolio</a></li>
                <li><a href="/home/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="about" data-aos="fade-up">
        <h1>About</h1>
        <div class="description">
            <div class="line"></div>
            <p>HI THERE!!!. <span>Let me introuduce my self, my name is Syahputra Winata.</span> you can call me putra. I am 16 years old. I was born in Bogor on October 23rd 2007. I live
                at jalan Veteran III, Banjarwaru village, Ciawi district, Bogor regency. Now I am studying at Wikrama vocational high school. I'M majoring in PPLG. My class is 
                PPLG X-2. My hobbies are playing football, futsal, and listening to music.  
            </p>
        </div>
    </section>
    
    <section class="skills">
        <h1>My Skills</h1>
        <div class="cards">
            <div class="skill-card">
                <img src="../assets/img/images/php.png" alt="">
                <h2>PHP</h2>
            </div>
            <div class="skill-card">
                <img src="../assets/img/images/css.svg" alt="">
                <h2>CSS</h2>
            </div>
            <div class="skill-card">
                <img src="../assets/img/images/html.svg" alt="">
                <h2>HTML</h2>
            </div>
            <div class="skill-card">
                <img src="../assets/img/images/js.svg" alt="">
                <h2>JavaScript</h2>
            </div>
        </div>
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
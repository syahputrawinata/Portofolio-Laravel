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
                <li><a href="http://127.0.0.1:8000/contact">Portfolio</a></li>
                <li><a href="#" class="active">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="contact">
        <h2>Contact Me!</h2>

        <form action="#">
            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Full Name" id="name"
                    class="item" autocomplete="off">
                </div>
                <div class="input-field field">
                    <input type="text" placeholder="Email Address" id="email"
                    class="item" autocomplete="off">
                </div>
            </div>

            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Phone Number" id="phone"
                    class="item" autocomplete="off">
                </div>
                <div class="input-field field">
                    <input type="text" placeholder="Subject" id="Subject"
                    class="item" autocomplete="off">
                </div>
            </div>

            <div class="textarea-field field">
                <textarea name="" id="message" cols="30" rows="10"
                placeholder="Your Message" class="item"
                autocomplete="off"></textarea>
            </div>

            <div class="button">
            <button type="submit">Send Message</button>
            </div>
        </form>
    </section>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>County E-library</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: arial, sans-serif;
            background-color: hsl(0, 0%, 95%);
            background-image: url(./Best-Public-Libraries-In-The-World.webp);
            background-repeat: no-repeat;
            background-size: cover;
        }

        header {
            margin: 0;
            text-align: center;
            background-color: hsl(204, 82%, 39%);
            color: white;
            padding: 10px;
            display: flex;
        }

        header h1 {
            font-size: 1.5em;
            text-transform: uppercase;
            padding: 8px;
        }

        .nav-links {
            margin-left: auto;
            text-align: center;
            margin-right: 20px;
            padding: 8px;
            display: flex;
        }

        .inner-nav-links {
            list-style: none;
            display: flex;
            margin-right: 20px;
            padding-right: 20px;
        }

        .inner-nav-links li {
            margin-right: 10px;
            background-color: #000;
            width: 110px;
            border: none;
            border-radius: 4px;
            padding: 4px;
        }

        .inner-nav-links li:hover {
            background-color: hsl(0, 6%, 13%);
        }

        .inner-nav-links li a {
            text-decoration: none;
            color: hsl(0, 0%, 100%);
            font-size: 0.8em;
        }

        .inner-nav-links li a:hover {
            color: hsl(0, 0%, 95%);
        }

        .introduction {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .main-body {
            width: 80%;
            background-color: hsl(0, 0%, 100%);
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        .services {
            padding: 20px;
        }

        .services h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: hsl(0, 6%, 76%);
        }

        .services ul {
            list-style: none;
            padding: 20px;
        }

        .services ul li a {
            text-decoration: none;
            color: hsl(0, 6%, 76%);
        }

        .introduction-two {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
            background-color: hsl(30, 20%, 75%);
            margin-top: 50px;
            
        }

        .main-body-two {
            margin-top: 30px;
            width: 30%;
            background-color: hsl(0, 0%, 100%);
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            margin: 20px;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .main-body-two img {
            width: 200px;
            margin-bottom: 30px;
            border-radius: 4px;
        }

        .main-body-two p {
            padding: 8px;
            font-size: 1.2em;
        }

        .body-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body-buttons button {
            margin: 10px;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: hsl(204, 82%, 39%);
            color: hsl(0, 0%, 100%);
            cursor: pointer;
            width: 100px;
            font-size: 0.8em;
        }

        .body-buttons button:hover {
            background-color: hsl(204, 82%, 29%);
        }

        .footer-center {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .footer-center p {
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>County library</h1>
        <nav class="nav-links">
            <ul class="inner-nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <!--Main Body-->
    <main>
        <section class="introduction">
            <div class="main-body">
                <div class="services">
                    <h3>About Us</h3>
                    <p>
                        The County Library is dedicated to supporting the academic growth and personal development of our community. We strive to offer a wide range of educational resources, from books to research papers, 
                        available both online and in print. Our mission is to empower students, educators, and researchers with the tools they need to succeed in their respective fields.
                    </p>
                </div>
            </div>
            <div class="main-body">
                <div class="services">
                    <h3>Services</h3>
                    <p>
                        We provide online resources to help you excel in your education, and all areas that needs improvement. The library offers a variety of research and reading materials that include books,
                        research papers and all related content.
                    </p>
                </div>
            </div>
            <div class="main-body">
            <div class="services">
                    <h3>Contact Us</h3>
                    <p>
                        Have questions or need assistance? We're here to help. Feel free to reach out to us using any of the following methods, and we'll get back to you as soon as possible.
                    </p>
                    <ul>
                        <li><strong>Email:</strong> email@countylibrary.com</li>
                        <li><strong>Phone:</strong> +260 123 456 789</li>
                        <li><strong>Address:</strong> County Library, 123 Library Avenue, Lusaka, Zambia</li>
                        <li><strong>Operating Hours:</strong> Monday to Friday, 8:00 AM - 6:00 PM</li>
                    </ul>
                    <p>
                        You can also visit us on our social media platforms to stay updated:
                    </p>
                    <ul>
                        <li><strong>Facebook:</strong> <a href="https://www.facebook.com/countylibrary">facebook.com/countylibrary</a></li>
                        <li><strong>Instagram:</strong> <a href="https://www.instagram.com/countylibrary">instagram.com/countylibrary</a></li>
                    </ul>
                </div>
            </div>

        </section>
    </main>

    <footer class="footer-center">
        <script>
            const year = new Date().getFullYear();
            document.write("<p>&copy County Library " + year + ".</p>");
        </script>
    </footer>

   
</body>
</html>
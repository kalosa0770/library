<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: arial, sans-serif;
            background-color: hsl(0, 0%, 95%);
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

        .main-body {
            
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            
        }

        .container {
            width: 80%;
            height: 400px;
            background-color: hsl(0, 0%, 100%);
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

       .container h1 {
        margin-bottom: 100px;
        font-size: 1.8em;
       }

       .login-details {
        background-color: hsl(204, 82%, 39%);
        width: 300px;
        height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
       }

       .login-details button {
        background-color: hsl(0, 0%, 100%);
        width: 120px;
        height: 70px;
        border: none;
        border-radius: 4px;
        font-size: 1.3em;
        color: #000;
        margin-bottom: 20px;
        cursor: pointer;
       }

       .login-details button:hover {
        background-color: hsl(0, 0%, 95%);
        transition: 0.5s ease;
       }
    </style>
</head>
<body>
    <header>
        <h1>County library</h1>
        <nav class="nav-links">
            <ul class="inner-nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Services</a></li>
                <li><a href="index.php">Contact</a></li>
                <li><a href="#" id="login">Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-body">
       <div class="container">
            <h1>
                Welcome User
            </h1>
            <div class="login-details">
                <button id="user">User Login</button>
                <button id="admin" value="admin">Admin Login</button>
            </div>
       </div>

    </main>

    <script>
        const adminLogin = document.getElementById("admin").addEventListener("click", function(e) {
          const adminUser = prompt("Enter your username");
            const adminPass = prompt("Enter your password");

            if(adminUser === "admin" && adminPass === "password") {
                window.location.href = './addBook.php';
            } else {
                alert("Invalid username or password");
            }
             
        });

        const userLogin = document.getElementById("user").addEventListener("click", function(e) {
            const user = prompt("Enter your username");
            const pass = prompt("Enter your password");

            if(user === "user" && pass === "password") {
                window.location.href = './user.php';
            } else {
                alert("Invalid username or password");
            }
              
        });
    </script>
</body>
</html>
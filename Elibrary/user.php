<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Books</title>
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

        .book-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px auto;
            text-align: center;
            align-items: center;
            justify-content: center;
            width: 80%;
            border-radius: 5px;
            background-color: #1273de;
        }

        .book-item h4, p {
            color: #fff;
        }

        h2 {
            font-size: 1.5em;
            margin-top: 20px;
            margin-left: 20px;
            text-align: center;
        }

        p {
            text-align: center;
            color: #000;
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
                    <li><a href="viewBooks.php">Library</a></li>
                </ul>
            </nav>
    </header>

    <main>
        <h2>Books Available</h2>
        <!-- Include the PHP script to load the books -->
        <?php include 'viewBooks.php'; ?>
    </main>
</body>
</html>

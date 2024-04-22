<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utils.css">
    <title>Newsbox</title>
</head>

<body>
    <header class="container">
        <h1>newsbox</h1>
        <h2>all the news in a box</h2>
    </header>

    <main class="container">
        <!-- Box container -->
        <div class="grid-container">
            <!-- boxes -->
            <div class="">
                <a href="list.php">
                    <img src="assets/all-news.jpg" alt="all-news">
                </a>
            </div>
            
            <div class="">
                <a href="list.php?category=politics"><img src="assets/politics.jpg" alt="politics"></a>
            </div>

            <div class="">
                <a href="list.php?category=sports"><img src="assets/sports.jpg" alt="sports" srcset=""></a>
            </div>
            
            <div class="">
                <a href="list.php?category=technology"><img src="assets/technology.jpg" alt="technology " srcset=""></a>
            </div>
        </div>

        <div id="">
            <a href="add.html"><img src="assets/add.jpg" alt="add-news"></a>
        </div>
    </main>
    <footer class="container">
        <div class="text-secondary fw-semibold">designed by Group B 2024</div>
        <!-- add your name and year in the same format -->
    </footer>
</body>

</html>
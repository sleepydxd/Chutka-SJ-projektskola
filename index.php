<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diablo 4 Website</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/diablo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <div class="logo">
        <img src="diablo4.png" alt="Diablo 4 Logo" class="logo"> <!-- Logo image -->
    </div>
    <div class="header-content">
        <h1>Diablo IV</h1>
        <p>Welcome to the world of Diablo 4</p>
    </div>
    <div>
        <a href="#overview">Overview</a>
        <a href="#gameplay">Gameplay</a>
        <a href="#characters">Characters</a>
    </div>
    <a href="login.php" class="login-button">Login</a> <!-- Login button -->
</nav>
<section id="overview">
    <h2>Overview</h2>
    <?php include 'data.php'; ?>
    <p><?php echo $gameInfo["overview"]; ?></p>
    
</section>
<section id="gameplay">
    <h2>Gameplay</h2>
    <p><?php echo $gameInfo["gameplay"]; ?></p>
    
</section>
<section id="characters">
    <h2>Characters</h2>
    <p><?php echo $gameInfo["characters"]; ?></p>
    
</section>


<main>
    <?php
    
    function displayImage($src, $alt) {
        echo "<img src='$src' alt='$alt'>";
    }

    displayImage("diablo4.png", "Diablo 4");
    ?>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Blizzard Entertainment. All rights reserved.</p>
</footer>

</body>
</html>

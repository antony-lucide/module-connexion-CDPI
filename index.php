<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <header>
        <nav>
            <section class="Embed">
                <a href="index.php"><img src="./Images/logo.png" alt=""></a>
            </section>
            <section class="Navigation">
                <?php
                session_start(); // Make sure to start the session
                if (!empty($_SESSION['prenom'])) {
                    $prenom = $_SESSION['prenom'];
                    echo "<a href='profil.php'>" . htmlspecialchars($prenom) . "</a>";
                    echo "<a href='logout.php'>Deconnexion</a>";
                    // Check if the user is admin
                    if ($_SESSION['id'] === 1) {
                        echo "<a href='admin.php'>Admin</a>";
                    }
                } else {
                    echo '
                        <img src="#" alt=""><a href="connexion.php">Connexion</a>
                        <img src="#" alt=""><a href="register.php">Register</a>';
                }
                ?>
            </section>
        </nav>
    </header>
    <main>
        <img src="./Images/font.png" alt="">
        <h1>Bienvenue sur Module de Connexion !</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt doloremque voluptatibus adipisci id ratione corporis impedit quis, 
            dolores qui ab doloribus, corrupti sequi, explicabo praesentium earum tempora! Rerum, quidem nam.</p>
    </main>
    <footer>
        <div class="summary">
            <a href="https://github.com/antony-lucide">Github</a>
            <a href="https://laplateforme.io/">LaPlateforme</a>
            <a href="https://www.linkedin.com/in/antony-lucide/">Linkedin</a>
            <a href="#">SiteFan V-Rising</a>
        </div>
    </footer>
</body>
</html>

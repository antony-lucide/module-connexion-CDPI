<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
    <body>
        <header>
            <nav>
                <section class="Embed">
                    <a href="index.php"><img src="./Images/logo.png" alt=""></a>
                </section>
                <section class="Navigation">
                    <img src="#" alt=""><a href="connexion.php">Connexion</a>
                    <img src="#" alt=""><a href="register.php">Register</a>
                    <img src="#" alt=""><a href="#">Admin</a>              
                </section>
            </nav>
        </header>
    </body>
        <main>
            <h1>User List:</h1>
            <?php 
                session_start();
                if(isset($_SESSION['id']) && $_SESSION['id'] == 1){
                    $id = $_SESSION['id'];
                    if(isset($_SESSION['prenom'])) {
                        $admin = $_SESSION['prenom'];
                        echo 'Welcome Administrator' . htmlspecialchars($admin);
                    } else {
                        echo 'Welcome Administrator';
                    }
                    
                    $db = new mysqli('localhost', 'root', '', 'moduleconnexion');
                    $stmt = $db->prepare('SELECT prenom FROM utilisateurs');

                    $stmt->execute();
                    $stmt->bind_result($prenom);

                    echo '<ul>';
                    while($stmt->fetch()){
                        echo '<li>' . htmlspecialchars($prenom) . '</li>';
                    }
                    echo '</ul>';
                    $stmt->close();
                } else {
                    echo 'You are not Logged as Administrator';
                }

                ?>
        </main>
</html>
<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur s'est bienconnecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true && $_SESSION['username']==='admin') {
    header('Location: index.php'); // Si l'utilisateur s'est déjà connecté alors il sera automatiquement redirigé vers la page protected.php
    exit();
}

   
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page protégée</title>
</head>
<body>
    <h1>Bienvenue sur la page administrateur de l'atelier 3</h1>
    <p>Vous êtes connecté en tant que : <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>

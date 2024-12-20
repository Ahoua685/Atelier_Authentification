<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur s'est bienconnecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true  $_SESSION['username']==='admin') {
    header('Location: page_admin.php'); // Si l'utilisateur s'est déjà connecté alors il sera automatiquement redirigé vers la page protected.php
    exit();
}
    // Gérer le formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification simple des identifiants (à améliorer avec une base de données)
 if ($username === 'admin' && $password === 'secret') {
        // Stocker les informations utilisateur dans la session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Rediriger vers la page protégée
        header('Location: page_admin.php');
        exit();
 } 
}&& {
    header('Location: index.php'); // Dans le cas contraire, l'utilisateur sera redirigé vers la page de connexion
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

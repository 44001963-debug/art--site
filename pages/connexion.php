<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <div class="top-user-bar">
        <?php if (isset($_SESSION['user_id'])): ?>
            <span class="user-greeting-top">Bonjour, <?php echo htmlspecialchars($_SESSION['user_nom']); ?></span>
            <a href="../actions/logout.php" class="logout-link-top">Déconnexion</a>
        <?php else: ?>
            <a href="connexion.php" class="logout-link-top">Connexion</a>
        <?php endif; ?>
    </div>

    <div class="main-header-row">
        <h1>Art Community</h1>
        <nav>
            <a href="../index.php">Accueil</a>
            <a href="artistes.php">Artistes</a>
            <a href="oeuvres.php">Collection</a>
            <a href="artistes.php">Profil</a>
            <a href="contact.php">Contact</a>
            <a href="inscription.php">Inscription</a>
            <a href="rejoindre.php">Rejoindre</a>
            <a href="panier.php">Panier</a>
        </nav>
    </div>
</header>


<main class="form-container">
    <div class="form-box">
        <h2>Connexion</h2>

        <?php if (isset($_GET['login_required'])): ?>
            <p class="success-message">Veuillez vous connecter pour ajouter cette œuvre au panier.</p>
        <?php endif; ?>

        <?php if (isset($_GET['erreur']) && $_GET['erreur'] == 'mdp'): ?>
            <p class="error-message">Mot de passe incorrect.</p>
        <?php endif; ?>

        <?php if (isset($_GET['erreur']) && $_GET['erreur'] == 'email'): ?>
            <p class="error-message">Aucun compte trouvé avec cet email.</p>
        <?php endif; ?>

        <form action="../actions/login.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>

        <p class="switch">
            Vous n'avez pas de compte ?
            <a href="inscription.php">S'inscrire</a>
        </p>
    </div>
</main>

</body>
</html>
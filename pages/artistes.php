<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Artistes</title>
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





<main class="home-artists">
    <div class="home-container">
        <p class="section-tag">Artistes à découvrir</p>
        <h2>Quelques profils mis en avant</h2>

        <div class="artists-grid">
            <div class="artist-card">
                <img src="../images/lesdeuxfrida.jpg" alt="Frida Kahlo">
                <h3><a href="profil.php?nom=frida" class="artist-link">Frida Kahlo</a></h3>
                <p>Artiste mexicaine célèbre pour ses autoportraits puissants et son univers intime.</p>
                <a href="profil.php?nom=frida" class="card-link">Voir le profil</a>
            </div>

            <div class="artist-card">
                <img src="../images/amandier.jpg" alt="Vincent van Gogh">
                <h3><a href="profil.php?nom=vangogh" class="artist-link">Vincent van Gogh</a></h3>
                <p>Peintre majeur connu pour la force expressive de sa couleur et de sa lumière.</p>
                <a href="profil.php?nom=vangogh" class="card-link">Voir le profil</a>
            </div>

            <div class="artist-card">
                <img src="../images/azarakhshfarahani.jpg" alt="Azarakhsh Farahani">
                <h3><a href="profil.php?nom=azarakhsh" class="artist-link">Azarakhsh Farahani</a></h3>
                <p>Illustrateur contemporain au style narratif, coloré et très personnel.</p>
                <a href="profil.php?nom=azarakhsh" class="card-link">Voir le profil</a>
            </div>

            <div class="artist-card">
                <img src="../images/radeaudelameduse.jpg" alt="Théodore Géricault">
                <h3><a href="profil.php?nom=gericault" class="artist-link">Théodore Géricault</a></h3>
                <p>Figure du romantisme français, connu pour ses œuvres intenses et dramatiques.</p>
                <a href="profil.php?nom=gericault" class="card-link">Voir le profil</a>
            </div>
            <div class="artist-card">
            <img src="../images/dessin3.jpg" alt="Sofia Miller">
            <h3><a href="profil.php?nom=sofia" class="artist-link">Sofia Miller</a></h3>
            <p>Artiste contemporaine inspirée par les fleurs, les textures et les compositions délicates.</p>
            <a href="profil.php?nom=sofia" class="card-link">Voir le profil</a>
            </div>
        </div>
    </div>
</main>

</body>
</html>
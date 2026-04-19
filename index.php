<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Art Community</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div class="top-user-bar">
        <?php if (isset($_SESSION['user_id'])): ?>
            <span class="user-greeting-top">Bonjour, <?php echo htmlspecialchars($_SESSION['user_nom']); ?></span>
            <a href="actions/logout.php" class="logout-link-top">Déconnexion</a>
        <?php else: ?>
            <a href="pages/connexion.php" class="logout-link-top">Connexion</a>
        <?php endif; ?>
    </div>

    <div class="main-header-row">
        <h1>Art Community</h1>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="pages/artistes.php">Artistes</a>
            <a href="pages/oeuvres.php">Collection</a>
            <a href="pages/artistes.php">Profil</a>
            <a href="pages/contact.php">Contact</a>
            <a href="pages/inscription.php">Inscription</a>
            <a href="pages/rejoindre.php">Rejoindre</a>
            <a href="pages/panier.php">Panier</a>
        </nav>
    </div>
</header>

<section class="hero">
    <div class="hero-content">
        <h2>Découvrez des artistes contemporains</h2>
        <a href="pages/oeuvres.php" class="btn">Voir la collection</a>
    </div>
</section>

<section class="home-about">
    <div class="home-container">
        <p class="section-tag">À propos</p>
        <h2>Un espace pensé pour les jeunes artistes</h2>
        <p class="about-text">
            Art Community met en lumière de jeunes artistes, leur offre un espace pour présenter
            leur univers, raconter leur parcours et partager leurs œuvres avec un public sensible
            à la création.
        </p>
        <p class="about-text">
            La plateforme permet aux visiteurs de découvrir de nouveaux profils, d’explorer une
            collection d’œuvres et d’entrer plus facilement en contact avec des artistes émergents.
        </p>
    </div>
</section>

<section class="home-artists">
    <div class="home-container">
        <p class="section-tag">Artistes à découvrir</p>
        <h2>Quelques profils mis en avant</h2>

        <div class="artists-grid">
            <div class="artist-card">
                <img src="images/dessin1.jpg" alt="Lili Azad">
                <h3>Lili Azad</h3>
                <p>
                    Portraits sensibles, couleurs expressives et atmosphères poétiques.
                </p>
                <a href="pages/profil.php" class="card-link">Voir le profil</a>
            </div>
            <div class="artist-card">
            <img src="images/dessin3.jpg" alt="Sofia Miller">
            <h3>Sofia Miller</h3>
            <p>Une approche florale, décorative et sensible, entre couleur, détail et poésie visuelle.
            </p>
             <a href="pages/profil.php?nom=sofia" class="card-link">Voir le profil</a>
             </div>

            <div class="artist-card">
            <img src="images/dessin5.jpg" alt="Sofia Miller">
            <h3>Sofia Miller</h3>
            <p>
            Un univers délicat inspiré par la nature, les formes organiques et la composition textile.
            </p>
            <a href="pages/profil.php?nom=sofia" class="card-link">Voir le profil</a>
            </div>

            
        </div>
    </div>
</section>

<section class="home-featured">
    <div class="home-container">
        <p class="section-tag">Œuvres en vedette</p>
        <h2>Une sélection de la collection</h2>

        <div class="featured-grid">
            <article class="featured-item">
                <img src="images/dessin3.jpg" alt="Floraison rouge">
                <h3>Floraison rouge</h3>
                <p>par <a href="pages/profil.php?nom=sofia" class="artist-link">Sofia Miller</a></p>
            </article>

            <article class="featured-item">
                <img src="images/dessin5.jpg" alt="Fragments textiles">
                <h3>Fragments textiles</h3>
                <p>par <a href="pages/profil.php?nom=sofia" class="artist-link">Sofia Miller</a></p>
            </article>
        </div>

        <div class="section-button">
            <a href="pages/oeuvres.php" class="btn-dark">Explorer toute la collection</a>
        </div>
    </div>
</section>

<section class="home-join">
    <div class="home-container">
        <p class="section-tag">Pourquoi rejoindre la plateforme ?</p>
        <h2>Donner de la visibilité à son travail</h2>

        <div class="join-grid">
            <div class="join-box">
                <h3>Présenter son univers</h3>
                <p>
                    Construire un espace personnel pour montrer ses œuvres, son style et sa sensibilité.
                </p>
            </div>

            <div class="join-box">
                <h3>Partager son parcours</h3>
                <p>
                    Raconter son histoire artistique à travers une biographie et un portfolio.
                </p>
            </div>

            <div class="join-box">
                <h3>Rendre ses œuvres visibles</h3>
                <p>
                    Être découvert par des visiteurs, des amateurs d’art et de potentiels acheteurs.
                </p>
            </div>
        </div>

        <div class="section-button">
            <a href="pages/rejoindre.php" class="btn">Rejoindre la communauté</a>
        </div>
    </div>
</section>

<footer>
    <p>© 2026 Art Community</p>
</footer>

</body>
</html>
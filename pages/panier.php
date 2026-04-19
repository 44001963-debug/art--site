<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$panier = $_SESSION['panier'] ?? [];
$total = 0;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier</title>
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

<main class="collection-page">
    <section class="collection-section">
        <p class="section-tag">Panier</p>
        <h2 class="collection-title">Vos œuvres sélectionnées</h2>

        <div class="artist-works-grid">
            <?php if (count($panier) > 0): ?>
                <?php foreach ($panier as $index => $item): ?>
                    <?php $total += $item['prix']; ?>
                    <div class="artist-work-card">
                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['titre']; ?>">
                        <h4><?php echo $item['titre']; ?></h4>
                        <p class="work-price"><?php echo $item['prix']; ?> €</p>

                        <a href="../actions/supprimer_panier.php?index=<?php echo $index; ?>" class="delete-btn">
                            Supprimer du panier
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Votre panier est vide.</p>
            <?php endif; ?>
        </div>

        <div class="section-button">
            <p class="work-price">Total : <?php echo $total; ?> €</p>
        </div>
    </section>
</main>

</body>
</html>
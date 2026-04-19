<?php


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}




$nom = $_GET['nom'] ?? 'frida';

$artistes = [
    "frida" => [
        "nom" => "Frida Kahlo",
        "oeuvres" => [
            ["titre" => "Les Deux Fridas", "image" => "../images/lesdeuxfrida.jpg", "prix" => 320],
            ["titre" => "Autoportrait", "image" => "../images/fridaa.jpg", "prix" => 280],
            ["titre" => "Self-Portrait with Cropped Hair", "image" => "../images/autoportrait.jpg", "prix" => 300],
            ["titre" => "The Broken Column", "image" => "../images/brokencolumn.jpg", "prix" => 350]
        ]
    ],

    "vangogh" => [
        "nom" => "Vincent van Gogh",
        "oeuvres" => [
            ["titre" => "Amandier en fleurs", "image" => "../images/amandier.jpg", "prix" => 410],
            ["titre" => "Terrasse de café", "image" => "../images/cafeterace.jpg", "prix" => 390],
            ["titre" => "La chambre", "image" => "../images/lachambre.jpg", "prix" => 360],
            ["titre" => "Bouquet de fleurs", "image" => "../images/fleurs.jpg", "prix" => 330]
        ]
    ],

    "azarakhsh" => [
        "nom" => "Azarakhsh Farahani",
        "oeuvres" => [
            ["titre" => "Scène symbolique", "image" => "../images/azarakhshfarahani.jpg", "prix" => 180],
            ["titre" => "Composition rouge", "image" => "../images/art.jpg", "prix" => 210],
            ["titre" => "Madar", "image" => "../images/madar.jpg", "prix" => 195],
            ["titre" => "Shab", "image" => "../images/shab.jpg", "prix" => 230]
        ]
    ],

    "gericault" => [
        "nom" => "Théodore Géricault",
        "oeuvres" => [
            ["titre" => "Le Radeau de la Méduse", "image" => "../images/radeaudelameduse.jpg", "prix" => 500],
            ["titre" => "The Wounded Cuirassier", "image" => "../images/thewoundedcuirassier.jpg", "prix" => 420],
            ["titre" => "Hyena of the Salpêtrière", "image" => "../images/hyenaofsapetriere.jpg", "prix" => 340]
        ]
    ],

    "sofia" => [
        "nom" => "Sofia Miller",
        "oeuvres" => [
            ["titre" => "Floraison rouge", "image" => "../images/dessin3.jpg", "prix" => 240],
            ["titre" => "Jardin suspendu", "image" => "../images/dessin4.jpg", "prix" => 260],
            ["titre" => "Fragments textiles", "image" => "../images/dessin5.jpg", "prix" => 250],
            ["titre" => "Étude florale", "image" => "../images/dessin6.jpg", "prix" => 230]
        ]
    ]
];

if (!isset($artistes[$nom])) {
    $nom = "frida";
}

$artiste = $artistes[$nom];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Œuvres de l'artiste</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>
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

    <?php if (isset($_SESSION['user_id'])): ?>
        <span class="user-greeting">Bonjour, <?php echo htmlspecialchars($_SESSION['user_nom']); ?></span>
        <a href="../actions/logout.php">Déconnexion</a>
    <?php else: ?>
        <a href="connexion.php">Connexion</a>
    <?php endif; ?>
    </nav>
    
   </header>

<main class="collection-page">
    <section class="collection-section">
        <p class="section-tag">Œuvres disponibles</p>
        <h2 class="collection-title"><?php echo $artiste['nom']; ?></h2>

        <div class="artist-works-grid">
            <?php foreach ($artiste['oeuvres'] as $oeuvre): ?>
                <div class="artist-work-card">
                    <a href="<?php echo $oeuvre['image']; ?>" target="_blank">
                        <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                    </a>

                    <h4><?php echo $oeuvre['titre']; ?></h4>
                    <p class="work-price"><?php echo $oeuvre['prix']; ?> €</p>

                    <form action="../actions/ajouter_panier.php" method="post">
                        <input type="hidden" name="titre" value="<?php echo htmlspecialchars($oeuvre['titre']); ?>">
                        <input type="hidden" name="image" value="<?php echo htmlspecialchars($oeuvre['image']); ?>">
                        <input type="hidden" name="prix" value="<?php echo htmlspecialchars($oeuvre['prix']); ?>">
                        <button type="submit" class="btn-dark">Ajouter au panier</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

</body>
</html>
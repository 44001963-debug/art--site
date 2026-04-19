<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$nom = $_GET['nom'] ?? 'frida';

$artistes = [
    "frida" => [
        "nom" => "Frida Kahlo",
        "image" => "../images/lesdeuxfrida.jpg",
        "description" => "Frida Kahlo est une artiste mexicaine reconnue pour ses autoportraits, son style singulier et la force émotionnelle de ses œuvres.",
        "details" => "Son univers visuel mêle symboles personnels, culture mexicaine et intensité expressive. Elle reste aujourd’hui l’une des figures les plus marquantes de l’art du XXe siècle."
    ],
    "vangogh" => [
        "nom" => "Vincent van Gogh",
        "image" => "../images/amandier.jpg",
        "description" => "Vincent van Gogh est un peintre néerlandais célèbre pour ses couleurs vibrantes, sa touche expressive et ses paysages profondément sensibles.",
        "details" => "Ses œuvres traduisent une grande intensité émotionnelle. Il est particulièrement connu pour sa manière de peindre la lumière, le mouvement et la nature."
    ],
    "azarakhsh" => [
        "nom" => "Azarakhsh Farahani",
        "image" => "../images/azarakhshfarahani.jpg",
        "description" => "Azarakhsh Farahani est un illustrateur contemporain dont le style se distingue par des couleurs riches, des formes expressives et une narration visuelle très personnelle.",
        "details" => "Son travail donne souvent une place importante à l’imaginaire, à la scène et aux figures humaines, avec une énergie graphique forte et reconnaissable."
    ],
    "gericault" => [
        "nom" => "Théodore Géricault",
        "image" => "../images/radeaudelameduse.jpg",
        "description" => "Théodore Géricault est un peintre français du romantisme, connu pour la puissance dramatique de ses compositions et l’intensité de ses sujets.",
        "details" => "Son œuvre explore la tension, le mouvement, la souffrance humaine et la force dramatique de la peinture romantique."
    ],
    "sofia" => [
        "nom" => "Sofia Miller",
        "image" => "../images/dessin3.jpg",
        "description" => "Sofia Miller est une artiste contemporaine dont l’univers mêle dessin botanique, composition textile et sensibilité colorée.",
        "details" => "Son travail explore les formes florales, les rythmes organiques et les détails décoratifs. Ses œuvres donnent une impression de délicatesse, de mouvement et de poésie visuelle, avec une approche à la fois moderne et expressive."
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
    <title>Profil artiste</title>
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

<main class="profil-artist-page">
    <section class="artist-hero-box">
        <div class="artist-hero-image">
            <img src="<?php echo $artiste['image']; ?>" alt="<?php echo $artiste['nom']; ?>">
        </div>

        <div class="artist-hero-text">
            <p class="section-tag">Profil artiste</p>
            <h2><?php echo $artiste['nom']; ?></h2>
            <p><?php echo $artiste['description']; ?></p>
            <p><?php echo $artiste['details']; ?></p>

            <div class="section-button" style="text-align:left; margin-top:25px;">
                <a href="artist_oeuvres.php?nom=<?php echo $nom; ?>" class="btn-dark">Voir les œuvres de cet artiste</a>
            </div>
        </div>
    </section>
</main>

</body>
</html>
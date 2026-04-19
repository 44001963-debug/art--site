<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$recherche = isset($_GET['recherche']) ? strtolower(trim($_GET['recherche'])) : "";

$oeuvres = [
    [
        "titre" => "Les Deux Fridas",
        "artiste" => "Frida Kahlo",
        "image" => "../images/lesdeuxfrida.jpg",
        "prix" => 320,
        "profil" => "frida"
    ],
    [
        "titre" => "Autoportrait",
        "artiste" => "Vincent van Gogh",
        "image" => "../images/autoportrait.jpg",
        "prix" => 280,
        "profil" => "vangogh"
    ],
    [
        "titre" => "Frida allongée",
        "artiste" => "Frida Kahlo",
        "image" => "../images/fridaa.jpg",
        "prix" => 300,
        "profil" => "frida"
    ],
    [
        "titre" => "La chambre",
        "artiste" => "Vincent van Gogh",
        "image" => "../images/lachambre.jpg",
        "prix" => 350,
        "profil" => "vangogh"
    ],
    [
        "titre" => "Amandier en fleurs",
        "artiste" => "Vincent van Gogh",
        "image" => "../images/amandier.jpg",
        "prix" => 410,
        "profil" => "vangogh"
    ],
    [
        "titre" => "Terrasse de café",
        "artiste" => "Vincent van Gogh",
        "image" => "../images/cafeterrace.jpg",
        "prix" => 390,
        "profil" => "vangogh"
    ],
    [
        "titre" => "Champ d’iris",
        "artiste" => "Vincent van Gogh",
        "image" => "../images/pageaccueil.jpg",
        "prix" => 360,
        "profil" => "vangogh"
    ],
    [
        "titre" => "Scène symbolique",
        "artiste" => "Azarakhsh Farahani",
        "image" => "../images/azarakhshfarahani.jpg",
        "prix" => 180,
        "profil" => "azarakhsh"
    ],
    [
        "titre" => "Composition rouge",
        "artiste" => "Azarakhsh Farahani",
        "image" => "../images/art.jpg",
        "prix" => 210,
        "profil" => "azarakhsh"
    ],
    [
        "titre" => "Madar",
        "artiste" => "Azarakhsh Farahani",
        "image" => "../images/madar.jpg",
        "prix" => 195,
        "profil" => "azarakhsh"
    ],
    [
        "titre" => "Shab",
        "artiste" => "Azarakhsh Farahani",
        "image" => "../images/shab.jpg",
        "prix" => 230,
        "profil" => "azarakhsh"
    ],
    [
    "titre" => "Floraison rouge",
    "artiste" => "Sofia Miller",
    "image" => "../images/dessin3.jpg",
    "prix" => 240,
    "profil" => "sofia"
    ],
    [
    "titre" => "Jardin suspendu",
    "artiste" => "Sofia Miller",
    "image" => "../images/dessin4.jpg",
    "prix" => 260,
    "profil" => "sofia"
    ],
    [
    "titre" => "Fragments textiles",
    "artiste" => "Sofia Miller",
    "image" => "../images/dessin5.jpg",
    "prix" => 250,
    "profil" => "sofia"
   ],
   [
    "titre" => "Étude florale",
    "artiste" => "Sofia Miller",
    "image" => "../images/dessin6.jpg",
    "prix" => 230,
    "profil" => "sofia"
   ],
    [
        "titre" => "Le Radeau de la Méduse",
        "artiste" => "Théodore Géricault",
        "image" => "../images/radeaudelameduse.jpg",
        "prix" => 500,
        "profil" => "gericault"
    ],
    [
        "titre" => "The Wounded Cuirassier",
        "artiste" => "Théodore Géricault",
        "image" => "../images/thewoundedcuirassier.jpg",
        "prix" => 420,
        "profil" => "gericault"
    ],
    [
        "titre" => "Hyena of the Salpêtrière",
        "artiste" => "Théodore Géricault",
        "image" => "../images/hyenaofsapetriere.jpg",
        "prix" => 340,
        "profil" => "gericault"
    ]
];

$oeuvres_filtrees = [];

foreach ($oeuvres as $oeuvre) {
    if (
        $recherche === "" ||
        str_contains(strtolower($oeuvre["titre"]), $recherche) ||
        str_contains(strtolower($oeuvre["artiste"]), $recherche)
    ) {
        $oeuvres_filtrees[] = $oeuvre;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Oeuvres</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>
    <h1>Art Community</h1>

    <div class="header-right">
        <form class="search-form" action="oeuvres.php" method="get">
            <input type="text" name="recherche" placeholder="Rechercher une œuvre ou un artiste..." value="<?php echo htmlspecialchars($recherche); ?>">
            <button type="submit">Rechercher</button>
        </form>
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

        
    </div>
</header>

<main class="collection-page">
    <section class="collection-section">
        <p class="section-tag">Collection</p>
        <h2 class="collection-title">Toutes les œuvres</h2>

        <?php if ($recherche !== ""): ?>
            <p class="about-text">Résultats pour : <strong><?php echo htmlspecialchars($recherche); ?></strong></p>
        <?php endif; ?>

        <div class="artist-works-grid">
            <?php if (count($oeuvres_filtrees) > 0): ?>
                <?php foreach ($oeuvres_filtrees as $oeuvre): ?>
                    <div class="artist-work-card">
                        <a href="<?php echo $oeuvre['image']; ?>" target="_blank">
                            <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                        </a>

                        <h4><?php echo $oeuvre['titre']; ?></h4>
                        <p>par <a href="profil.php?nom=<?php echo $oeuvre['profil']; ?>" class="artist-link"><?php echo $oeuvre['artiste']; ?></a></p>
                        <p class="work-price"><?php echo $oeuvre['prix']; ?> €</p>

                        <form action="../actions/ajouter_panier.php" method="post">
                            <input type="hidden" name="titre" value="<?php echo htmlspecialchars($oeuvre['titre']); ?>">
                            <input type="hidden" name="image" value="<?php echo htmlspecialchars($oeuvre['image']); ?>">
                            <input type="hidden" name="prix" value="<?php echo htmlspecialchars($oeuvre['prix']); ?>">
                            <button type="submit" class="btn-dark">Ajouter au panier</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="about-text">Aucune œuvre trouvée.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

</body>
</html>
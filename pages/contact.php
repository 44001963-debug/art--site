<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
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


<main class="contact-page artistic-contact-page">
    <section class="contact-banner">
        <div class="contact-banner-overlay">
            <p class="contact-small-title">Créer • Partager • Être vu</p>
            <h2>Parlons d’art, de parcours et de nouvelles rencontres</h2>
            <p class="contact-main-text">
                Art Community est un espace imaginé pour encourager les jeunes artistes,
                mettre en valeur leur univers et leur permettre de présenter leurs œuvres
                à un public sensible à la création.
            </p>
            <p class="contact-main-text">
                Que vous soyez artiste, visiteur, amateur d’art ou collectionneur,
                vous pouvez nous écrire pour poser une question, découvrir un profil
                ou proposer une collaboration.
            </p>
        </div>
    </section>

    <section class="contact-centered-content">
        <div class="contact-card left-card">
            <h3>Pourquoi nous écrire ?</h3>

            <div class="contact-mini-card">
                <h4>Découvrir un artiste</h4>
                <p>
                    Vous voulez en savoir plus sur un univers, une œuvre ou le parcours
                    d’un artiste présent sur la plateforme.
                </p>
            </div>

            <div class="contact-mini-card">
                <h4>Rejoindre la communauté</h4>
                <p>
                    Vous êtes artiste et vous souhaitez construire un profil visible,
                    raconter votre parcours et présenter vos créations.
                </p>
            </div>

            <div class="contact-mini-card">
                <h4>Proposer une collaboration</h4>
                <p>
                    Vous souhaitez échanger autour d’un projet, d’une commande,
                    d’une exposition ou d’un partenariat artistique.
                </p>
            </div>
        </div>

        <div class="contact-card right-card">
            <h3>Envoyer un message</h3>
            <p class="form-subtext">Nous serons ravis de vous lire.</p>

            <?php if (isset($_GET['success'])): ?>
                <p class="success-message">Votre message a bien été envoyé.</p>
            <?php endif; ?>

            <form class="contact-form" action="../actions/contact_traitement.php" method="post">
                <input type="text" name="nom" placeholder="Nom complet" required>
                <input type="email" name="email" placeholder="Adresse mail" required>

                <select name="sujet" required>
                    <option value="">Choisir un sujet</option>
                    <option value="artiste">Je veux découvrir un artiste</option>
                    <option value="oeuvre">J’ai une question sur une œuvre</option>
                    <option value="rejoindre">Je souhaite rejoindre la plateforme</option>
                    <option value="collaboration">Je propose une collaboration</option>
                    <option value="autre">Autre demande</option>
                </select>

                <textarea name="message" placeholder="Écrivez votre message ici..." required></textarea>

                <button type="submit">Envoyer le message</button>
            </form>
        </div>
    </section>
</main>

</body>
</html>
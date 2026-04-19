<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Rejoindre</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
.join-page-modern {
    background: linear-gradient(180deg, #f8f1eb 0%, #f3e7df 45%, #f7f2ee 100%);
    padding-bottom: 100px;
}

.join-hero {
    width: 100%;
    padding: 80px 0 40px;
}

.join-hero-content {
    width: 78%;
    margin: 0 auto;
    text-align: center;
}

.join-hero-content h2 {
    font-size: 58px;
    font-weight: normal;
    margin: 0 0 22px 0;
    color: #3f2a27;
    line-height: 1.15;
}

.join-hero-content p {
    max-width: 900px;
    margin: 0 auto 16px;
    font-size: 20px;
    line-height: 1.9;
    color: #4d4441;
}

.join-layout {
    width: 78%;
    margin: 35px auto 0;
    display: grid;
    grid-template-columns: 1fr 1.05fr;
    gap: 36px;
    align-items: start;
}

.join-info-panel,
.join-form-panel {
    background: rgba(255, 255, 255, 0.94);
    border: 1px solid #ead9cf;
    padding: 38px;
    box-shadow: 0 14px 32px rgba(86, 60, 52, 0.08);
}

.join-info-panel h3,
.join-form-panel h3 {
    font-size: 34px;
    font-weight: normal;
    margin: 0 0 26px 0;
    color: #7a3e3e;
    text-align: center;
}

.join-tip {
    background: linear-gradient(135deg, #fff8f3, #fcf6f2);
    border-left: 5px solid #c77979;
    padding: 22px;
    margin-bottom: 20px;
}

.join-tip h4 {
    margin: 0 0 10px 0;
    font-size: 23px;
    font-weight: normal;
    color: #7a3e3e;
}

.join-tip p {
    margin: 0;
    font-size: 17px;
    line-height: 1.8;
    color: #4d4643;
}

.join-form-modern input,
.join-form-modern textarea,
.join-form-modern input[type="file"] {
    width: 100%;
    padding: 14px 15px;
    margin-bottom: 16px;
    border: 1px solid #decac0;
    background-color: #fffdfa;
    font-size: 15px;
    font-family: Georgia, serif;
    box-sizing: border-box;
    transition: 0.3s;
    display: block;
}

.join-form-modern textarea {
    min-height: 180px;
    resize: vertical;
}

.join-form-modern input:focus,
.join-form-modern textarea:focus {
    outline: none;
    border-color: #c77979;
    box-shadow: 0 0 0 3px rgba(199, 121, 121, 0.12);
}

.file-label {
    display: block;
    margin-bottom: 10px;
    color: #6f3d3d;
    font-size: 15px;
}

.join-form-modern button {
    width: 100%;
    padding: 15px;
    background: linear-gradient(135deg, #c77979, #8d5252);
    color: white;
    border: none;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

.join-form-modern button:hover {
    background: linear-gradient(135deg, #b76868, #7a4444);
    transform: translateY(-1px);
}
</style>
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

<main class="join-page-modern">
    <?php if (isset($_GET['success'])): ?>
    <div class="join-success-message">
        Merci <?php echo htmlspecialchars($_GET['nom'] ?? ''); ?>, votre candidature a bien été envoyée.
        Nous reviendrons vers vous après étude de votre profil artistique.
    </div>
    <?php endif; ?>
    <section class="join-hero">
        <div class="join-hero-content">
            <p class="section-tag">Rejoindre la plateforme</p>
            <h2>Donnez de la visibilité à votre univers artistique</h2>
            <p>
                Art Community accueille des artistes qui souhaitent présenter leurs œuvres,
                partager leur parcours et construire un profil plus visible.
            </p>
            <p>
                Pour candidater, vous pouvez joindre un portfolio en PDF, ajouter vos informations
                de contact et écrire une courte biographie pour présenter votre démarche artistique.
            </p>
        </div>
    </section>

    <section class="join-layout">
        <div class="join-info-panel">
            <h3>Conseils pour une bonne candidature</h3>

            <div class="join-tip">
                <h4>Présentez votre parcours</h4>
                <p>
                    Expliquez brièvement votre univers, vos inspirations, vos techniques
                    et le type d’œuvres que vous créez.
                </p>
            </div>

            <div class="join-tip">
                <h4>Ajoutez un portfolio clair</h4>
                <p>
                    Un fichier PDF bien organisé permet de montrer votre style,
                    vos meilleures œuvres et votre cohérence visuelle.
                </p>
            </div>

            <div class="join-tip">
                <h4>Soignez votre biographie</h4>
                <p>
                    Une biographie courte mais sincère aide les visiteurs et les clients
                    à mieux comprendre votre démarche.
                </p>
            </div>
        </div>

        <div class="join-form-panel">
            <h3>Créer un profil artiste</h3>

            <form action="../actions/rejoindre_traitement.php" method="post" enctype="multipart/form-data" class="join-form-modern">
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prénom" required>
                <input type="email" name="email" placeholder="Adresse mail" required>
                <input type="text" name="telephone" placeholder="Numéro de téléphone" required>

                <label class="file-label">Ajouter votre portfolio (PDF)</label>
                <input type="file" name="portfolio_pdf" accept=".pdf" required>

                <textarea name="biographie" placeholder="Petite biographie / parcours artistique" required></textarea>

                <button type="submit">Envoyer ma candidature</button>
            </form>
        </div>
    </section>
</main>

</body>
</html>
<div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
        <div class="nav-title">
            la guilde
        </div>
    </div>
    <div class="nav-btn">
        <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>

    <div class="nav-links">
        <span>Langage : </span>
        <a href="change-langage.php?langue=fr">🥐</a>
        <a href="change-langage.php?langue=en">🥓</a>
        <a href="" target="_blank">ici</a>
        <?php if (!isset($_SESSION['id'])) { ?>
            <a href="connection.php"><?= i18n('connection') ?></a>
            <a href="inscription.php"><?= i18n('inscription') ?></a>
        <?php } else { ?>
            <a href="deconnection.php"><?= i18n('déconnexion') ?></a>
        <?php } ?>
        <a href="bestiaire.php">bestiaire</a>
        <a href="index.php">accueil</a>
    </div>
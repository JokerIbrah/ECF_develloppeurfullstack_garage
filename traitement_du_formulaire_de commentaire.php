require_once "C:\Users\Admin\ECF_develloppeurfullstack_garage\page_de_connexion.php"
require_once "C:\Users\Admin\ECF_develloppeurfullstack_garage\page produits.html"
echo "panier de".$user
<!-- Affichage des articles dans le panier -->
<div id="cart">
    <?php

    session_start();
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            echo "<p>" . $item['name'] . " - Prix: $" . $item['price'] . "</p>";
        }
    } else {
        echo "<p>Votre panier est vide</p>";
    }
    ?>
</div>

echo "merci de votre confiance"
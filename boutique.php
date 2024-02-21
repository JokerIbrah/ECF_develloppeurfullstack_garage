<html lang="fr">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Boutique en Ligne</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Ma Boutique en Ligne</h1>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Produits</a></li>
                <li><a href="#">Panier</a></li>
                <li><a href="C:\Users\Admin\ECF_develloppeurfullstack_garage\contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="produits">
            <article>
                <h2>Nom du Produit</h2>
                <p>Description du produit...</p>
                <p>Prix: $XX.XX</p>
                <script>
    // JavaScript pour ajouter un produit au panier
    document.querySelectorAll('button').forEach(button => {
        button.addEventListener('click', function() {
            // Logique pour ajouter le produit au panier
            alert('Produit ajouté au panier!');
        });
    });
</script>

            </article>
            <!-- Ajoutez d'autres produits ici -->
        </section>
    </main>

    <footer>
        <p><a href="C:\Users\Admin\ECF_develloppeurfullstack_garage\contact.php">Contact</a></p>
    </footer>
</body>
</html>


</html>
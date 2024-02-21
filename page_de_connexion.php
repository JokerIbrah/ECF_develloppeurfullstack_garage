<h2>Connexion</h2>
    <form action="login.php" method="post">
        <label for="username">Nom d'utilisateur:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Se connecter">
    </form>
    <?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifier les informations d'authentification (exemple simplifié, vous devrez sécuriser cela)
    if ($username === 'utilisateur' && $password === 'motdepasse') {
        // L'authentification réussie, rediriger l'utilisateur vers une page d'accueil ou une autre page sécurisée
        header("Location: C:\Users\Admin\ECF_develloppeurfullstack_garage\boutique.php");
        exit();
    } else {
        // Si les informations d'authentification sont incorrectes, afficher un message d'erreur
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
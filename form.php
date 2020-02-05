<?php
// Récupération des données (POST) du formulaire
$formData = $_POST;

// Test si les champs obligatoires sont bien remplis
if(empty($formData['str_name']) || empty($formData['str_email']) || empty($formData['str_password']) || empty($formData['str_passwordConfirm'])) {
    $message = '<p class="text-danger text-center">Veuillez remplir <strong>les champs obligatoires</strong>.</p>';
} else {
    // Test si les deux passwords sont identiques
    if($formData['str_password'] !== $formData['str_passwordConfirm']) {
        $message = '<p class="text-danger text-center">Veuillez saisir <strong>deux fois le même mot de passe</strong>.</p>';
    } else {
        // Enregistrement en BDD
        

        // Message de succès
        $message  = '<p class="text-success text-center">Le formulaire est <strong>bien rempli</strong>.</p>';
        $message .= "<p><strong>Rappel :</strong></p>";
        $message .= "<ul>";
        $message .= "<li>Votre nom : " . $formData['str_name'] . '</li>';
        $message .= "<li>Votre email : " . $formData['str_email'] . '</li>';
        $message .= "<li>Votre mot de passe : " . $formData['str_password'] . '</li>';
        $message .= "</ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Onglet</title>
        <meta name="description" content="Description SERP">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>

    <div class="container">
            <div class="row">
                <div class="col-md-12 text-center border-bottom border-primary mb-5">
                    <h1>Création d'un utilisateur</h1>
                    <p><small>Enregistrement en base de données</small></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <?php echo $message; ?>
                    <?php echo '<p class="text-center"><a href="index.html">Retour au formulaire</a></p>'; ?>
                </div>
            </div>
        </div>
    </body>
</html>
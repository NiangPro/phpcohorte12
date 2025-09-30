<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container col-md-6 p-5">
        <?php 
            if (isset($_POST["inscrire"])) {
                extract($_POST);
                if (!empty($nom) && !empty($email) && !empty($mdp)) {
                    echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Inscription reussie pour '.strtoupper($nom).' avec l\'email '.strtoupper($email).'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>                    
                    ';
                }else{
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Veuillez remplir tous les champs.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ';
                }
            }
        ?>
        <div class="card">
            <div class="card-header">
                <h3>Creation de compte</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe</label>
                        <input type="password" name="mdp" class="form-control">
                    </div>
                    <button type="submit" name="inscrire" class="btn btn-outline-success mt-3">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
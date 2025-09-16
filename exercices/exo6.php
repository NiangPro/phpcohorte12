<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tables de multiplication</h1>
        <div class="row">
            <?php for($n = 1; $n <= 20; $n++): ?>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <h4 class=" text-center">Table de <?= $n ?></h4>
                         <?php for($i = 1; $i <= 10; $i++){ ?>
                        <h3><?= "$n x $i = ".($n*$i) ?> </h3>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php endfor; ?>    
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
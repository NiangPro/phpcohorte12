<?php 

    require_once("includes/header.php"); 
    
    if (isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case 'categorie':
                require_once("controllers/categorieController.php");
                break;
            
            default:
                require_once("controllers/homeController.php");
                break;
        }
    }else{

        require_once("controllers/homeController.php");
    }
    
    require_once("includes/footer.php"); 
    
?>


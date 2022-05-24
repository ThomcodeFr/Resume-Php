<div id="container-content">
    <?php
    $menu = $_GET['menu'] ?? "identite";
    switch ($menu) {
        case 'identite':
            include "identite.php";
            break;
        case 'experience':
            include "experience.php";
            break;
        default:
            include "identite.php";
            break;
    }
    ?>
</div>
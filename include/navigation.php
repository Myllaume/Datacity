<?php
$markdown_files = get_all_file_names('./pages/');
?>

<nav class="navbar sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="./index.php">
        <img src="çaarrive.png" width="30" height="30" class="d-inline-block align-top" alt="logo is comming">
            Data City census France
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Accueil</a>
            </li>
            <?php 
            foreach ($markdown_files as $key => $file_name):
                $file_name = substr($file_name, 0, -3);
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="./read.php?view=<?= $file_name ?>"><?= ucfirst($file_name) ?></a>
            </li>
            <?php
            endforeach;
            ?>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>
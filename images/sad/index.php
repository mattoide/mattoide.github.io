<!DOCTYPE html>
<html>
<head>
    <title>Elenco file</title>
</head>
<body>
<h1>Elenco file nella cartella</h1>
<ul>
    <?php
        $directory = "./"; // Percorso della cartella corrente
        $files = scandir($directory);

        foreach($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo "<li>$file</li>";
    }
    }
    ?>
</ul>
</body>
</html>

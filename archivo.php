<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php 
        $nombre =  $_FILES['fichero_usuario']['name'];
        $ruta = 'archivos/';
        opendir($ruta);
        COPY($_FILES['fichero_usuario']['tmp_name'],$ruta.$nombre);
        echo "<h1 class='text-center'>Archivo subido exitosamente.</h1>";
        echo '<div class="container">';
        echo "<img class='img-responsive w-50 mx-auto' src=$ruta/$nombre />";
        echo '</div>';
    ?>
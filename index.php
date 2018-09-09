<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Ejercicio#1 Actividad 11</title>
</head>
<body>
    <div class="container">
        <?php 
            /*Podemos acceder a la cookies de php con el siguiente metodo: $_COOKIE
                Con ayuda de este metodo podemos ver,crear y modificar nuestras variables de tipo Cookies HTTP.
            */
            // Aqui procedemos a crear y asignarle un valor a la variable:
            $_COOKIE["nombre"] = "Juan Pablo Carrascal";
            echo $_COOKIE["nombre"];
            echo "<br>";
            // Tambien podemos cambiar su valor de la siguiente manera:
            $_COOKIE["nombre"] = "Juan Esteban Carrascal";
            echo $_COOKIE["nombre"];

            /*
            Segun la documentación la mejor forma de eliminar la cookies es darles
            un tiempo de vida fijo de la siguiente forma:
            */
            setcookie("saludo","Holaaa",time()+60);
            /*
            Con el metodo setcookie podemos fijar cookies con una valor y tiempo de expiración 
            El tiempo de expiración lo establecemos usando el metodo 'time()'
            para obtener la fecha actual, cuando conseguimos la fecha actual le susamos 60, con lo que
            obtendremos 60 segundos más al tiempo de expiración de la cookie. Una vez pasen 60 segundos el navegador se encargará
            de eliminar la cookie.
            */
            echo "<br>";
            print_r($_COOKIE);

        ?>
    </div>
</body>
</html>
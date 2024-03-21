<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/hoja-estilo.css"><!-- Checar que el type no cause problema -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de sesion</title>
</head>
<body>
    <form action="iniciodesesion.php" method="POST"><!-- Verificar si cambiando ACTION al nombre correcto ya funciona un poco más -->
        <h1>INICIAR SESION</h1>
        <hr>
        <?php
            if (isset($_GET['error'])) {
            ?>
            <p class="error">
            <?php
                echo $_GET['error'];
            ?>
            </p>
            <?php
            } 
            ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input type="password" name="Contraseña" placeholder="Contraseña">
        <hr>
        <button type="submit">Iniciar Sesion</button>
    </form>
</body>
</html>
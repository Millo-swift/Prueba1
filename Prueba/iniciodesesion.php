<?php
    session_start();
    include('conexion.php');

    if (isset($_POST['Usuario']) && isset($_POST['Contraseña'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Usuario = validate($_POST['Usuario']);
        $Contraseña = validate($_POST['Contraseña']);

        if (empty($Usuario)) {
            header("Location: index.php?error=El Usuario Es Requerido");
            exit();
        }elseif (empty($Contraseña)){
            header("Location: index.php?error=La Contraseña Es Requerida ");
            exit();
        }else{
            /*($Contraseña);Si nos marca error al querer probrar, cancelarlo con dos diagonales*/

            $Sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Contraseña  = '$Contraseña'";
            $result = mysqli_query($conexion, $Sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['Usuario'] === $Usuario && $row['Contraseña'] === $Contraseña) {
                    $_SESSION['Usuario'] = $row['Usuario'];
                    $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
                    $_SESSION['Id'] = $row['Id'];
                    header("Location: inicio.php");
                    exit();
                }else {
                    header("Location: index.php?error=El usuario o la contraseña con incorrectos");
                    exit();
                }
            }else {
                header("Location: index.php?error=El usuario o la contraseña con incorrectos");
                exit();
            }
        }
    }else {
        header("Location: index.php");
        exit();
    }
?>
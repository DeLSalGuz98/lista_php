<?php
    //traemos la base de datos
    include('db.php');
    //comprobamos si esta recibe los datos 
    if(isset($_POST['deleteUser'] )){
        //guardamos los datos en variables
        $contra = $_POST['password'];

        //realizamos la onsulta
        $query = "SELECT * FROM usuario WHERE contra = '$contra'";
        //enviamos los datos
        $resultado = mysqli_query($conn, $query);

        if ($resultado) {
            $user = mysqli_fetch_array($resultado);
            $idUser =  $user['id'];
            
            $query = "DELETE FROM usuario WHERE id = $idUser";
            $res = mysqli_query($conn, $query);
            if($res){
                //redirigir a otra pagina tras almacenar el dato
                header("Location: lista.php");
            }
            else{
                $_SESSION['message'] = 'Contraseña Invalida';
                header("Location: lista.php");
                //echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        } else {
            //echo "Error: " . $query . "<br>" . mysqli_error($conn);
            
        }
    }
?>


<?php
    //traemos la base de datos
    include('db.php');
    //comprobamos si esta recibe los datos 
    if(isset($_POST['saveUser'] )){
        //guardamos los datos en variables
        $nombre = $_POST['name'];
        $apellido = $_POST['lastName'];
        $sexo = $_POST['sex'];
        $contra = $_POST['password'];

        //realizamos la onsulta
        $query = "INSERT INTO usuario(nombre, apellido, sexo, contra)
        VALUES ('$nombre', '$apellido', '$sexo', '$contra')";
        //enviamos los datos
        $resultado = mysqli_query($conn, $query);

        if ($resultado) {
            echo "New user added";
        } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

        //redirigir a otra pagina tras almacenar el dato
        header("Location: lista.php");
    }
?>


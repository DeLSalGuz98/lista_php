<?php include('db.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include("includes/header.php")?>
    <section class="formulario_section">
        <div class="formulario_container">
            <h3>Registrate</h3>
            <form action="saveUser.php" method="POST">
                <input type="text" placeholder="Nombre" name="name">
                <input type="text" placeholder="Apellido" name="lastName">
                <input type="password" placeholder="Contraseña" name="password">
                <div class="form_sexo">
                    <p>Sexo:</p>
                    <label><input type="radio" name="sex" value="Hombre">Hombre</label>
                    <label><input type="radio" name="sex" value="Mujer">Mujer</label>
                </div>
                <input type="submit" value="Registrar" name="saveUser">
                <a href="lista.php">Ver Lista de Usuarios</a>
            </form>
        </div>
    </section>
</body>
</html>

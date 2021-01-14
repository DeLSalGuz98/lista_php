<?php include("db.php");?>
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
    <?php if(isset($_SESSION['message'])){?>
        <div id="message_error" class="error_message">
            <p>
                <?= $_SESSION['message']?>
            </p>
            <button id="message_btn">X</button>
        </div>
    
    <?php session_unset(); }?>
    <section class="lista_section">
        <div class="lista_container">
            <table>
                <tr class="td_head">
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Sexo</td>
                    <td></td>
                </tr>
                <?php
                    //obtenemos todos los usuarios
                    $query = "SELECT * FROM usuario";
                    $allUsers = mysqli_query($conn, $query);

                    //repasar y mostrar todos los usuarios registrados
                    while ($row = mysqli_fetch_array($allUsers)) {?>
                        <tr class="td_body">
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php echo $row['sexo'] ?></td>
                            <td><button class="delete_btn">delete</button></td>
                        </tr>
                    <?php } ?>
            </table>
        </div>
    </section>
    <section class="panel_section" id="panel">
        <div class="message_container">
            <form action="deleteUser.php" method="POST">
                <div class="message_text">
                    <p>Inserte la Contraseña</p>
                </div>
                <div class="message_in">
                    <input type="password" name="password">
                </div>
                <div class="message_btn">
                    <input id="del_btn" type="submit" value="Delete" name="deleteUser">
                    <a id="cancel_btn" href="#">Cancel</a>
                </div>
            </form>
            
        </div>
    </section>
    <script src="js/addPanel.js"></script>
</body>
</html>
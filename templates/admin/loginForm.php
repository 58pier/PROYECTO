<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>

<body class="degradado">
    <div class="login"><br>
        <img src="img/logo.png">
        <h1>Login</h1>

        <form action="admin.php?action=login" method="post">

            <input type="hidden" name="login" value="true">

            <?php if( isset($results['errorMessage'])) { ?>
            <div class="errorMessage"><?php echo $results['errorMessage']?></div>
            <?php } ?>


            <input type="text" value="Usser" id="username" class="usser" name="username" size="15" onclick="if(this.value=='Usser'){ this.value=''}" onblur="if(this.value=='') {this.value='Usser'}"><br><br><br>
            <input type="password" value="Pass" id="password" class="usser" name="password" size="15" onclick="if(this.value=='Pass'){ this.value=''}" onblur="if(this.value=='') {this.value='Pass'}"><br><br><br>
            <input type="submit" name="login" value="Login" id="ingresar" class="button">
        </form>

    </div>
</body>

</html>
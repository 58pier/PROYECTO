<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
    <title>Document</title>
</head>

<body class="degradado">
    <div class="login"><br>
        <img src="../../img/logo.png">
        <h1>Login</h1>
        <input type="text" value="Usser" id="usser" class="usser" name="usser" size="15" onclick="if(this.value=='Usser'){ this.value=''}" onblur="if(this.value=='') {this.value='Usser'}"><br><br><br>
        <input type="password" value="Pass" id="pass" class="usser" name="pass" size="15" onclick="if(this.value=='Pass'){ this.value=''}" onblur="if(this.value=='') {this.value='Pass'}"><br><br><br>
        <input type="button" value="Iniciar Sesión" id="ingresar" class="button">
    </div>
</body>

</html>
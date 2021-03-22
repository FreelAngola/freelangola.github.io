<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciocar foto de perfil</title>
</head>
<style>
    h1{
        color:violet;
    }
    #i{
        width:100%;
        margin-top:4px;
    }
</style>
<body>
    <p><h1>escolha uma foto</h1></p>
    <form action="per.php" method="post" enctype="multipart/form-data">
   <input type="file" name="file" id=""><br>
   <input type="submit" name="submit" value="carregar" id="i">
</form>
</body>
</html>
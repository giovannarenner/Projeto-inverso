<!DOCTYPE html>
 <html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>inverso</title>
</head>
<body>
    <div class="titulo">
        <h1 class="palavra">Digite uma palavra para ser invertida</h1>
<form  method="POST">
   <div class="inputs">
            <p class="inputN">
           <input class="inputR" type="text" name="nome" />
            </p>
            </div>
        <button class="res">Mostrar</button> <br>
        
        <?php
      if(isset($_POST['nome'])){
      $nome = $_POST['nome'];
      $inverso =  strrev($nome);
    
      
        echo "<p style='margin-top: 15px; font-size: 35px; color: black;'>
         $inverso
     </p>";
      }
            
         ?>
        </form>
        </div>
</body>
</html>
<?php
$tema = $_GET['tema'] ?? 'padrao';
switch ($tema) {
    case 'azul': $cor = '#0625a1'  ; break;
    case 'verde': $cor = '#0abf3a'; break;
    case 'amarelo': $cor = '#c7c928'; break;
    default:      $cor = '#ffffff';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-color: <?php echo $cor; ?>;
        }

        h1{
            align-items: center;
            text-align: center;
            font-size: 80px;
        }
    </style>

</head>
<body>

    Parabens colega, você pode customizar essa pagina clicando nos butão ai embaixo 
    <br>
    <form action="" method="GET">
        <label for="tema">Escolha o visual:</label>
        <select name="tema" id="tema" onchange="this.form.submit()">
            <option value="padrao" <?php if($tema == 'padrao') echo 'selected'; ?>>Padrão</option>
            <option value="amarelo" <?php if($tema == 'amarelo') echo 'selected'; ?>>Amarelo</option>
            <option value="azul"   <?php if($tema == 'azul')   echo 'selected'; ?>>Azul</option>
            <option value="verde"  <?php if($tema == 'verde')  echo 'selected'; ?>>Verde</option>
        </select>
    </form>

    <?php 
        if($tema !== 'padrao'){
            echo "<H1>HELLO NIGGA</H1>";
        }
    ?>
</body>
</html>
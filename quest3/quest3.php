<?php 

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if($idade >= 18){
 
    // echo "<h1 style='color: green'>você é maior de idade</h1>";
    $mensagem = "<h1 style='color: green'> 
    Você é maior de idade, já pode beber cana doce OBAAA :)
    </h1>";
}
else{
    // echo "<h1 style='color: red'>você é menor de idade</h1>";
    $mensagem = "<h1 style ='color: red'>
    Você é menor de idade, tem que beber toddynho seu beta
    </h1>";
}
?>

<h1>
    <?= 
    $mensagem
    ?>
</h1>
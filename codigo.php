<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <title>Mensagem</title>
</head>
<body>
<div class="w3-container w3-teal">
 <h1>
<?php
/*
Olá Rafael, Obrigado por enviar a atividade do fichário no prazo solicitado,
 você criou o formulário e enviou os dados por POST para o outro arquivo PHP, 
 criou a estrutura de decisão, mas cada tipo de pagamento selecionado deveria 
 estar num IF ou ELSEIF para calcular um desconto de 10% para depósito, 8% para boleto,
  ou nenhum desconto se fosse selecionado cartão de crédito. 
  Você fez o mesmo cálculo para Depósito e Boleto e aplicou desconto para o Cartão de Crédito.
  Como o resultado exibido não corresponde ao solicitado pela atividade, 
  peço por gentileza que faça a atividade de recuperação dessa agenda. 
  Tendo dúvidas, me envie um CorreioTec. Att., Prof. Jasiel
  */
$formapagamento;
$desconto;
$n1 = $_POST['txtValorCompra']; 

 echo "PROMOÇÃO DO MÊS DE ANIVERSÁRIO!: R$ "."<br>";
 echo "".$_POST['txtNome']." ! <br>"; 
 echo "Valor da Compra sem desconto: R$ ".$_POST['txtValorCompra']."<br>";
 echo "Forma de pagamento escolhido: R$ ".$_POST['cmbPag']."<br>";

 if($_POST['cmbPag'] == "Deposito" || $_POST['cmbPag'] == "Boleto")
 {
 $desconto = "10%";
 $media = ($n1*10)/100;
 echo "".$_POST['txtNome']."! Você economizou ".$media."!!! <br>";
 $valorpagar = ($n1-$media);
 echo "".$_POST['txtNome']."! Valor a Pagar ".$valorpagar."!!! <br>";
 }
else 
 {
 $desconto = "8%";
 $media2 = ($n1-$media2)/100;
 echo "".$_POST['txtNome']."! Você economizou ".$media2."!!! <br>";
 $valorpagar2 = ($n1-$media2);
 echo "".$_POST['txtNome']."! Valor a Pagar ".$valorpagar2."!!! <br>";
 } echo "Desconto de:
".$desconto."<br>";
 ?>
<?php
 </h1> </div>
</body>
</html>

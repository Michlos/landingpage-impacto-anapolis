<?
# alterar a variavel abaixo colocando o seu email

$destinatario = "michlos@gmail.com";

//destinatário anapolis shopping 
//anapolisimpacto@gmail.com

//anapolis centro
//impactoloja2anps@gmail.com


$loja = $_REQUEST['form-loja']
$pneu = $_REQUEST['form-pneu']
$nome = $_REQUEST['form-nome'];
$email = $_REQUEST['form-email'];
$fone = $_REQUEST['form-fone'];
$mensagem = $_REQUEST['form-texto'];
$mensagem = $mensagem "\n" 
//$assunto = $_REQUEST['assunto'];

// if (loja=="centro") {
// 	$destinatario = "impactoloja2anps@gmail.com";
		
// }else if (loja=="shopping") {
// 	$destinatario = "anaplisimpacto@gmail.com";
// }

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Loja: " . $loja . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Pneu: " . $pneu . "\n\n";
$body = $body . "Telefone: " . $fone . "\n\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.htm");


?>
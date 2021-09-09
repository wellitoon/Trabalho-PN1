<?php

$nome = $_POST['name'];

if(empty($nome)){
	
	echo "<br>Campo nome obrigatorio , clique no botão para voltar, o javascript fará isso por você :/<br>";
        $_SESSION['erroCampoNome'] = "Campo nome obrigatorio";
	echo '<br> <form> <input type="button" value="Voltar" onClick="JavaScript: window.history.back();"> </form>';
}else{
 
echo "<br>Oi, seu nome é: ".$_POST["name"];
echo "<br> Estamos no php";

}



?>
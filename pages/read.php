<?php
if($_GET["read"] != null){
	if (file_exists("files/".$_GET["read"].".php")) {
	include_once("files/".$_GET["read"].".php");
	echo "<title>$titulo - Biblioteca Digital</title>";
	echo "<br><a href='?info=".$_GET["read"]."' class='button fit' data-poptrox='youtube,800x400'>Voltar ao livro</a>";
	echo "<center><iframe src='files/".$_GET["read"].".pdf' height='980px' width='80%'></iframe></center>";
	if($_COOKIE["hackatecaMusic"] == "0") echo("<script>document.getElementById('musica').src = '".$musicId.".mp3'</script>");
}else{echo "O arquivo $filename não existe";
}
}
?>

<?php
if($_GET["info"] != null){
	if (file_exists("files/".$_GET["info"].".php")) {
	include_once("files/".$_GET["info"].".php");
	echo "<title>$titulo - Biblioteca Digital</title>";
	echo "<h3>$titulo</h3>";
	if(file_exists("files/".$_GET["info"].".png")){echo"<img src='files/".$_GET['info'].".png' height='280px' width='200px'>";};
	echo "<p>Autor: $autor</p>";
	echo "<p>Descrição: $descriptionComplete</p>";
	echo "<p>Data de Publicação: $dataPub</p>";
	echo "<p>Tags: ".implode(", ",$tags).".</p>";
	echo "<a href='./?read=".$_GET["info"]."' class='button fit2' data-poptrox='youtube,800x400'>Ler</a>";
	echo "<a href='files/".$_GET["info"].".pdf' class='button fit2' data-poptrox='youtube,800x400'>Ler (Fullscreen)</a>";
	echo "<a href='./files/".$_GET["info"].".pdf' download class='button fit2' data-poptrox='youtube,800x400'>Download</a>";
}else{echo "O arquivo $filename não existe";
}
}
?>

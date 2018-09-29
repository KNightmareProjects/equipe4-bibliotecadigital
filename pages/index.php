<?php
function createdivbox($link){
if (file_exists("files/".$link.".php")) {
	include("files/".$link.".php");
echo 	"<div class='box'>
		<br><a href='files/$link.png' ><img src='files/$link.png' height='200px' width='122px' alt='$titulo'/></a>
		<div class='inner'>
		<h3>$titulo</h3>
		<p class='p2'>$descriptionSmall</p>
		<a href='./?info=$link' class='button fit' data-poptrox='youtube,800x400'>Acessar</a>
		</div>
		</div>";
}};

?>
<title>Biblioteca Digital</title>
<div id="main">
<div class="inner">
	
	<div class="thumbnails">
	<?php
		createdivbox("dovahzul");
		createdivbox("O-Portal");
		createdivbox("O-Mundo-no-Ano-3000");
		createdivbox("Destino-Fortaleza");
		createdivbox("os-risos-de-ema");
		createdivbox("Saida-21-e-Outros-Contos");  
		createdivbox("FBI_document_ufo8");  
		createdivbox("A-Cidade-do-Fim-do-Mundo");
		createdivbox("Oculto");
	?>
	</div>
	
	
	
	
	
	
</div></div>

<title>Options - HACKATECA</title>
<form method="POST" action="?options">
<select id="music" required name="music">
    <option value="0" selected>No Music</option>
    <option value="1">Together Again</option>
    <option value="2">Be With You</option>
    <option value="3">Dog Days</option>
    <option value="4">On  On</option>
    <option value="5">Fight Like The Devil</option>
    <option value="6">Alive And Kicking</option>
    <option value="7">Adrenaline </option>
</select>
<!--
<select id="theme" required name="theme">
    <option value="0" disabled selected>Select your theme</option>
    <option value="1">Musica</option>
    <option value="1">Musica</option>
</select>
-->



<input name="ENVIADO" id="botao" type="submit" value="Salvar">
</form>
<?php
if(isset($_POST["ENVIADO"])){
	if(isset($_POST["music"]))setcookie("hackatecaMusic",$_POST["music"],time()+999999999);
	if(isset($_POST["theme"]))setcookie("hackatecaTheme",$_POST["theme"],time()+999999999);
	echo("<script>window.location.href = '?options'</script>");
};
if($_COOKIE["hackatecaMusic"] != "0" && $_COOKIE["hackatecaMusic"] != null) echo("<script>document.getElementById('music').value = ".$_COOKIE['hackatecaMusic']."</script>");
?>

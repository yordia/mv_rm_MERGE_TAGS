<!-- PRUEBA PARA SICRONIZAR DESDE DE LOCAL SiN CLONAR A LA NUBE (REPOSITORIO) -->
<!-- comentarrio php GIT -->
<!DOCTYPE html>
<html>
<head>
	<title>Ventana modal	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="misestilos.css">
</head>

<body id=cuerpo>
	<input type="checkbox" id="cerrar" onclick="pausar_video()">
	<label for="cerrar" id="btn-cerrar">X</label>
	<div class="modal">	
		<div class="contenido">	
			<!-- <h2>Vtitulode MODAL</h2> -->
			<!-- <img src="img.png"> -->
			<video id="video_modal" src="prueba.mp4" autoplay controls  preload></video>
		</div>

	</div>
	<main>
		<h1>Ventana modal con HTML Y CSS</h1>
		<P>	LOREM</P>
	</main>
<img src="img.png"><img src="img.png"><img src="img.png"><img src="img.png"><img src="img.png"><img src="img.png"><img src="img.png"><img src="img.png"><img src="img.png"><img src="img.png">

<video src="prueba.mp4" width="640" height="360" controls  preload></video><video src="prueba.mp4" width="640" height="360" controls  preload></video><video src="prueba.mp4" width="640" height="360" controls  preload></video><video src="prueba.mp4" width="640" height="360" controls  preload></video>
</body>
</html>

<script>
	var body = document.body;
var video = document.querySelector("#video_modal");
// pausar con tecla espacio
// var space = false;

// body.onkeydown = function(e){
//     if (e.keyCode == 32 && !space) {
//         space = true;
//         video.pause();
//     }else if(e.keyCode == 32 && space){
//         space = false;
//         video.play();
//     }
// }
//primero capTURAMOS EL VALOR DE CHEOUT
window.onload=function(){
	var porId=document.getElementById("cerrar").checked;
	// alert (porId);
	if (porId==false){
		// alert ("DETENEMOS SCROLL ");
		// detenemos scroll
		var elemento = document.getElementById("cuerpo");
    	elemento.className += " stop-scrolling";
		// video.play();
	}
}
function pausar_video(){
	video.pause();
	// eliminamos clase que desactiva o oculta el scroll
	var element = document.getElementById("cuerpo");
	element.classList.remove("stop-scrolling");
}
// 2 PAUSAMOS EL VIDEO AL HACER CLICK EN CHECKOUT
</script>

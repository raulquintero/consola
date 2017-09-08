<html>
<head>

<script
  src="http://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
</head>

<body>

								<form id="formulario" name="formulario" action="procesa.php" method="POST" >

									<input type="nombre" id="nombre" text name="nombre">


									<input type="submit" name="submit" id="submit" value="enviar">



								</form>

<div id="server"></div>




<script type="text/javascript">

$(document).ready(function(){
	var form = $("#formulario");
	form.submit(function(){

		$.ajax({

			type: 'POST',
			url: form.attr("action"),
			data: form.serialize(),
			success:  function(data){
			document.getElementById('server').innerHTML += data.response+'<hr style=\"width:100%; height:4px; padding:0; margin:0 ;background: yellow\">';

				// alert(data.response);

			}

		});
		return false;
		
		})

	})




</script>



</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
	function check(){
		if ($("#c1").val() ==1) {
			$("#c1").prop("checked", true);  // para poner la marca
			//$("#chkStatus").prop("checked", false); // para quitar la marca
		} 
		if ($("#c2").val() ==1) {
			$("#c2").prop("checked", true);
		}
	}

	function check_f(){
		if ($("#f1").val() ==1) {
			$("#f1").prop("checked", true);  // para poner la marca
			$("#f2").prop( "disabled", true ); //para deshabilitar
		} 
		if ($("#f2").val() ==1) {
			$("#f2").prop("checked", true);
			$("#f1").prop( "disabled", true );
		}
	}

	function check_g(){
		if ($("#g1").val() ==1) {
			$("#g1").prop("checked", true);  // para poner la marca
			
		} 
		if ($("#g2").val() ==1) {
			$("#g2").prop("checked", true);
		
		}
	}

	function disable_check_d1(obj ) {
		if (obj.checked){
			$("#d2").prop( "disabled", true );
		}
		else{
			$("#d2").prop( "disabled", false );
		}
	}

	function disable_check_d2(obj ) {
		if (obj.checked){
			$("#d1").prop( "disabled", true );
		}
		else{
			$("#d1").prop( "disabled", false );
		}
	}

	function disable_check_f1(obj ) {
		if ( obj.checked){
			$("#f2").prop( "disabled", true );
		}
		else{
			$("#f2").prop( "disabled", false );
		}
	}

	function disable_check_f2(obj ) {
		if (obj.checked){
			$("#f1").prop( "disabled", true );
		}
		else{
			$("#f1").prop( "disabled", false );
		}
	}

</script>
<body>
	<h2>Check</h2>
	<label class="checkbox-inline">
	  <input type="checkbox" id="c1" value="0"> Opcion 1
	</label>
	<label class="checkbox-inline">
	  <input type="checkbox" id="c2" value="1">Opcion 2
	</label>
	<button onclick="check( )">Marcar opcion con value 1 </button>


	<h2>Disable</h2>
	<label class="checkbox-inline">
	  <input type="checkbox" id="d1" value="1" onchange="disable_check_d1(this)"> Opcion 1
	</label>
	<label class="checkbox-inline">
	  <input type="checkbox" id="d2" value="0" onchange="disable_check_d2(this)">Opcion 2
	</label>
	
	
	<h2>Check / Disable uno u Otro</h2>
	<label class="checkbox-inline">
	  <input type="checkbox" id="f1" value="0" onchange="disable_check_f1(this)"> Opcion 1
	</label>
	<label class="checkbox-inline">
	  <input type="checkbox" id="f2" value="1" onchange="disable_check_f2(this)">Opcion 2
	</label>
	<button onclick="check_f( )">Inicia Marcar opcion con value 1 </button>

	<h2>Check / Disable ambos</h2>
	<label class="checkbox-inline">
	  <input type="checkbox" id="g1" value="1" onchange="disable_check_g1(this)"> Opcion 1
	</label>
	<label class="checkbox-inline">
	  <input type="checkbox" id="g2" value="1" onchange="disable_check_g2(this)">Opcion 2
	</label>
	<button onclick="check_g( )">Inicia Marcando ambos 1 </button>
	

</body>
</html>
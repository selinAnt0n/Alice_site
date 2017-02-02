function showValues() {
	var fields = $( ".calculation :input" ).serializeArray(),
	sum = 0,				    
	count = 0;
	$( "#results" ).empty();
	jQuery.each( fields, function( i, field ) {
		count++;
		if ( count <= fields.length) {
			$( "#results" ).append( " + " + field.value + " грн" + "</br>");
		}
		
		if ( $( "select" ).change && field.name == "multiple") {
			sum += field.value * $( "#selet-weight" ).val();
		}
		else {
			sum += +fields[i].value;
		}
	});
	$( "#results" ).append( " Результат " + sum );
}
$( ":checkbox, :radio" ).click( showValues );
$( "select" ).change( showValues );
showValues();

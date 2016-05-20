$('#kat_select').change(function() {
	var wartosc = $('#kat_select').val();
  $.ajax({                                      
      url: 'includes/acp/dodawanie_produktow_ajax.php',                  
      data: { kategoria: this.value },                  
      type: "POST",
      dataType: 'json',                  
      success: function(data)         
      {
        var id = data.id;              
        var nazwa = data.nazwa;          
        var ilosc = data.ilosc;   
        var id_razem = data.id_razem;   
        var nazwa_razem = data.nazwa_razem;   
		var ilosc_razem = data.ilosc_razem;
		
		$("#pola_atrybuty").html("")
		$('#select_atrybuty').empty();
		
		for (var i=0;i<ilosc_razem;i++) {
			$("#select_atrybuty").append('<option value="'+id_razem[i]+'">'+nazwa_razem[i]+'</option>');
		}
		$("#select_atrybuty").append('<option value="0">Inne</option>');
		$("#select_atrybuty option[value='"+wartosc+"']").remove();
		
		if (id=='undefined') {
			KasujCheckbox();
		}
		
	
		KasujCheckbox();
		for (var i=0;i<ilosc;i++) {
		dodajCheckbox(id[i],nazwa[i]);
		}

      } 
    });
});


$('#inne_atrybuty').click(function() {
var pole = $('#select_atrybuty').val();
$("#select_atrybuty option[value='"+pole+"']").remove();
  $.ajax({                                      
      url: 'includes/acp/dodawanie_produktow_ajax.php',                  
      data: { kategoria: pole },                  
      type: "POST",
      dataType: 'json',                  
      success: function(data)         
      {
        var id = data.id;              
        var nazwa = data.nazwa;          
        var ilosc = data.ilosc;            

		if (id=='undefined') {
			return
		}

		for (var i=0;i<ilosc;i++) {
		dodajCheckbox(id[i],nazwa[i]);
		}

      } 
    });
});


$('#uzupelnij_atrybuty').click(function() {
	$("#pola_atrybuty").html("")
$('input[id="checkbox_atrybuty"]:checked').each(function() {
	var value = $(this).val();
	var nazwa = $(this).attr("class")
	var zawartosc = $("#pola_atrybuty").html()
$("#pola_atrybuty").html(zawartosc + "<input style='width:160px; margin-left:20px;' id='"+value+"' class='atrybut_pole form-control' name='atrybuty[]' placeholder='"+nazwa+"' type='text' /><br/>")

});
});
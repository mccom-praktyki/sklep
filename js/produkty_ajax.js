$('#kat_select').change(function() {
	var wartosc = document.getElementById("kat_select").value;
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
var pole = document.getElementById("select_atrybuty").value;
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














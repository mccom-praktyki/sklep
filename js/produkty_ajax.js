$('#kat_select').change(function() {
  $.ajax({                                      
      url: 'includes/acp/dodawanie_produktow_ajax.php',                  
      data: { kategoria: this.value },                  
      type: "POST",
      dataType: 'json',                  
      success: function(data)         
      {
        var id = data[0];              
        var nazwa = data[1];          
        var ilosc = data[2];          

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
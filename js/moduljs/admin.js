$(document).ready(function (e) {
	
    // function general
	
	$('#datatable-buttons').dataTable({
	 dom: 'T<"clear">lfrtip',
		tableTools: {"sSwfPath": site}
	 });
	
	load_data();  
	
	// batas dtatable
	
	// fungsi jquery update
	$(document).on('click','.text-primary',function(e)
	{	
		e.preventDefault();
		var element = $(this);
		var del_id = element.attr("id");
		var url = sites_get +"/"+ del_id;
		
		$("#myModal2").modal('show');
		$.post(url,
			{id:$(this).attr('data-id')},
			function(result)
			{
			   res = result.split("|");
				
			   $("#tid_update").val(res[0]);
			   $("#tusername_update").val(res[1]);
			   $("#tname_update").val(res[2]);
			   $("#taddress_update").val(res[3]);
			   $("#tphone_update").val(res[4]);
			   $('#ccity_update').val(res[5]).change();
			   $("#tmail_update").val(res[6]);
			   $('#crole_update').val(res[7]).change();
			   $('#cdppa_update').val(res[9]).change();
			   
			   
			   // rstatus
			   if (res[8] == 1){ $("#rstatus1").prop( "checked", true );  }
			   else { $("#rstatus0").prop( "checked", true ); }
			}   
		);
		
	});
		
// document ready end	
});

    // fungsi load data
	function load_data()
	{
		$(document).ready(function (e) {
			
			var oTable = $('#datatable-buttons').dataTable();
			
		    $.ajax({
				type : 'GET',
				url: source,
				//force to handle it as text
				contentType: "application/json",
				dataType: "json",
				success: function(s) 
				{   
				       console.log(s);
					  						oTable.fnClearTable();						$(".chkselect").remove()
			$("#chkbox").append('<input type="checkbox" name="newsletter" value="accept1" onclick="cekall('+s.length+')" id="chkselect" class="chkselect">');														for(var i = 0; i < s.length; i++) {						  oTable.fnAddData([
'<input type="checkbox" name="cek[]" value="'+s[i][0]+'" id="cek'+i+'" style="margin:0px"  />',										i+1,										s[i][1],										s[i][7],										s[i][9],										s[i][10],
										s[i][12],
'<a href="" class="text-primary" id="' +s[i][0]+ '" title=""> <i class="fa fas-2x fa-edit"> </i> </a> <a href="#" class="text-danger" id="'+s[i][0]+'" title="delete"> <i class="fa fas-2x fa-trash"> </i> </a>'										    ]);																					} // End For 
											
				},
				error: function(e){
				   oTable.fnClearTable();  
				   //console.log(e.responseText);	
				}
				
			});  // end document ready	
			
        });
	}
	
	// batas fungsi load data
	function resets()
	{  
	   $(document).ready(function (e) {
		  // reset form
		  $("#tname, #tmail, #tusername, #tpassword, #ccity, #tphone, #crole, #rstatus, #taddress").val("");
	  });
	}
	
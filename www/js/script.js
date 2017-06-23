$(document).ready(function(){
	var url ="https://snarled-wafers.000webhostapp.com/phonegap/";
		$.ajax({
			  type:'GET',
	          url:url,
	          success:function(data){
	              $('#results').html(data);
	            }

	    });
	});

$('#click_btn').click(function(){
   
});

	var cart = [];
		$('.add-to-cart').click(function() {
			var pid = $(this).attr("id");
		//	console.log(pid);
			 $.ajax({
					  type: "POST",
					  url: "ajax.php",
					  data: { pid: pid ,action: 'add'},
					  dataType:"JSON"
					}).done(function( data ) {
				//	console.log(data);
			 		$('#cart-list').html(showCart(data));
					}); 
		});


		$('body').on('click','.remove',function(){
			var pid = $(this).attr("id");
			var action = $(this).attr("action");
				console.log($(this).attr("id"));
				$.ajax({
					type: "POST",
					url : "ajax.php",
					data : {pid: pid , action: 'remove' },
					dataType: "JSON"
				}).done(function(data){
					$('#cart-list').html(showCart(data));
				});
		});


function showCart(data){

		//console.log('executed');
		//console.log(cart1+"show cart");	
		var p_table="";
		var total = 0;
		var i=0;
		p_table+="<table id ='table-list'><tr><th>Product Id</th><th>Product Image</th>\
		<th>Product Name</th><th>Product Price</th>\
		<th>Product Quantity</th><th>Remove</tr>";
		for( i = 0; i < data.length;i++)
		{
          p_table +="<tr><td id='values'>"+data[i].id+"</td>\
		  <td id='values'><img src='images/"+data[i].img+"' style= width:20px height:20px></td>\
          <td id='values'>"+data[i].name+"</td>\
          <td id='values' id='price-field'>"+data[i].price+"</td>\
          <td id ='values' id ='quant-field'>"+data[i].quant+"</td>\
          <td><a href = '#' class = 'remove' id ='"+data[i].id+"'>X</a></td></tr>";
          total = total + (data[i].price * data[i].quant);
          
		}
		p_table += "<tr><td colspan = '3'>Total Cost</td><td colspan = '3' id='values' >"+total+"</td></tr></table>";
		//console.log(p_table);
		document.getElementById("cart-list").innerHTML= p_table;

}











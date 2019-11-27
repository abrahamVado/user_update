		$(function() {
			load(1);
		});
		function load(page){
			var query=$("#q").val();
			var per_page=10;
			var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax_card/listar_productos.php',
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando resultados...");
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}
		$('#editProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  
		  var year_card = button.data('year_card') 
		  $('#edit_year_card').val(year_card)

		  var month_year = button.data('month_year') 
		  $('#edit_month_year').val(month_year)

		  var value_card = button.data('value_card') 
		  $('#edit_value_card').val(value_card)

		  var avg_card = button.data('avg_card') 
		  $('#edit_avg_card').val(avg_card)
		  
		  
		  var id = button.data('id') 
		  $('#edit_id').val(id)
		})
		
		$('#deleteProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') 
		  $('#delete_id').val(id)
		})
		
		
		$( "#edit_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax_card/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#editProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		  
		});
		
		
		$( "#add_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax_card/guardar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					  success: function(data){
						Swal.fire({
									'title': '¡Gracias!',
									'text': data,
									'type': 'success'
									})
								
						
					$('#editProductModal').modal('hide');
				  $('#add_product')[0].reset();
				  }
			});
		  event.preventDefault();
		 
		});
		
		$( "#delete_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax_card/eliminar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(data){
						Swal.fire({
							'title': 'Éxito!',
							'text': data,
							'type': 'success'
							})
					$('#deleteProductModal').modal('hide');
					

				  }
			});
		  event.preventDefault();

		  setTimeout(function() { window.location=window.location;},3000);

		});

		
function addToCart(id){
	console.log('add' + id);
	$.ajax( {
		async: false,
		type: "POST",
		url: "../vendor/cart.php",
		dataType:"text",
		data: 'action=add&id=' + id,
		error: function() {
			alert("не смог");
		},
		success: function (response) {
			alert('Добавили' + id);
		}
	});
}

// $('.button').click(function() {
//   $.ajax({
//     type: "POST",
//     url: "../vendor/cart.php",
//     data: 'id=' + id
//   }).done(function( msg ) {
//     alert('Добавили' + id);
//   });
// });

// $(document).ready(function() {
// 	$('.button').click(function() {
// 		var clickBtnValue = $(this).val();
// 		var ajaxurl = '../vendor/cart.php',
// 		data = {'action': clickBtnValue};
// 		$.post(ajaxurl, data, function (responce) {
// 			alert(ajaxurl + data['action']);
// 		});

// 	});
// });


// $(document).ready(function() {
// 	$('#ATC').click(function(e) {
// 		e.preventDefault();
// 		$.ajax({
// 			type: 'POST',
// 			url: '../vendor/cart.php',
// 			data: $(this).serialize(),
// 			success: function(responce) {
// 				alert(responce);
// 			}
// 		}
// 		);
// 	})
// })

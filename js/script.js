$(document).ready(function(){
	$('.btn_del').on('click', function(){
		var mem_id = $(this).attr('id');
		$("#modal_confirm").modal('show');
		$('#btn_yes').attr('name', mem_id);
	});
	$('#btn_yes').on('click', function(){
		var id = $(this).attr('name');
		$.ajax({
			type: "POST",
			url: "delete_member.php",
			data:{
				mem_id: id
			},
			success: function(){
				$("#modal_confirm").modal('hide');
				$(".del_mem" + id).empty();
				$(".del_mem" + id).html("<td colspan='6'><center>Deleting...</center></td>");
				setTimeout(function(){
					$(".del_mem" + id).fadeOut('slow');
				}, 1000);
			}
		});
	});
});
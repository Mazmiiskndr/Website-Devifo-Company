<?php 

function is_logged_in()
{
	$ci = get_instance();
	if(!$ci->session->userdata('username')){
		echo "<script> confirm('Anda Belum Login! <br> Login?'); </script>";
		redirect('');
	}
}

function is_logged_in_home()
{
	$ci = get_instance();
	if(!$ci->session->userdata('username')){
		echo "<script> confirm('Anda Belum Login! <br> Login?'); </script>";
		$ci->session->set_flashdata('pesan','
				<div style="color: cyan;" class="alert alert-info alert-dismissible fade show" role="alert">
  					Login/Register Untuk <strong>Checkout!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('auth/login');
	}
}

?>
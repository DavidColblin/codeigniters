<?php $this->load->view('templates/header'); ?>

<?php 
echo "<div id='container'>$data</div>"; 
$this->load->helper('form');


echo form_open('templatetest/form');
		$inputAttributes = array( 'id' => 'name' , 'name' => 'name');
echo	form_input($inputAttributes, 'Enter Your name');
		$submitAttributes = array( 'id' => 'submitBtn', 'name' => 'submitBtn');
echo	form_submit($submitAttributes, 'Post it');
echo form_close();

?>

	<script type="text/javascript">
	
	$(document).ready(function(){
		$('#submitBtn').click(function(){
			
				var data_form = {
					name : $('#name').val();
				};
				
				$.ajax({
				   type: "POST",
				   url: "<?php echo site_url(); ?>/templatetest/ajax",
				   data: data_form,
				   success: function(msg){
					 $('#container').html(msg);
					}
				});
		 return false;	 
		});
	});
	</script>

<?php $this->load->view('templates/footer'); ?>

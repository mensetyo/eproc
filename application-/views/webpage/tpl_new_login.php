
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Form Login e-Procurement</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
* { font: 11px/20px Verdana, sans-serif; }
h4 { font-size: 18px; }
input,select,checkbox { padding: 3px; border: 1px solid #999; }
input.error, select.error,textarea.error, checkbox.error { border: 1px solid red; }
label.error { color:red; margin-left: 10px; }
td { padding: 5px; }
</style>
</head>


        <script src="<?php echo base_url('assets');?>/jquery.min.js"></script>

  <script src="<?php echo base_url('assets');?>/jquery.maskedinput.js"></script>
 <!-- <script src="<?php// echo base_url('assets');?>/validasi/jquery-1.11.1.min.js"></script>-->

        <script>
        jQuery(function($){
           // $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#npwp").mask("99-999-999-9-999-999");
        });
        </script>

		<script src="<?php echo base_url('assets');?>/validasi/jquery.validate.min.js"></script>
	<script src="<?php echo base_url('assets');?>/validasi/additional-methods.min.js"></script>
    <script>


function convertToRupiah(angka)
{
	var rupiah = '';
	var angkarev = angka.toString().split('').reverse().join('');
	for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
	return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
}

function convertToAngka(rupiah)
{
	return parseInt(rupiah.replace(/[^0-9]/g, ''), 10);
}


   function run() {
       var x= document.getElementById("Ultra").value;
           document.getElementById("srt").value =(convertToRupiah( Math.ceil(500000/x)));
           document.getElementById("nil_cicilan").value=Math.ceil(500000/x);
    }

        </script>
<body>
<!-- Modal -->

	<table align="">
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="100" colspan="1"><img src="http://jmto.co.id/assets/img/logo/logo.png" width="230" height="50"></td>
			<td>&nbsp;</td>
			</tr>
		</table>

<table border="0">
<tr>
<td>

									<?php if ($this->session->flashdata('after_save')) {?>

						  <div id="errormessage">	<div class="alert alert-info"><?php echo $this->session->flashdata('after_save');?></div>
  </div>
					<?php }?>



<form id="alumniForm"  action="<?php echo base_url('backend/login_proses');?>" method="post" >
    <table align="left" border="0">
			<tr>
                            <td width="100" colspan="3" align="center"><h4>Halaman Login JMTO e Procurement</h4></td>
		</tr>
            <tr>
                <td width="100" colspan="3">Silahkan masukkan User ID dan Password anda :</td>
            </tr>


         <tr>
                     <td>&nbsp;</td>
			<td> User ID*</td>
			<td>
                            <input name="user_id" class="required" title="" size="40" type="text" />
			</td>
		</tr>




		<tr>
                     <td>&nbsp;</td>
			<td>Password *</td>
			<td>
                            <input name="password" id="pass" class="required" title="" size="40" type="password" />
			</td>
		</tr>






		<tr>
           <td>&nbsp;</td>

		</tr>

		<tr>
			<td></td>
			<td>
				<input type="submit" value="Submit" />

			</td>
                        <td></td>
		</tr>
	</table>
	</td>
	<td valign="top">&nbsp;
	</td>
	<td valign="top" width="520px">
	<br/>
	<!--<iframe src="<?php echo base_url('webpage/aturan_kondisi');?>" height="400" width="520" style="border:none;"></iframe><br/>-->

	</td>
	</tr>

	</table>
</form>
</body>



<!--<script type="text/javascript" src="jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="jquery.validate.pack.js"></script>-->
<script type="text/javascript">
$(document).ready(function() {
	$("#alumniForm").validate({

		messages: {
			  user_id: "Wajib di isi",
			  password: "Wajib di isi",
			  secutity_code: "Wajib di isi",

		},
		errorPlacement: function(error, element) {
			error.appendTo(element.parent("td"));
		}
	});
})
</script>




</html>

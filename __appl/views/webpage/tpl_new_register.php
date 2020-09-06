
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Form Pendaftaran E-procurement</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>


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
  <!--<script src="<?php echo base_url('assets');?>/jquery.maskedinput.js"></script>-->
 <!-- <script src="<?php// echo base_url('assets');?>/validasi/jquery-1.11.1.min.js"></script>-->
        <script>
     function PopupCenter(url, title, w, h) {
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}
		
		



        </script>

		<script src="<?php echo base_url('assets');?>/validasi/jquery.validate.min.js"></script>
	<script src="<?php echo base_url('assets');?>/validasi/additional-methods.min.js"></script>

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

	<?php if ($this->session->flashdata('success')) {?>

										<div class="alert alert-info" id="success-alert">
										  <strong>Informasi !</strong> <?php echo $this->session->flashdata('success');?>
										</div>

				<?php }?>



<form id="alumniForm"  action="<?php echo base_url('backend/daftar_proses');?>" method="post" enctype="multipart/form-data">
    <table align="left" border="0">
			<tr>
                            <td width="100" colspan="3" align="center"><h4>Pra Pendaftaran Rekanan</h4></td>
		</tr>
            <tr>
                <td width="100" colspan="3">Silahkan isi data berikut untuk memulai proses pendaftaran :</td>
            </tr>
			

		
		
		<tr>
                    <td width="100">&nbsp;</td>
			<td width="250">1. Bentuk Perusahaan *</td>
			<td>
                               <select  id="tipe_perusahaan" name="tipe_perusahaan" class="required" title=""  />
                                                               <option value="">-- Pilih  --</option>
															   <?php
															   $query = $this->db->query("select * from drt_tipe_perusahaan");

																foreach ($query->result() as $row)
																{

															   ?>
                                                                <option value="<?php echo $row->id;?>"><?php echo $row->tipe_perusahaan;?></option>
                                                               <?php
																	}
																	?>
                                                        </select>
			</td>

		</tr>

                <tr>
                     <td>&nbsp;</td>
			<td>3. Nama Perusahaan/Individu *</td>
			<td>
                       <input name="nama_perusahaan" class="required" title="" size="40" type="text" />
			</td>
		</tr>
       

		<tr>
                     <td>&nbsp;</td>
			<td>3. Telephone *</td>
			<td>
                 <input name="tlp" id="tlp" class="required" title="" size="40" type="text" />
			</td>
		</tr>

		<tr>
                     <td>&nbsp;</td>
			<td>4. Email *</td>
			<td>
                 <input name="email" id="email" class="required" title="" size="40" type="text" />
			</td>
		</tr>
		
		<tr>
                     <td>&nbsp;</td>
			<td>5. KTP Pemilik *</td>
			<td>
                  <input name="ktp" id="ktp" class="required" title="" size="40" type="file" />
			</td>
		</tr>
		
			<tr>
                     <td>&nbsp;</td>
			<td>6. SIUP *</td>
			<td>
                  <input name="siup" id="siup" class="required" title="" size="40" type="file" />
			</td>
		</tr>
		
			<tr>
                     <td>&nbsp;</td>
			<td>7. TDP *</td>
			<td>
                  <input name="tdp" id="tdp" class="required" title="" size="40" type="file" />
			</td>
		</tr>
		<tr>
                     <td>&nbsp;</td>
			<td>8. NPWP *</td>
			<td>
                   <input name="npwp" id="npwp" class="required" title="" size="40" type="file" />
			</td>
		</tr>
				<tr>
                    <td width="100">&nbsp;</td>
			<td width="250">9. Mendaftar sebagai Penyedia  *</td>
			<td>
			   <?php
															   $query = $this->db->query("select * from drt_ijin_usaha_klasifikasi");

																foreach ($query->result() as $row)
																{

															   ?>
			 <input type="checkbox" class="required" name="klasifikasi[]" id="klasifikasi" value="<?php echo $row->id;?>"> <?php echo $row->klasifikasi;?>
            <?php 
																}
																?>
																&nbsp;&nbsp;<a href="#" onclick="PopupCenter('<?php echo base_url('webpage/keterangan');?>','xtf','900','300');">[Keterangan]</a>
			</td>

		</tr>

	<tr>
            <td>&nbsp;</td>
			<td colspan="2">Pastikan Email yang anda masukkan valid dan aktif, karena kami akan menghubungi anda melalui via email.
			</td>
			
		</tr>










		<tr>
                     <td>&nbsp;</td>

		</tr>

		<tr>
			<td></td>
			<td>
				<input type="submit" value="Submit" />
				<input type="reset" value="Reset" />
			</td>
                        <td></td>
		</tr>
	</table>
	</td>

	</tr>

	</table>
	<!--  <div class="g-recaptcha" data-sitekey="6Lea-VcUAAAAAJKmnHhbwSuQGHyEK58d-1qPgqyQ"></div>-->
	
</form>
</body>



<!--<script type="text/javascript" src="jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="jquery.validate.pack.js"></script>-->
<script type="text/javascript">
$(document).ready(function() {
	$("#alumniForm").validate({
		rules: {
    klasifikasi: "required",
	nama_perusahaan: "required",
	tlp: "required",
	siup: {
        required: true,
        //accept: "image/jpeg, image/pjpeg",
		extension: "pdf"
    },
	ktp: {
        required: true,
		extension: "pdf"
    },
	tdp: {
        required: true,
		extension: "pdf"
    },
	npwp: {
        required: true,
		extension: "pdf"
    },
	email: {
      required: true,
      email: true
    }
	},
		messages: {
			  klasifikasi: "Wajib di checklist",
			  tipe_perusahaan: "Wajib di Pilih",
			  nama_perusahaan: "Wajib di isi",
			  tlp: "Wajib di isi",
			  alamat: "Wajib di isi",
			 // nama_lengkap: "Wajib di isi",
			 // setuju: "Wajib di isi",
			   siup:{
					required:"Wajib di upload",                  
					extension:"Masukkan format file pdf"
				},
			 ktp:{
					required:"Wajib di upload",                  
					extension:"Masukkan format file pdf"
				},
			  tdp:{
					required:"Wajib di upload",                  
					extension:"Masukkan format file pdf"
				},
			 // npwp: "Wajib di isi",
			   npwp:{
					required:"Wajib di upload",                  
					extension:"Masukkan format file pdf"
				},
			email: {
				required: "Wajib di isi",
				email: "Masukkan E-mail yang valid"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo(element.parent("td"));
		}
	});
})
</script>




</html>


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



<form id="alumniForm"  action="<?php echo base_url('backend/register_proses');?>" method="post" enctype="multipart/form-data">
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
			<td>2. Nama Perusahaan/Individu *</td>
			<td>
                            <input name="nama_perusahaan" class="required" title="" size="40" type="text" />
			</td>
		</tr>
            	<tr>
                     <td>&nbsp;</td>
			<td>3. NPWP *</td>
			<td>
                            <input name="npwp" id="npwp" class="required" title="" size="40" type="text" />
			</td>
		</tr>

		<tr>
                     <td>&nbsp;</td>
			<td>4. Alamat *</td>
			<td>
			<textarea name="alamat" class="required" title="" cols="40" type="text"></textarea>
				<!--<input name="nama" class="required" title="Nama lengkap harus diisi" size="40" type="text" />-->
			</td>
		</tr>
		
			<tr>
                       <td>&nbsp;</td>
			<td>5. Propinsi *</td>
			<td>

				<select  id="propinsi" name="propinsi" class="required" title=""  />
                                                               <option value="">-- Pilih  --</option>
															   <?php
															   $query = $this->db->query("select * from provinces");

																foreach ($query->result() as $row)
																{

															   ?>
                                                                <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                                               <?php
															     }
															   ?>
                </select>


			</td>
		</tr>
		

		<tr>
                       <td>&nbsp;</td>
			<td> Kabupaten/Kota *</td>
			<td>

				<select  id="kota" name="kota" class="required" title=""  />
                                                               <option value="">-- Pilih  --</option>
															   <?php
															   $query = $this->db->query("select * from regencies");

																foreach ($query->result() as $row)
																{

															   ?>
                                                                <option value="<?php echo $row->id;?>" class="<?php echo $row->province_id ?>" ><?php echo $row->name;?></option>
                                                               <?php
																	}
																	?>
                </select>


			</td>
		</tr>
		<!--<tr>
		 <td>&nbsp;</td>
                    <td>Setujui</td>
			<td>
				<input type="checkbox" name="setuju" class="required" value=""> <a href="#" data-toggle="modal" data-target="#myModal">Syarat Ketentuan </a>
			</td>
		</tr>-->
            <tr>
                <td width="100" colspan="3">Isilah User ID dan Password yang nanti akan digunakan pada saat login, gunakan nama yang mudah di ingat. :

                </td>
            </tr>

         <tr>
                     <td>&nbsp;</td>
			<td>6. User ID *</td>
			<td>
                            <input name="user_id" class="required" title="" size="40" type="text" />
			</td>
		</tr>

		<tr>
                     <td>&nbsp;</td>
			<td>7. Nama Lengkap User *</td>
			<td>
                            <input name="nama_lengkap" class="required" title="" size="40" type="text" />
			</td>
		</tr>

		<tr>
                     <td>&nbsp;</td>
			<td>8. Password *</td>
			<td>
                            <input name="pass" id="pass" class="required" title="" size="40" type="password" />
			</td>
		</tr>

			<tr>
                     <td>&nbsp;</td>
			<td>9. Konfirmasi Password *</td>
			<td>
                            <input name="pass2" id="pass2" class="required" title="" size="40" type="password" />
			</td>
		</tr>

				<tr>
                     <td>&nbsp;</td>
			<td>10. Email *</td>
			<td>
                            <input name="email" id="email" class="required" title="" size="40" type="text" />
			</td>
		</tr>

		<tr>
                     <td>&nbsp;</td>
			<td>11. Konfirmasi Email *</td>
			<td>
                            <input name="email2" id="email2" class="required" title="" size="40" type="text" />
			</td>
		</tr>

	<tr>
                     <td>&nbsp;</td>
			<td colspan="2">Setelah mengisi konfirmasi email, klik dalam kotak "i'm not a robot" sampai berwarna hijau setelah itu klik tombol "submit"
			setelah itu silahkan cek email anda.
			</td>
			
		</tr>



                  <tr>
				     <td>&nbsp;</td>
                     <td>&nbsp; </td>
					 	<td>
					 	
                          <p><?//php echo ($img); ?>
             
                        <? echo $this->recaptcha->render(); ?>
                          </p>
					</td>

		</tr>

             <!--    <tr>
				     <td>&nbsp;</td>
                     <td>&nbsp; Masukkan Kode   </td>
					 	<td>
                            <input name="secutity_code" id="secutity_code" class="required" title="" size="40" type="text" />
			</td>

		</tr>-->




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
	<td valign="top">12. Aturan dan Kondisi
	</td>
	<td valign="top" width="520px">
	<br/>
	<iframe src="<?php echo base_url('webpage/aturan_kondisi');?>" height="600" width="520" style="border:none;" scrolling="yes"></iframe><br/>
	<input type="checkbox" id="setuju" name="setuju" class="required" required> Saya setuju dengan kondisi dan aturan di atas

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
    pass: "required",
    pass2: {
      equalTo: "#pass"
		},
	email: {
      required: true,
      email: true
    },
    email2: {
      equalTo: "#email"
		}
	},
		messages: {
			  nama_perusahaan: "Wajib di isi",
			  npwp: "Wajib di isi",
			  kota: "Wajib di isi",
			  tipe_perusahaan: "Wajib di isi",
			  secutity_code: "Wajib di isi",
			 // pass2: "Wajib di isi sama dengan password field sebelum nya",
			  alamat: "Wajib di isi",
			  user_id: "Wajib di isi",
			  nama_lengkap: "Wajib di isi",
			  pass: "Wajib di isi",
			  setuju: "Wajib di isi",
			//  pass2: "Wajib di isi",
			 // email2: "Wajib di isi",
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

 <!--   <script src="<?php echo base_url('assets/jquery-1.10.2.min.js') ?>"></script>-->
  <script src="<?php echo base_url('assets/jquery.chained.min.js') ?>"></script>
        <script>
            $("#kota").chained("#propinsi"); // disini kita hubungkan kota dengan provinsi
            //$("#kecamatan").chained("#kota"); // disini kita hubungkan kecamatan dengan kota
        </script>


</html>

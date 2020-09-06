            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
	
                    <li class="xn-logo">
                       <a href="#">JMTO Eproc</a>
                        <a href="#" class="x-navigation-control"></a>

                    </li>
					
					<li class="">
                        <a href="#"><span class="xn-text">&nbsp;</span></a>
                    </li>
					
					  <li>
                        <a href="<?php echo base_url('dashboard');?>"> <span class="xn-text">Home</span></a>
                    </li>
					
					
					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_akta');
					$num_drt_akta = $query->num_rows();

					if($num_drt_akta>=1){
						$flag_drt_akta="Flag1-green-icon.png";
					}else{
						$flag_drt_akta="Flag1-orange-icon.png";
					}
					?>



					<li class="<?php echo $this->uri->segment(1)=='akta'?'active':'';?>">
                        <a href="<?php echo base_url('akta');?>"> <span class="xn-text">Akta <img src="<?php echo base_url('assets/img/'.$flag_drt_akta);?>"> </span></a>
                    </li>
					
					
					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					//$this->db->where('status_delete',0);
					$query = $this->db->get('drt_tdp');
					$num_drt_tdp = $query->num_rows();

					if($num_drt_tdp>=1){
						$flag_tdp="Flag1-green-icon.png";
					}else{
					    $flag_tdp="Flag1-orange-icon.png";
					}
					?>
					
					
					<li class="<?php echo $this->uri->segment(1)=='tdp'?'active':'';?>">
                        <a href="<?php echo base_url('tdp');?>"> <span class="xn-text">TDP <img src="<?php echo base_url('assets/img/'.$flag_tdp);?>"></span></a>
                    </li>
					
					
					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					//$this->db->where('status_delete',0);
					$query = $this->db->get('drt_domisili');
					$num_drt_domisili = $query->num_rows();

					if($num_drt_domisili>=1){
						$flag_domisili="Flag1-green-icon.png";
					}else{
					    $flag_domisili="Flag1-orange-icon.png";
					}
					?>
					
					
					<li class="<?php echo $this->uri->segment(1)=='ijin_domisili'?'active':'';?>">
                        <a href="<?php echo base_url('ijin_domisili');?>"> <span class="xn-text"> Domisili <img src="<?php echo base_url('assets/img/'.$flag_domisili);?>"></span></a>
                    </li>
					
					
				    <?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_ijin_usaha');
					$num_drt_ijin_usaha = $query->num_rows();

					if($num_drt_ijin_usaha>=1){
						$flag_drt_ijin_usaha="Flag1-green-icon.png";
					}else{
						$flag_drt_ijin_usaha="Flag1-orange-icon.png";
					}
					?>


				    <li class="<?php echo $this->uri->segment(1)=='ijin_usaha'?'active':'';?>">
                        <a href="<?php echo base_url('ijin_usaha');?>"> <span class="xn-text">Ijin Usaha <img src="<?php echo base_url('assets/img/'.$flag_drt_ijin_usaha);?>"> </span></a>
                    </li>

					
					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					//$this->db->where('status_delete',0);
					$query = $this->db->get('drt_sbu');
					$num_drt_sbu = $query->num_rows();

					if($num_drt_sbu>=1){
						$flag_drt_sbu="Flag1-green-icon.png";
					}else{
					    $flag_drt_sbu="Flag1-orange-icon.png";
					}
					?>
					
					<li class="<?php echo $this->uri->segment(1)=='sbu'?'active':'';?>">
                        <a href="<?php echo base_url('sbu');?>"> <span class="xn-text">SBU <img src="<?php echo base_url('assets/img/'.$flag_drt_sbu);?>"></span></a>
                    </li>
					
					
					
                    <?php
                    $this->db->select('id');
                    $this->db->where('id_peserta',$this->session->userdata('id_peserta'));
                    $query = $this->db->get('drt_soft_copy');
                    $num_drt_data_upload = $query->num_rows();

                    if($num_drt_data_upload==1){
                      $flag_data_upload="Flag1-green-icon.png";
                    }else{
                      $flag_data_upload="Flag1-orange-icon.png";
                    }
                    ?>


					<li class="<?php echo $this->uri->segment(1)=='download_upload'?'active':'';?>">
                        <a href="<?php echo base_url('download_upload');?>"> <span class="xn-text"> Upload Dokumen   <img src="<?php echo base_url('assets/img/'.$flag_data_upload);?>"> </span></a>
                    </li>

					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$query = $this->db->get('drt_data_perusahaan');
					$num_drt_data_perusahaan = $query->num_rows();

					if($num_drt_data_perusahaan==1){
						$flag_data_perusahaan="Flag1-green-icon.png";
					}else{
						$flag_data_perusahaan="Flag1-orange-icon.png";
					}
					?>

                    <li class="<?php echo $this->uri->segment(1)=='data_perusahaan'?'active':'';?>">
                        <a href="<?php echo base_url('data_perusahaan');?>"> <span class="xn-text">Data Perusahaan <img src="<?php echo base_url('assets/img/'.$flag_data_perusahaan);?>"> </span></a>
                    </li>
					<div id="menu">

			


					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_pajak');
					$num_drt_pajak = $query->num_rows();

					if($num_drt_pajak>=1){
						$flag_drt_pajak="Flag1-green-icon.png";
					}else{
						$flag_drt_pajak="Flag1-orange-icon.png";
					}
					?>
					

					<li class="<?php echo $this->uri->segment(1)=='pajak'?'active':'';?>">
                        <a href="<?php echo base_url('pajak');?>"> <span class="xn-text">Pajak <img src="<?php echo base_url('assets/img/'.$flag_drt_pajak);?>"> </span></a>
                    </li>

		

					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_pemilik');
					$num_drt_pemilik = $query->num_rows();

					if($num_drt_pemilik>=1){
						$flag_drt_pemilik="Flag1-green-icon.png";
					}else{
						$flag_drt_pemilik="Flag1-orange-icon.png";
					}
					?>
					<!-- <li class="<?php echo $this->uri->segment(1)=='pemilik'?'active':'';?>">
                        <a href="<?php echo base_url('pemilik');?>"> <span class="xn-text">Pemilik <img src="<?php echo base_url('assets/img/'.$flag_drt_pemilik);?>"> </span></a>
                    </li>-->


					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_pengurus');
					$num_drt_pengurus = $query->num_rows();

					if($num_drt_pengurus>=1){
						$flag_drt_pengurus="Flag1-green-icon.png";
					}else{
						$flag_drt_pengurus="Flag1-orange-icon.png";
					}
					?>
					<li class="<?php echo $this->uri->segment(1)=='pengurus'?'active':'';?>">
                        <a href="<?php echo base_url('pengurus');?>"> <span class="xn-text">Pengurus  <img src="<?php echo base_url('assets/img/'.$flag_drt_pengurus);?>"> </span></a>
                    </li>

					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_tenaga_ahli');
					$num_drt_tenaga_ahli = $query->num_rows();

					if($num_drt_tenaga_ahli>=1){
						$flag_drt_tenaga_ahli="Flag1-green-icon.png";
					}else{
						$flag_drt_tenaga_ahli="Flag1-orange-icon.png";
					}
					?>
					<li class="<?php echo $this->uri->segment(1)=='tenaga_ahli'?'active':'';?>">
                        <a href="<?php echo base_url('tenaga_ahli');?>"> <span class="xn-text">Tenaga Ahli <img src="<?php echo base_url('assets/img/'.$flag_drt_tenaga_ahli);?>"> </span></a>
                    </li>

					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_peralatan');
					$num_drt_peralatan = $query->num_rows();

					if($num_drt_peralatan>=1){
						$flag_drt_peralatan="Flag1-green-icon.png";
					}else{
						$flag_drt_peralatan="Flag1-orange-icon.png";
					}
					?>

					<li class="<?php echo $this->uri->segment(1)=='peralatan'?'active':'';?>">
                        <a href="<?php echo base_url('peralatan');?>"> <span class="xn-text">Peralatan <img src="<?php echo base_url('assets/img/'.$flag_drt_peralatan);?>"> </span></a>
                    </li>

					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_pengalaman');
					$num_drt_pengalaman = $query->num_rows();

					if($num_drt_pengalaman>=1){
						$flag_drt_pengalaman="Flag1-green-icon.png";
					}else{
						$flag_drt_pengalaman="Flag1-orange-icon.png";
					}
					?>

					<li class="<?php echo $this->uri->segment(1)=='pengalaman'?'active':'';?>">
                        <a href="<?php echo base_url('pengalaman');?>"> <span class="xn-text">Pengalaman <img src="<?php echo base_url('assets/img/'.$flag_drt_pengalaman);?>"> </span></a>
                    </li>


					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_pekerjaan_on_going');
					$num_drt_pekerjaan_on_going = $query->num_rows();

					if($num_drt_pekerjaan_on_going>=1){
						$flag_drt_pekerjaan_on_going="Flag1-green-icon.png";
					}else{
						$flag_drt_pekerjaan_on_going="Flag1-orange-icon.png";
					}
					?>


					<li class="<?php echo $this->uri->segment(1)=='on_going'?'active':'';?>">
                        <a href="<?php echo base_url('on_going');?>"> <span class="xn-text">Pekerjaan  Berjalan <img src="<?php echo base_url('assets/img/'.$flag_drt_pekerjaan_on_going);?>"></span></a>
                    </li>

					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_lapkeu_pasiva_aktiva');
					$num_drt_lapkeu_pasiva_aktiva = $query->num_rows();

					if($num_drt_lapkeu_pasiva_aktiva>=1){
						$flag_drt_lapkeu_pasiva_aktiva="Flag1-green-icon.png";
					}else{
						$flag_drt_lapkeu_pasiva_aktiva="Flag1-orange-icon.png";
					}
					?>

					<!-- <li class="<?php echo $this->uri->segment(1)=='lap_keuangan'?'active':'';?>">
                        <a href="<?php echo base_url('lap_keuangan');?>"> <span class="xn-text">Laporan Keuangan <img src="<?php echo base_url('assets/img/'.$flag_drt_lapkeu_pasiva_aktiva);?>"></span></a>
                    </li> -->

					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_soft_copy');
					$num_drt_soft_copy = $query->num_rows();

					if($num_drt_soft_copy>=1){
						$flag_drt_soft_copy="Flag1-green-icon.png";
					}else{
						$flag_drt_soft_copy="Flag1-orange-icon.png";
					}
					?>

					<!-- <li class="<?php echo $this->uri->segment(1)=='soft_copy'?'active':'';?>">
                        <a href="<?php echo base_url('soft_copy');?>"> <span class="xn-text">Soft copy Dokumen <img src="<?php echo base_url('assets/img/'.$flag_drt_soft_copy);?>"> </span></a>
                    </li> -->

                    <?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					$this->db->where('status_delete',0);
					$query = $this->db->get('drt_lapkeu_aspek');
					$num_drt_aspek = $query->num_rows();

					if($num_drt_aspek>=1){
						$flag_drt_aspek="Flag1-green-icon.png";
					}else{
					    $flag_drt_aspek="Flag1-orange-icon.png";
					}
					?>


                    <li class="<?php echo $this->uri->segment(1)=='aspek_keuangan'?'active':'';?>">
                        <a href="<?php echo base_url('aspek_keuangan');?>"> <span class="xn-text">Aspek Keuangan <img src="<?php echo base_url('assets/img/'.$flag_drt_aspek);?>"></span></a>
                    </li>

					
					 <?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					//$this->db->where('status_delete',0);
					$query = $this->db->get('drt_surat_penting');
					$num_drt_surat_penting = $query->num_rows();

					if($num_drt_surat_penting>=1){
						$flag_drt_surat_penting="Flag1-green-icon.png";
					}else{
					    $flag_drt_surat_penting="Flag1-orange-icon.png";
					}
					?>
					
					
					<li class="<?php echo $this->uri->segment(1)=='surat_penting'?'active':'';?>">
                        <a href="<?php echo base_url('surat_penting');?>"> <span class="xn-text">Surat Penting <img src="<?php echo base_url('assets/img/'.$flag_drt_surat_penting);?>"></span></a>
                    </li>

					
		
					

					
	

					<?php
					$this->db->select('id');
					$this->db->where('id_peserta',$this->session->userdata('id_peserta'));
					//$this->db->where('status_delete',0);
					$query = $this->db->get('drt_konfirmasi_data');
					$num_drt_konfirmasi = $query->num_rows();

					if($num_drt_konfirmasi>=1){
						$flag_konfirmasi="Flag1-green-icon.png";
					}else{
					    $flag_konfirmasi="Flag1-orange-icon.png";
					}
					?>
					
					
					<li class="<?php echo $this->uri->segment(1)=='konfirmasi_data'?'active':'';?>">
                        <a href="<?php echo base_url('konfirmasi_data');?>"> <span class="xn-text">Konfirmasi Data <img src="<?php echo base_url('assets/img/'.$flag_konfirmasi);?>"></span></a>
                    </li>
                    
					<!--<li class="<?php echo $this->uri->segment(1)=='help'?'active':'';?>">
                        <a href="<?php echo base_url('help');?>"> <span class="xn-text">Help</span></a>
                    </li>-->

                    <li>
                        <a href="<?php echo base_url('webpage/login');?>"> <span class="xn-text">Logout</span></a>
                    </li>
					<li class="">
                        <a href="#"><span class="xn-text">&nbsp;</span></a>
                    </li>

					<li class="">
                        <a href="#"><span class="xn-text">&nbsp;</span></a>
                    </li>

					<li class="">
                        <a href="#"><span class="xn-text">&nbsp;</span></a>
                    </li>

					<li class="">
                        <a href="#"><span class="xn-text">&nbsp;</span></a>
                    </li>

					<li class="">
                        <a href="#"><span class="xn-text">&nbsp;</span></a>
                    </li>

					<li class="">
                        <a href="#"><span class="xn-text">&nbsp;</span></a>
                    </li>

					<li class="">
                        <a href="#"><span class="xn-text">&nbsp;</span></a>
                    </li>
					<li class="">
                        <a href="#"><span class="xn-text">&nbsp;</span></a>
                    </li>


                </ul>

                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

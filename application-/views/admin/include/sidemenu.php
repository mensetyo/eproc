<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
     
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo base_url('main');?>">
                                <i class="fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
						
                        <li <?php echo $this->uri->segment(1)=="admin_info_perusahaan"?"class='active'":"";?>>
                            <a href="<?php echo base_url('admin_info_perusahaan');?>">
                                <i class="fa fa-th"></i> <span>Info Perusahaan</span>
                            </a>
                        </li>
						
                        <li <?php echo $this->uri->segment(1)=="admin_info_layanan"?"class='active'":"";?>>
                            <a href="<?php echo base_url('admin_info_layanan');?>">
                                <i class="fa fa-th"></i> <span>Info Layanan</span>
                            </a>
                        </li>

                        <li <?php echo $this->uri->segment(1)=="admin_berita"?"class='active'":"";?>>
                            <a href="<?php echo base_url('admin_berita');?>">
                                <i class="fa fa-th"></i> <span>Berita</span>
                            </a>
                        </li>

                        <li <?php echo $this->uri->segment(1)=="admin_galeri"?"class='active'":"";?>>
                            <a href="<?php echo base_url('admin_galeri');?>">
                                <i class="fa fa-th"></i> <span>Galeri</span>
                            </a>
                        </li>
						
						<li <?php echo $this->uri->segment(1)=="admin_agenda"?"class='active'":"";?>>
                            <a href="<?php echo base_url('admin_agenda');?>">
                                <i class="fa fa-th"></i> <span>Agenda</span>
                            </a>
                        </li>
						
                        <li <?php echo $this->uri->segment(1)=="admin_video"?"class='active'":"";?>>
                            <a href="<?php echo base_url('admin_video');?>">
                                <i class="fa fa-th"></i> <span>Video</span>
                            </a>
                        </li>

                         <li <?php echo $this->uri->segment(1)=="admin_hubungi_kami"?"class='active'":"";?>>
                            <a href="<?php echo base_url('admin_hubungi_kami');?>">
                                <i class="fa fa-th"></i> <span>Hubungi kami</span>
                            </a>
                        </li>

                        <li <?php echo $this->uri->segment(1)=="admin_personil"?"class='active'":"";?>>
                            <a href="<?php echo base_url('admin_personil');?>">
                                <i class="fa fa-th"></i> <span>Personil kami</span>
                            </a>
                        </li>
					   <li class="treeview <?php echo $this->uri->segment(1)=="konfigurasi"?"active":"";?>">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Konfigurasi</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li <?php echo $this->uri->segment(2)=="users"?"class='active'":"";?>><a href="<?php echo base_url('konfigurasi/users');?>"><i class="fa fa-angle-double-right"></i> Users</a></li>
                                <li <?php echo $this->uri->segment(2)=="group"?"class='active'":"";?>><a href="<?php echo base_url('konfigurasi/group');?>"><i class="fa fa-angle-double-right"></i> Group</a></li>
                                <li <?php echo $this->uri->segment(2)=="kategori_berita"?"class='active'":"";?>><a href="<?php echo base_url('konfigurasi/kategori_berita');?>"><i class="fa fa-angle-double-right"></i> Kategori Berita</a></li>
                                <!--<li <?php echo $this->uri->segment(2)=="outlet"?"class='active'":"";?>><a href="<?php echo base_url('konfigurasi/outlet');?>"><i class="fa fa-angle-double-right"></i> Outlet</a></li>-->
                            </ul>
                        </li>
						
						 <li>
                            <a href="<?php echo base_url('administrator/logout');?>">
                                <i class="fa fa-sign-out"></i> <span>Log Out</span>
                            </a>
                        </li>


                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
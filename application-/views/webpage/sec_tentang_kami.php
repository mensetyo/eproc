    <section id="tentang_kami" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text"><br/><br/>
                      <h3>Tentang Kami</h3>
                      <p>
                      <?php 
                      $query = $this->db->query("select * from  web_tentang_kami limit 1");
                      
                      if ($query->num_rows() > 0)
                      {
                          foreach ($query->result() as $row)
                          {
                              $desc=$row->description;
                          }
                      }
                      
                      ?>
                      
                      <?php echo $desc;?>
                      </p>
                    </div>
                  </div>
                </div>
         
              </div>
			  
			 <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>Maksud dan Tujuan</h3>
                      <p>
                      <?php 
                      $query = $this->db->query("select * from  web_maksud_tujuan limit 1");
                      
                      if ($query->num_rows() > 0)
                      {
                          foreach ($query->result() as $row)
                          {
                              $desc2=$row->description;
                          }
                      }
                      
                      ?>
                      <?php echo $desc2;?>
                       </p>
                    </div>
                  </div>
                </div>
         
              </div>
			  
			  
            </div>
          </div>
        </div>
      </div>
    </section>
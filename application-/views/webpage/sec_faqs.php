   
   <section id="faqs" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text"><br/><br/>
                      <h3>FAQ's</h3>
                      <p>
					  

  <table width="150%" border="0">
  <tbody>
  <?php 
  
  $query = $this->db->query("select * from web_faq");
  
  if ($query->num_rows() > 0)
  {
      foreach ($query->result() as $row)
      {
  ?>
    <tr>
      <td colspan="2"><strong><?php echo $row->pertanyaan;?></strong></td>
    </tr>
    <tr>
	<td width="4%">&nbsp;</td>
      <td><i><?php echo $row->jawaban;?></i></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
<?php 
      }
  }
?>




	
  </tbody>
</table>
</body>
					  
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
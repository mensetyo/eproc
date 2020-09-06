    <style>
      table, tr, td {
        border: 1px solid #fff;
        font-size: 11pt;
    }
    </style>
    <section id="faqs" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-12">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>FAQ's</h3>
                      <p>
					  <table>
					  <tbody>
					{foreach from=$faq item=i}
						<tr style="border: 0px solid #ddd;">
						  <td colspan="2" style="border: 0px solid #ddd;"><strong>{$i.pertanyaan}</strong></td>
						</tr>
						<tr>
						<td width="4%">&nbsp;</td>
						  <td><i>{$i.jawaban}</i></td>
						</tr>
					{/foreach}
					  </tbody>
					</table>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br><br>
    </section>
   
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body">
        <center><p><b>Ingin Menjadi Rekanan Kami silahkan Daftar ?</b></p></center>
        <center><a href="{$host}webpage/reg"> <button type="button" class="btn btn-info" >Daftar</button></a></center><br>
        <center>
        {foreach from=$web_panduan item=i}
		      <a href="https://panitia-eproc.jmto.co.id/__assets/manual/{$i.file_panduan}" download> <button type="button" class="btn btn-info" >Download Manual Book Pendaftaran</button></a>
        {/foreach}
        </center>
      </div>
      <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>

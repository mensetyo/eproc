
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Form Pendaftaran Koperasi</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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


    <table align="left" border="0">
			<tr>
                            <td align="center"><h6>PERSYARATAN DAN KETENTUAN PENGGUNAAN APLIKASI JMTO e-Procurement</h6></td>
		</tr>
            <tr>
                <td>
                  
                  <ul>
                    <li> KETENTUAN UMUM </li>
                    <li>Electronic Procurement (e-Procurement) adalah pengadaan barang dan/atau jasa atau pekerjaan dengan memanfaatkan jasa dari pihak luar yang berbasis web dengan memanfaatkan fasilitas teknologi informasi dan komunikasi. </li>
                    <li>Jasa Marga Tollroad OperatorSistem e-Procurement, untuk selanjutnya disebut JMTO e-Procurement adalah proses/kegiatan e-Procurement yangterpasang di server Jasa Marga Tollroad Operator dan dapat diakses melalui website Jasa Marga Tollroad Operator.</li>
                    <li>Pengguna JMTO e-Procurement adalah perorangan/badan usaha yang memiliki hak akses kepada aplikasi JMTO e-Procurement, direpresentasikan oleh User ID dan password yang diberikan oleh JMTO e-Procurement , yaitu Jasa Marga Tollroad Operator, Penyedia Barang/Jasa, dan Auditor Eksternal. </li>
                    <li>User ID adalah nama atau pengenal unik sebagai identitas diri dari Pengguna yang digunakan untuk beroperasi di dalam aplikasi JMTO e-Procurement</li>
                    <li>Password adalah kumpulan karakter atau string yang digunakan oleh Pengguna untuk memverifikasi User ID kepada aplikasi JMTO e-Procurement.</li>
                    <li>digital signature adalah Aplikasi Pengaman Dokumen dan Digital Signature, yang dikembangkan oleh Lembaga Sandi Negara</li>
                    <li>User ID dan password yang masih aktif dapat digunakan oleh Pengguna untuk mengikuti pengadaan dan aktivitas lain dalam aplikasi JMTO e-Procurement </li>
                    <li>Pengguna dapat mengganti password sesuai dengan keinginannya, dan menjaganya agar selalu bersifat rahasia</li>
                    <li>Waktu yang digunakan untuk proses pengadaan melalui websiteJMTO e-Procurement adalah waktu dari serverJMTO e-Procurement di Jasa Marga Tollroad Operator Pusat. </li>
                    <li>Pengelolaan Rekanan Jasa Marga Tollroad Operator yang untuk selanjutnya disebut Vendor Management adalah proses pengelolaan Rekanan mulai dari pendaftaran, pengkinian data, penyampaian informasi pengadaan, e-catalogue, penilaian kinerja, kriteria Rekanan dan profilling Rekanan secara elektronik yang berbasis website dengan memanfaatkan fasilitas teknologi informasi dan komunikasi</li>
                    <li>Pengelolaan Pengadaan yang untuk selanjutnya disebut Tender Management adalah proses pengadaan secara elektronik mulai dari pemberitahuan informasi pengadaan, pendaftaran pengadaan, penyampaian dokumen pengadaan, aanwijzing, pengajuan dokumen penawaran, evaluasi penawaran, penunjukan pemenang serta memberikan penilaian kinerja Penyedia Barang dan/atau Jasa sebagai input kinerja Rekanan secara elektronik yang berbasis website dengan memanfaatkan fasilitas teknologi informasi dan komunikasi. </li>
                    <li>• Pemesanan Barang Secara Elektronik Jasa Marga Tollroad Operator yang untuk selanjutnya disebut e-Purchase Order adalah proses pemesanan barang persediaan, mesin, peralatan, kendaraan dan perabot berdasarkan atas kontrak harga satuan yang telah disepakati</li>
                    <li>E-Bidding adalah proses negosiasi dan/atau pelaksanaan pengajuan dokumen penawaran biaya dalam proses pelelangan/seleksi umum/pemilihan langsung/seleksi langsung/ penunjukan langsung yang dilakukan secara elektronik dalam modul Tender Management.</li>
                    <li>Pengadaan adalah suatu rangkaian kegiatan yang dilakukan dalam rangka memenuhi kebutuhan barang dan/atau jasa.</li>

                    <li>15.  Jasa Konstruksi adalah layanan pekerjaan pembangunan / konstruksi, atau wujud fisik lainnya yang perancangan teknis dan spesifikasinya ditetapkan Jasa Marga Tollroad Operator dan proses serta pelaksanaannya diawasi oleh Jasa Marga Tollroad Operator dan/atau pihak lain yang ditunjuk Jasa Marga Tollroad Operator</li>
                    <li>• Jasa Konsultansi adalah jasa layanan profesional yang membutuhkan keahlian tertentu di berbagai bidang keilmuan yang mengutamakan adanya olah pikir (brainware) berdasarkan kerangka acuan kerja yang ditetapkan Jasa Marga Tollroad Operator. </li>
                    <li>Jasa Lain adalah jasa yang membutuhkan kemampuan tertentu yang mengutamakan keterampilan (skillware) dalam suatu sistem tata kelola yang telah dikenal luas di dunia usaha untuk menyelesaikan suatu pekerjaan atau segala pekerjaan dan/atau penyediaan jasa selain Jasa Konsultansi dan Jasa Konstruksi serta Pengadaan Barang. </li>
                    <li>Penyedia Barang dan/atau Jasa adalah badan usaha atau perseorangan yang kegiatan usahanya menyediakan Barang dan/atau layanan jasa. </li>
                    <li>Pelaksana Pengadaan adalah panitia atau pegawai yang ditunjuk untuk melaksanakan Pengadaan. </li>
                    <li>Panitia adalah sekumpulan pegawai yang ditetapkan oleh Pemutus Pengadaan untuk melaksanakan Pengadaan yang terdiri dari ketua dan anggota. </li>
                    <li>Rekanan adalah Penyedia Barang dan/atau Jasa yang sudah terdaftar dan telah diaktivasi sebagai rekanan dalam Vendor Management Jasa Marga Tollroad Operator dan dibuktikan dengan adanya Vendor Identification Number (VIN) yang dimiliki. </li>
                    <li>Profiling adalah kegiatan penelitian mengenai karakteristik dan spesifikasi teknis Barang dan/atau jasa, serta tingkat layanan (service level) dan kinerja calon Penyedia Barang dan/atau Jasa, yang menghasilkan informasi mengenai Barang dan/atau jasa dan Penyedia Barang dan/atau Jasa, termasuk usulan cara Pengadaan Barang dan/atau jasa. </li>
                    <li>Dengan menjadi Pengguna JMTO e-Procurement maka Pengguna dianggap telah memahami/mengerti dan menyetujui semua isi di dalam Persyaratan dan Ketentuan Penggunaan Sistem JMTO e-Procurement, Panduan Pengguna, dan ketentuan lain yang diterbitkan oleh Jasa Marga Tollroad Operator. </li>
                    <li><strong>KEANGGOTAAN PENGGUNA </strong></li>
                    <li><strong>Registrasi Pengguna </strong></li>
                    <li>Penyedia barang/jasa melakukan pendaftaran secara online pada websiteJMTO e-Procurement dan selanjutnya mengikuti proses verifikasi dokumen pendukung yang dipersyaratkan oleh Jasa Marga Tollroad Operator</li>
                    <li>Dengan menggunakan aplikasi JMTO e-Procurement, maka Panitia/Pegawai Jasa Marga Tollroad Operator dan Penyedia barang/jasa telah memberikan persetujuannya pada Pakta Integritas.</li>
                    <li><strong>Kewajiban Pengguna </strong></li>
                    <li>Memenuhi ketentuan peraturan perundang-undangan dan kebijakan yang berlaku dalam pengadaan barang/jasa di Jasa Marga Tollroad Operator. </li>
                    <li>Setiap Pengguna bertanggungjawab melindungi kerahasiaan hak akses, dan aktivitas lainnya pada aplikasi JMTO e-Procurement. </li>
                    <li>Setiap penyalahgunaan hak akses oleh pihak lain menjadi tanggung jawab pemilik User ID dan password. </li>
                    <li>Penyedia barang/jasa wajib memutakhirkan data kualifikasi (jika terjadi perubahan seperti akte pendirian, surat ijin usaha, alamat, status kepemilikan dan pengurus, kondisi keuangan, kontak person, klasifikasi bidang usaha, jenis barang/jasa yang disediakan, dan data atau informasi lain yang dianggap perlu oleh Jasa Marga Tollroad Operator). </li>
                    <li>Menjaga kerahasiaan dan mencegah penyalahgunaan data dan informasi yang tidak diperuntukkan bagi khalayak umum</li>
                    <li>Penyedia barang/jasa bertanggung jawab terhadap setiap kekeliruan dan/atau kelalaian atas penggunaan data kualifikasi yang tidak mutakhir (update) yang tidak menjadi tanggung jawab Jasa Marga Tollroad Operator</li>
                    <li><strong> Ketentuan Pengguna </strong></li>
                    <li>Pengguna setuju bahwa transaksi yang dilakukan melalui JMTO e-Procurement tidak boleh melanggar peraturan perundang-undangan yang berlaku di Indonesia. </li>
                    <li>Pengguna wajib tunduk dan taat pada semua peraturan yang berlaku di Indonesia yang berhubungan dengan penggunaan jaringan dan komunikasi data baik di wilayah Indonesia maupun dari dan keluar wilayah Indonesia melalui websiteJMTO e-Procurement. </li>
                    <li>Pengguna bertanggungjawab penuh atas isi transaksi yang dilakukan dengan menggunakan JMTO e-Procurement. </li>
                    <li>Pengguna dilarang saling mengganggu proses transaksi dan/atau layanan lain yang dilakukan dalam JMTO e-Procurement. </li>
                    <li>Pengguna setuju bahwa usaha untuk memanipulasi data, mengacaukan sistem elektronik dan jaringannya adalah tindakan melanggar hukum</li>
                    <li><strong>Pembatalan Keanggotaan Pengguna </strong></li>


                    <li>Pengelola JMTO e-Procurement berhak menunda/menghalangi sementara/ membatalkan hak akses Pengguna apabila ditemukan adanya informasi/transaksi/aktivitas lain yang tidak dibenarkan sesuai ketentuan yang berlaku</li>
                    <li>Pengguna mengundurkan diri dengan cara mengirimkan surat permohonan dan disampaikan kepada pengelola JMTO e-Procurement yang dapat dikirimkan melalui sarana elektronik (email).</li>
                     <li><strong>TANGGUNG JAWAB DAN AKIBAT </strong></li>
                    <li>Jasa Marga Tollroad Operator dan Kantor Perwakilannya tidak bertanggung jawab atas semua akibat karena keterlambatan/kesalahan/kerusakan penerimaan data pengadaan yang terjadi pada JMTO e-Procurement yang dilakukan Pengguna dan pihak lain. </li>
                    <li>Jasa Marga Tollroad Operator dan Kantor Perwakilannya tidak bertanggung jawab atas semua akibat adanya gangguan infrastruktur yang berakibat pada terganggunya proses penggunaan JMTO e-Procurement. </li>
                    <li>Jasa Marga Tollroad Operator dan Kantor Perwakilannya tidak bertanggung jawab atas segala akibat penyalahgunaan yang dilakukan oleh Pengguna atau pihak lain</li>
                     <li>Jasa Marga Tollroad Operator dan Kantor Perwakilannya tidak menjamin JMTO e-Procurement dan digital signature berlangsung terus secara tepat, handal/tanpa adanya gangguan</li>
                   <li>Jasa Marga Tollroad Operator dan Kantor Perwakilannya dapat membantu pengguna JMTO e-Procurement terkait dengan penyelesaian kesalahan penggunaan atau penyelesaian keterbatasan fasilitas aplikasi namun tidak bertanggungjawab atas hasil yang diakibatkan oleh tindakannya</li>
                   <li>Jasa Marga Tollroad Operator dan Kantor Perwakilannya dapat melakukan suatu tindakan yang dianggap perlu terhadap file-file yang dinyatakan tidak dapat didekripsi atau dapat didekripsi dengan menggunakan digital signature namun salah satu/beberapa/semua file tidak bisa dibuka oleh Jasa Marga Tollroad Operator</li>
                   <li>Pengguna menanggung segala akibat terhadap dokumen (file) yang tidak dapat dilakukannya proses dekripsi atau tidak dapat dibukanya salah satu/beberapa/semua file akibat dari kesalahan dan/atau kelalaian penggunaan digital signature </li>
                   <li>Pengguna bertanggung jawab atas segala resiko dan tidak terbatas pada tidak dapat dilanjutkannya proses pengadaan barang/jasa apabila dalam penggunaan JMTO e-Procurement tidak mengindahkan ketentuan ini. </li>

                   <li><strong>PERSELISIHAN</strong></li>

                  </ul> 
                </td>
            </tr>
		
       

        <tr>
                     <td>&nbsp;</td>
                 
		</tr>
	

	</table>

</body>

	<script src="<?php echo base_url('assets');?>/validasi/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url('assets');?>/validasi/jquery.validate.min.js"></script>
	<script src="<?php echo base_url('assets');?>/validasi/additional-methods.min.js"></script>
	

</html>
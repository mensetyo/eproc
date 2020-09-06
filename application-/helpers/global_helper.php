<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// is_login
if ( ! function_exists('is_login'))
{
    function is_login()
    {
		$CI  =& get_instance();
		$ret =  $CI->session->userdata('id_peserta');
		return  $ret;
    }

}

if ( ! function_exists('tgl_indo'))
{
  function tgl_indo($tgl){
      $ubah = gmdate($tgl, time()+60*60*8);
      $pecah = explode("-",$ubah);
      $tanggal = $pecah[2];
      $bulan = bulan($pecah[1]);
      $tahun = $pecah[0];
      return $tanggal.' '.$bulan.' '.$tahun;
  }
}

if ( ! function_exists('tgldikit'))
{
    function tgldikit($tgl){

            $inttime=date('Y-m-d H:i:s',$tgl);

            $arr_bulan=array("","Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des");
            $tglBaru=explode(" ",$inttime);
            $tglBaru1=$tglBaru[0];$tglBaru2=$tglBaru[1];
            $tglBarua=explode("-",$tglBaru1);
            $tgl=$tglBarua[2]; $bln=$tglBarua[1]; $thn=$tglBarua[0];
            if(substr($bln,0,1)=="0") $bln=substr($bln,1,1);
            $bln=substr($arr_bulan[$bln],0,10);
            $ubahTanggal="$tgl $bln $thn";

         return $ubahTanggal;
    }
}

if ( ! function_exists('rupiah2'))
{
    function rupiah2($harga)
    {
        $a=(string)$harga; //membuat $harga menjadi string
        $len=strlen($a); //menghitung panjang string $a

        if ( $len <=18 )
        {
            $ratril=$len-3-1;
            $ramil=$len-6-1;
            $rajut=$len-9-1; //untuk mengecek apakah ada nilai ratusan juta (9angka dari belakang)
            $juta=$len-12-1; //untuk mengecek apakah ada nilai jutaan (6angka belakang)
            $ribu=$len-15-1; //untuk mengecek apakah ada nilai ribuan (3angka belakang)

            $angka='';
            for ($i=0;$i<$len;$i++)
            {
                if ( $i == $ratril )
                {
                    $angka=$angka.$a[$i].".";
                }
                else if ($i == $ramil )
                {
                    $angka=$angka.$a[$i].".";
                }
                else if ( $i == $rajut )
                {
                    $angka=$angka.$a[$i]."."; //meletakkan tanda titik setelah 3angka dari depan
                }
                else if ( $i == $juta )
                {
                    $angka=$angka.$a[$i]."."; //meletakkan tanda titik setelah 6angka dari depan
                }
                else if ( $i == $ribu )
                {
                    $angka=$angka.$a[$i]."."; //meletakkan tanda titik setelah 9angka dari depan
                }
                else
                {
                    $angka=$angka.$a[$i];
                }
            }
        }
        echo $angka.",-";
        }
  }

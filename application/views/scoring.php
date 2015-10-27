<!DOCTYPE html>
<html>
<head>

<style type="text/css">
.fontsize {
	font-size: 11px;
}
.centertext {
	text-align: center;
}
</style>
</head>
<body>
    <style type="text/css">
.center {
  text-align: center;
}
</style>

<div>
      <table width=700 border="0">
        <tr>
            <td><img src="<?php echo base_url('/asset/image/logopep.png') ?>"></td>
            <td>
                <table width="150" border="1" align="right" style="border-style: single; font-size: 12px;">
                  <tr>
                    <td>FO/HRD-22  REV: 00 <br>
                      Valid Date 15/11/2013</td>
                  </tr>
                </table>
            </td>
        </tr>
      </table>
   </div>
<h3 style="text-align:center"><strong><u>SUMMARY EVALUASI OUTSOURCHING</u></strong></h3>
<table width="300" border="0" align="left">
  <tr>
    <td width=50%>Tahun</td>
    <td width=3%>:</td>
    <td width=47%><?php echo $tahun?></td>
  </tr>
  <tr>
    <td>Penyedia Tenaga Kerja</td>
    <td>:</td>
    <td><?php if ($id_tk==1) echo "Koperasi Karyawan";
                else echo "Karya Dinasti";
    ?></td>
  </tr>
</table>

<p>A. Tenaga Kerja</p>

<table border="1" align="center" width=650px>
  <tr>
    <td width=5% class="center"><span class="fontsize">No</span></td>
    <td width=20%><span class="fontsize">TOPIK</span></td>
    <td width=25% class="center"><span class="fontsize">Nilai</span></td>
    <td width=15% class="center"><span class="fontsize">TK Borongan</span></td>
    <td width=10% class="center"><span class="fontsize">%</span></td>
    <td width=15% class="center"><span class="fontsize">TK Harian</span></td>
    <td width="10%" class="center"><span class="fontsize">%</span></td>
  </tr>
  <tr>
    <td rowspan="4" class="center"><span class="fontsize">1</span></td>
    <td rowspan="4"><span class="fontsize">Manfaat di pekerjaan</span></td>
    <td><span class="fontsize">Sangat Bermanfaat</span></td>
    <td class="center"><span class="fontsize"><?php echo $t1_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t1_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t5_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t5_4?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Bermanfaat</span></td>
    <td class="center"><span class="fontsize"><?php echo $t1_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t1_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t5_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t5_3?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Cukup</span></td>
    <td class="center"><span class="fontsize"><?php echo $t1_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t1_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t5_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t5_2?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Kurang Bermanfaat</span></td>
    <td class="center"><span class="fontsize"><?php echo $t1_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t1_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t5_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t5_1?></span></td>
  </tr>
  <tr>
    <td rowspan="4" class="center"><span class="fontsize">2</span></td>
    <td rowspan="4"><span class="fontsize">Disiplin dalam kerja</span></td>
    <td><span class="fontsize">Sangat Disiplin</span></td>
    <td class="center"><span class="fontsize"><?php echo $t2_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t2_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t6_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t6_4?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Disiplin</span></td>
    <td class="center"><span class="fontsize"><?php echo $t2_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t2_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t6_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t6_3?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Cukup</span></td>
    <td class="center"><span class="fontsize"><?php echo $t2_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t2_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t6_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t6_2?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Kurang Disiplin</span></td>
    <td class="center"><span class="fontsize"><?php echo $t2_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t2_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t6_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t6_1?></span></td>
  </tr>
  <tr>
    <td rowspan="4" class="center"><span class="fontsize">3</span></td>
    <td rowspan="4"><span class="fontsize">Tingkat Keahlian</span></td>
    <td><span class="fontsize">Sangat Ahli</span></td>
    <td class="center"><span class="fontsize"><?php echo $t3_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t3_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t7_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t7_4?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Ahli</span></td>
    <td class="center"><span class="fontsize"><?php echo $t3_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t3_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t7_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t7_3?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Cukup</span></td>
    <td class="center"><span class="fontsize"><?php echo $t3_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t3_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t7_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t7_2?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Kurang Ahli</span></td>
    <td class="center"><span class="fontsize"><?php echo $t3_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t3_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t7_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t7_1?></span></td>
  </tr>
  <tr>
    <td rowspan="4" class="center"><span class="fontsize">4</span></td>
    <td rowspan="4"><span class="fontsize">Tingkat Kepuasaan</span></td>
    <td><span class="fontsize">100%</span></td>
    <td class="center"><span class="fontsize"><?php echo $t4_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t4_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t8_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t8_4?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">75%</span></td>
    <td class="center"><span class="fontsize"><?php echo $t4_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t4_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t8_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t8_3?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">50%</span></td>
    <td class="center"><span class="fontsize"><?php echo $t4_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t4_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t8_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t8_2?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Kurang dari 50%</span></td>
    <td class="center"><span class="fontsize"><?php echo $t8_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t8_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo $t8_1?></span></td>
    <td class="center"><span class="fontsize"><?php echo 12.5*$t8_1?></span></td>
  </tr>
</table>

<?php 
$data4 = array($t1_4, $t2_4, $t3_4, $t4_4, $t5_4, $t6_4, $t7_4, $t8_4);
$data3 = array($t1_3, $t2_3, $t3_3, $t4_3, $t5_3, $t6_3, $t7_3, $t8_3);
$data2 = array($t1_2, $t2_2, $t3_2, $t4_2, $t5_2, $t6_2, $t7_2, $t8_2);
$data1 = array($t1_1, $t2_1, $t3_1, $t4_1, $t5_1, $t6_1, $t7_1, $t8_1);

$totdata4=0; $totdata3=0; $totdata2=0; $totdata1=0;

for ($a=0; $a<8;$a++){
  $totdata4+=$data4[$a];
  $totdata3+=$data3[$a];
  $totdata2+=$data2[$a];
  $totdata1+=$data1[$a];
}
$totdata4 = $totdata4*4;
$totdata3 = $totdata3*3;
$totdata2 = $totdata2*2;
$totdata1 = $totdata1*1;

$totdata = $totdata4+$totdata3+$totdata2+$totdata1;

$totdata = $totdata/64; 
?>

<p>B. Penyedia Tenaga Kerja</p>
<table border="1" align="center" width=650px>
  <tr>
    <td width=5% class="fontsize" style="text-align: center"><span class="fontsize">No</span></td>
    <td width=55% class="center"><span class="fontsize">KRITERIA</span></td>
    <td width=8% class="center"><span class="fontsize">Sangat</span></td>
    <td width=8% class="center"><span class="fontsize">Cukup</span></td>
    <td width=8% class="center"><span class="fontsize">Belum</span></td>
    <td width=8% class="center"><span class="fontsize">Kurang</span></td>
  </tr>
  <tr>
    <td align="right" class="fontsize" style="text-align: center"><span class="fontsize">1</span></td>
    <td><span class="fontsize">Penyediaan tenaga kerja sudah memenuhi harapan</span></td>
    <td class="center"><span class="fontsize"><?php echo $q1_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q1_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q1_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q1_1?></span></td>
  </tr>
  <tr>
    <td align="right" class="fontsize" style="text-align:center"><span class="fontsize">2</span></td>
    <td><span class="fontsize">Pihak Penyedia kerja cepat dalam memenuhi permintaan tenaga kerja</span></td>
    <td class="center"><span class="fontsize"><?php echo $q2_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q2_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q2_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q2_1?></span></td>
  </tr>
  <tr>
    <td class="fontsize" style="text-align: center"><span class="fontsize">3</span></td>
    <td><span class="fontsize">Pihak Penyedia kerja sudah profesional</span></td>
    <td class="center"><span class="fontsize"><?php echo $q3_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q3_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q3_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q3_1?></span></td>
  </tr>
  <tr>
    <td class="fontsize" style="text-align: center"><span class="fontsize">4</span></td>
    <td width="368"><span class="fontsize">Pengawas tenaga kerja Outshourching sudah    Optimal dalam melakukan pengawasan</span></td>
    <td class="center"><span class="fontsize"><?php echo $q4_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q4_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q4_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q4_1?></span></td>
  </tr>
  <tr>
    <td class="fontsize" style="text-align: center"><span class="fontsize">5</span></td>
    <td width="368"><span class="fontsize">Pengawas tenaga kerja Out Sourching sudah    proaktif menjalankan pekerjaannya</span></td>
    <td class="center"><span class="fontsize"><?php echo $q5_4?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q5_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q5_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q5_1?></span></td>
  </tr>
  <tr>
    <td class="fontsize" style="text-align: center"><span class="fontsize">6</span></td>
    <td width="368"><span class="fontsize">Penyedia tenaga kerja outsourching memberi kepuasan</span></td>
    <td class="center"><span class="fontsize"><?php echo $q6_4?></span></span></td>
    <td class="center"><span class="fontsize"><?php echo $q6_3?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q6_2?></span></td>
    <td class="center"><span class="fontsize"><?php echo $q6_1?></span></td>
  </tr>
</table>

<?php 
$data_4 = array($q1_4, $q2_4, $q3_4, $q4_4, $q5_4, $q6_4);
$data_3 = array($q1_3, $q2_3, $q3_3, $q4_3, $q5_3, $q6_3);
$data_2 = array($q1_2, $q2_2, $q3_2, $q4_2, $q5_2, $q6_2);
$data_1 = array($q1_1, $q2_1, $q3_1, $q4_1, $q5_1, $q6_1);

$totdata_4=0; $totdata_3=0; $totdata_2=0; $totdata_1=0;

for ($a=0; $a<6;$a++){
  $totdata_4+=$data_4[$a];
  $totdata_3+=$data_3[$a];
  $totdata_2+=$data_2[$a];
  $totdata_1+=$data_1[$a];
}
$totdata_4 = $totdata_4*4;
$totdata_3 = $totdata_3*3;
$totdata_2 = $totdata_2*2;
$totdata_1 = $totdata_1*1;

$totdata_ = $totdata_4+$totdata_3+$totdata_2+$totdata_1;

$totdata_ = $totdata_/48; 
?>


<p>C. Summary (Rata-rata)</p>
<table width="387" border="1" style="margin-left:22px">
  <tr class="centertext">
    <td width="163" style="text-align: center"><span class="fontsize">Kategori</span></td>
    <td width="88" style="text-align: center"><span class="fontsize">Angka (1-4)</span></td>
    <td width="114" style="text-align: center"><span class="fontsize">Persentase (%)</span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Tenaga Kerja Outsourching</span></td>
    <td class="center"><span class="fontsize"><?php echo $totdata; ?></span></td>
    <td class="center"><span class="fontsize"><?php echo $totdata*25; ?></span></td>
  </tr>
  <tr>
    <td><span class="fontsize">Penyedia Tenaga Kerja</span></td>
    <td class="center"><span class="fontsize"><?php echo $totdata_; ?></span></td>
    <td class="center"><span class="fontsize"><?php echo $totdata_*25; ?></span></td>
  </tr>
</table>


</body>
</html>
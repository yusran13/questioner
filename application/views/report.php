<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
    <div>
      <table width=700 border="0">
        <tr>
            <td><img src="<?php echo base_url('/asset/image/logopep.png') ?>"></td>
            <td>
                <table width="150" border="1" align="right" style="border-style: single; font-size: 12px;">
                  <tr>
                    <td>FO/HRD-21  REV: 00 <br>
                      Valid Date 15/11/2013</td>
                  </tr>
                </table>
            </td>
        </tr>
      </table>
   </div>
    <div class="row">
      <h2 align="center">EVALUASI OUT SOURCHING</h2>
    </div>
    <table width="700" border="0" style="border-bottom:inset">
      <tr>
        <td width="200px">Seksi : <?php echo $seksi;?></td>
        <td width="380px">Penyedia  Tenaga Kerja : <?php echo $tk;?></td>
        <td width="120px" align="right">Tahun  : <?php echo $tahun;?></td>
      </tr>
    </table>
    
    <b>Pilihlah salah satu  pernyataan yang menurut anda paling sesuai.
    </p>
    <p><b>MANFAAT OUT  SOURCHING</b></p>

    <form id="questioner" action="" method="get" style="border:0">
    <table width="700" border="1" style="align:center">
      <tr class="asd">
        <th width="100" class="asd" style="text-align: center" scope="col"><strong>TOPIK</strong></th>
        <th colspan="2" style="text-align: center" scope="col">MANFAAT DI PEKERJAAN</th>
        <th colspan="2" style="text-align: center" scope="col">DISIPLIN DALAM PEKERJAAN</th>
        <th colspan="2" style="text-align: center" scope="col">TINGKAT KEAHLIAN</th>
        <th colspan="2" style="text-align: center" scope="col">TINGKAT KEPUASAN</th>
      </tr>
      <tr>
        <th rowspan="4" style="text-align: center" scope="row">TENAGA KERJA BORONGAN</th>
        <td width="20" class="circle"><input id="radio" type="radio" name="t1" value=4 <?php if ($t1==4){?>checked="checked"<?php } ?> style="visibility:visible"/></td>
        <td width="126" class="fontsize"> Sangat Bermanfaat</td>

        <td width="20" class="circle"><input id="radio" type="radio" name="t2" value=4 <?php if ($t2==4){?>checked="checked"<?php } ?>/> </td>
        <td width="126" class="fontsize"> Sangat Disiplin</td>

        <td width="20" class="circle"><input id="radio" type="radio" name="t3" value=4 <?php if ($t3==4){?>checked="checked"<?php } ?>/></td>
        <td width="126" class="fontsize"> Sangat Ahli</td>

        <td width="20" class="circle"><input id="radio" type="radio" name="t4" value=4 <?php if ($t4==4){?>checked="checked"<?php } ?>/></td>
        <td width="126"  class="fontsize"> 100%</td>
      </tr>

      <tr>
        <td class="circle"><input id="radio" type="radio" name="t1" value=3 <?php if ($t1==3){?>checked="checked"<?php } ?>/></td>
        <td class="fontsize"> Bermanfaat</td>

        <td class="circle"><input id="radio" type="radio" name="t2" value=3 <?php if ($t2==3){?>checked="checked"<?php } ?>/></td>
        <td class="fontsize"> Disiplin</td>

        <td class="circle"><input id="radio" type="radio" name="t3" value=3 <?php if ($t3==3){?>checked="checked"<?php } ?>/></td>
        <td class="fontsize"> Ahli</td>

        <td class="circle"><input id="radio" type="radio" name="t4" value=3 <?php if ($t4==3){?>checked="checked"<?php } ?>/></td>
        <td  class="fontsize"> 75%</td>
      </tr>

      <tr>
        <td class="circle"><input id="radio" type="radio" name="t1" value=2 <?php if ($t1==2){?>checked="checked"<?php } ?>/></td>
        <td class="fontsize"> Cukup</td>

        <td class="circle"><input id="radio" type="radio" name="t2" value=2 <?php if ($t2==2){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Cukup</td>

        <td class="circle"><input id="radio" type="radio" name="t3" value=2 <?php if ($t3==2){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Cukup</td>

        <td class="circle"><input id="radio" type="radio" name="t4" value=2 <?php if ($t4==2){?>checked="checked"<?php } ?>/></td>
        <td  class="fontsize"> 50%</td>
      </tr>

      <tr>
        <td class="circle">
          <input id="radio" type="radio" name="t1" value=1 <?php if ($t1==1){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Kurang Bermanfaat</td>

        <td class="circle">
          <input id="radio" type="radio" name="t2" value=1 <?php if ($t2==1){?>checked="checked"<?php } ?>/>
       </td>
        <td class="fontsize"> Kurang Disiplin</td>

        <td class="circle">
          <input id="radio" type="radio" name="t3" value=1 <?php if ($t3==1){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Kurang Ahli</td>

        <td class="circle">
          <input id="radio" type="radio" name="t4" value=1 <?php if ($t4==1){?>checked="checked"<?php } ?>/></td>
        <td  class="fontsize"> Kurang dari 50%</td>
      </tr>
      <tr>
        <th rowspan="4" style="text-align: center" scope="row">TENAGA KERJA HARIAN</th>

        <td class="circle">
          <input id="radio" type="radio" name="t5" value=4 <?php if ($t5==4){?>checked="checked"<?php } ?>/>
        </td>
        <td width="116" class="fontsize"> Sangat Bermanfaat</td>

        <td class="circle">
          <input id="radio" type="radio" name="t6" value=4 <?php if ($t6==4){?>checked="checked"<?php } ?>/>
        </td>
        <td width="126" class="fontsize"> Sangat Disiplin</td>

        <td class="circle">
          <input id="radio" type="radio" name="t7" value=4 <?php if ($t7==4){?>checked="checked"<?php } ?>/>
        </td>
        <td width="92" class="fontsize"> Sangat Ahli</td>

        <td class="circle">
        <input id="radio" type="radio" name="t8" value=4 <?php if ($t8==4){?>checked="checked"<?php } ?>/>
        </td>
        <td width="100"  class="fontsize"> 100%</td>
      </tr>

      <tr>
        <td class="circle">
          <input id="radio" type="radio" name="t5" value=3 <?php if ($t5==3){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Bermanfaat</td>

        <td class="circle">
          <input id="radio" type="radio" name="t6" value=3 <?php if ($t6==3){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Disiplin</td>

        <td class="circle">
          <input id="radio" type="radio" name="t7" value=3 <?php if ($t7==3){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Ahli</td>

        <td class="circle">
          <input id="radio" type="radio" name="t8" value=3 <?php if ($t8==3){?>checked="checked"<?php } ?>/></td>
        <td  class="fontsize"> 75%</td>
      </tr>

      <tr>
        <td class="circle">
          <input id="radio" type="radio" name="t5" value=2 <?php if ($t5==2){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Cukup</td>

        <td class="circle">
          <input id="radio" type="radio" name="t6" value=2 <?php if ($t6==2){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Cukup</td>

        <td class="circle">
          <input id="radio" type="radio" name="t7" value=2 <?php if ($t7==2){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Cukup</td>

        <td class="circle">
          <input id="radio" type="radio" name="t8" value=2 <?php if ($t8==2){?>checked="checked"<?php } ?>/></td>
        <td  class="fontsize"> 50%</td>
      </tr>

      <tr>
        <td class="circle">
          <input id="radio" type="radio" name="t5" value=1 <?php if ($t5==1){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Kurang Bermanfaat</td>

        <td class="circle">
          <input id="radio" type="radio" name="t6" value=1 <?php if ($t6==1){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Kurang Disiplin</td>

        <td class="circle">
          <input id="radio" type="radio" name="t7" value=1 <?php if ($t7==1){?>checked="checked"<?php } ?>/>
        </td>
        <td class="fontsize"> Kurang Ahli</td>

        <td class="circle">
          <input id="radio" type="radio" name="t8" value=1 <?php if ($t8==1){?>checked="checked"<?php } ?>/></td>
        <td  class="fontsize"> Kurang dari 50%</td>
      </tr>
    </table>
    <p><b>Komentar dan saran secara umum tentang tenaga kerja  outsourching yang ada sekarang :
    </b></p>
    <textarea name="k1" id="k1" style="width:700px; height:50px; resize:none"><?=$k1?></textarea>
    
    <br></br>

    <table width="700" border="0" class="fontsize12">
      <tr>
        <td colspan="4" scope="col">1. Apakah  dalam menyediakan tenaga kerja pihak penyedia tenaga kerja sudah memenuhi  harapan yang saudara inginkan</td>
      </tr>
      <tr>
        <td height="30" valign="top" width="161"><div align="left"><input id="radio" type="radio" name="q1" <?php if ($q1==4){?>checked="checked"<?php } ?>> Sudah Terpenuhi</div></td>
        <td height="30" valign="top" width="166"><div align="left"><input id="radio" type="radio" name="q1" <?php if ($q1==3){?>checked="checked"<?php } ?>> Cukup</div></td>
        <td height="30" valign="top" width="187"><div align="left"><input id="radio" type="radio" name="q1" <?php if ($q1==2){?>checked="checked"<?php } ?>> Belum Terpenuhi</div></td>
        <td height="30" valign="top" width="149"><div align="left"><input id="radio" type="radio" name="q1" <?php if ($q1==1){?>checked="checked"<?php } ?>> Sangat Kurang</div></td>
      </tr>
      <tr>
        <td colspan="4" scope="row">2. Menurut saudara berapa lama pihak penyedia tenaga  kerja dalam memenuhi permintaan penambahan/penggantian tenaga kerja</td>
      </tr>
      <tr>
        <td height="30" valign="top"><input id="radio" type="radio" name="q2" <?php if ($q2==4){?>checked="checked"<?php } ?>> Sangat Cepat</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q2" <?php if ($q2==3){?>checked="checked"<?php } ?>> Cepat</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q2" <?php if ($q2==2){?>checked="checked"<?php } ?>> Lambat</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q2" <?php if ($q2==1){?>checked="checked"<?php } ?>> Sangat Lambat</td>
      </tr>
      <tr>
        <td colspan="4" scope="row">3. Secara keseluruhan, apakah pihak penyedia tenaga kerja  yang ada sekarang sudah …….……….</td>
      </tr>
      <tr>
        <td height="30" valign="top"><input id="radio" type="radio" name="q3" <?php if ($q3==4){?>checked="checked"<?php } ?>> Sangat Profesional</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q3" <?php if ($q3==3){?>checked="checked"<?php } ?>> Profesional</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q3" <?php if ($q3==2){?>checked="checked"<?php } ?>> Kurang Profesional</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q3" <?php if ($q3==1){?>checked="checked"<?php } ?>> Belum Profesional</td>
      </tr>
      <tr>
        <td colspan="4" scope="row">4. Apakah pengawas tenaga kerja Out Sourching sudah  optimal dalam melakukan pengawasan</td>
      </tr>
      <tr>
        <td height="30" valign="top"><input id="radio" type="radio" name="q4" <?php if ($q4==4){?>checked="checked"<?php } ?>> Sangat Optimal</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q4" <?php if ($q4==3){?>checked="checked"<?php } ?>> Optimal</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q4" <?php if ($q4==2){?>checked="checked"<?php } ?>> Kurang Optimal</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q4" <?php if ($q4==1){?>checked="checked"<?php } ?>> Belum Optimal</td>
      </tr>
      <tr>
        <td colspan="4" scope="row">5. Apakah pengawas tenaga kerja Out Sourching sudah  proaktif menjalankan pekerjaannya ……….</td>
      </tr>
      <tr>
        <td height="30" valign="top"><input id="radio" type="radio" name="q5" <?php if ($q5==4){?>checked="checked"<?php } ?>> Sangat Aktif</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q5" <?php if ($q5==3){?>checked="checked"<?php } ?>> Aktif</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q5" <?php if ($q5==2){?>checked="checked"<?php } ?>> Cukup Aktif</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q5" <?php if ($q5==1){?>checked="checked"<?php } ?>> Pasif</td>
      </tr>
      <tr>
        <td colspan="4" scope="row">6. Tingkat kepuasan saudara mengenai penyedia tenaga  kerja outsourching yang ada sekarang</td>
      </tr>
      <tr>
        <td height="30" valign="top"><input id="radio" type="radio" name="q6" <?php if ($q6==4){?>checked="checked"<?php } ?>> 100%</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q6" <?php if ($q6==3){?>checked="checked"<?php } ?>> 75%</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q6" <?php if ($q6==2){?>checked="checked"<?php } ?>> 50%</td>
        <td height="30" valign="top"><input id="radio" type="radio" name="q6" <?php if ($q6==1){?>checked="checked"<?php } ?>> Kurang dari 50%</td>
      </tr>
    </table>
    <p><b>Komentar secara umum mengenai penyedia tenaga kerja yang ada sekarang :</b></p>
    <textarea name="k2" id="k2" style="width:700px; height:50px; resize:none"><?=$k2?></textarea> 

    </form>
</body>
</html>


<style type="text/css">
.asd {
	background-color:#FF0;
	
}
.fontsize {
	font-size: 11px;
}
.choice {
	text-align: left;
	font-size: small;
}
.circle {
	text-align: center
}

#radio {
	
	-webkit-appearance: radio;
    -webkit-border-radius: 1;
    border-radius: 1;
}

.fontsize12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
</style>
 
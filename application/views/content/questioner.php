<style type="text/css">
.asd {
	background-color:#FF0;
	
}
.fontsize {
	font-size: small;
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

</style>
<p>Seksi : <?php $logged_in = $this->session->userdata('logged_in'); echo $this->session->userdata('seksi'); ?>                                                      Penyedia  Tenaga Kerja : <?php echo $tk;?>                                     Tahun  : <?php echo $tahun;?>              </p>
<p>Pilihlah salah satu  pernyataan yang menurut anda paling sesuai.</p>
<b><p>MANFAAT OUT  SOURCHING</p></b>

<form id="questioner" action="<?php echo base_url(); ?>index.php/project/submit_questioner/<?php echo $id;?>/<?php echo $id_tk;?>" method="post">
<table width="750" border="1">
  <tr class="asd">
    <th width="139" class="asd" style="text-align: center" scope="col"><strong>TOPIK</strong></th>
    <th colspan="2" style="text-align: center" scope="col">MANFAAT DI PEKERJAAN</th>
    <th colspan="2" style="text-align: center" scope="col">DISIPLIN DALAM PEKERJAAN</th>
    <th colspan="2" style="text-align: center" scope="col">TINGKAT KEAHLIAN</th>
    <th colspan="2" style="text-align: center" scope="col">TINGKAT KEPUASAN</th>
  </tr>
  <tr>
    <th rowspan="4" style="text-align: center" scope="row">TENAGA KERJA BORONGAN</th>
    <td width="20" class="circle"><input id="radio" type="radio" name="t1" value=4 required="required" style="visibility:visible"/></td>
    <td width="126" class="fontsize"> Sangat Bermanfaat</td>

    <td width="20" class="circle"><input id="radio" type="radio" name="t2" value=4 required="required"/> </td>
    <td width="126" class="fontsize"> Sangat Disiplin</td>

    <td width="20" class="circle"><input id="radio" type="radio" name="t3" value=4 required="required"/></td>
    <td width="126" class="fontsize"> Sangat Ahli</td>

    <td width="20" class="circle"><input id="radio" type="radio" name="t4" value=4 required="required"/></td>
    <td width="126"> 100%</td>
  </tr>

  <tr>
    <td class="circle"><input id="radio" type="radio" name="t1" value=3 /></td>
    <td class="fontsize"> Bermanfaat</td>

    <td class="circle"> <input id="radio" type="radio" name="t2" value=3 /></td>
    <td class="fontsize"> Disiplin</td>


    <td class="circle"><span class="fontsize">  <input id="radio" type="radio" name="t3" value=3 /></td>
    <td class="fontsize"> Ahli</td>

    <td class="circle"><input id="radio" type="radio" name="t4" value=3 /></td>
    <td> 75%</td>
  </tr>

  <tr>
    <td class="circle">   <input id="radio" type="radio" name="t1" value=2 /></td>
    <td class="fontsize"> Cukup</td>

    <td class="circle">
      <input id="radio" type="radio" name="t2" value=2 />
    </td>
    <td class="fontsize"> Cukup</td>

    <td class="circle">
      <input id="radio" type="radio" name="t3" value=2 />
    </td>
    <td class="fontsize"> Cukup</td>

    <td class="circle"><input id="radio" type="radio" name="t4" value=2 /></td>
    <td> 50%</td>
  </tr>

  <tr>
    <td class="circle">
      <input id="radio" type="radio" name="t1" value=1 />
    </td>
    <td class="fontsize"> Kurang Bermanfaat</td>

    <td class="circle">
      <input id="radio" type="radio" name="t2" value=1 />
   </td>
    <td class="fontsize"> Kurang Disiplin</td>

    <td class="circle">
      <input id="radio" type="radio" name="t3" value=1 />
    </td>
    <td class="fontsize"> Kurang Ahli</td>

    <td class="circle"><input id="radio" type="radio" name="t4" value=1 /></td>
    <td> Kurang dari 50%</td>
  </tr>
  <tr>
    <th rowspan="4" style="text-align: center" scope="row">TENAGA KERJA HARIAN</th>

    <td class="circle">
      <input id="radio" type="radio" name="t5" value=4 required="required"/>
    </td>
    <td width="116" class="fontsize"> Sangat Bermanfaat</td>

    <td class="circle">
      <input id="radio" type="radio" name="t6" value=4 required="required"/>
    </td>
    <td width="126" class="fontsize"> Sangat Disiplin</td>

    <td class="circle">
      <input id="radio" type="radio" name="t7" value=4 required="required"/>
    </td>
    <td width="92" class="fontsize"> Sangat Ahli</td>

    <td class="circle">
    <input id="radio" type="radio" name="t8" value=4 required="required"/>
    </td>
    <td width="100"> 100%</td>
  </tr>

  <tr>
    <td class="circle">
      <input id="radio" type="radio" name="t5" value=3 />
    </td>
    <td class="fontsize"> Bermanfaat</td>

    <td class="circle">
      <input id="radio" type="radio" name="t6" value=3 />
    </td>
    <td class="fontsize"> Disiplin</td>

    <td class="circle">
      <input id="radio" type="radio" name="t7" value=3 />
    </td>
    <td class="fontsize"> Ahli</td>

    <td class="circle"><input id="radio" type="radio" name="t8" value=3 /></td>
    <td> 75%</td>
  </tr>

  <tr>
    <td class="circle">
      <input id="radio" type="radio" name="t5" value=2 />
    </td>
    <td class="fontsize"> Cukup</td>

    <td class="circle">
      <input id="radio" type="radio" name="t6" value=2 />
    </td>
    <td class="fontsize"> Cukup</td>

    <td class="circle">
      <input id="radio" type="radio" name="t7" value=2 />
    </td>
    <td class="fontsize"> Cukup</td>

    <td class="circle"><input id="radio" type="radio" name="t8" value=2 /></td>
    <td> 50%</td>
  </tr>

  <tr>
    <td class="circle">
      <input id="radio" type="radio" name="t5" value=1 />
    </td>
    <td class="fontsize"> Kurang Bermanfaat</td>

    <td class="circle">
      <input id="radio" type="radio" name="t6" value=1 />
    </td>
    <td class="fontsize"> Kurang Disiplin</td>

    <td class="circle">
      <input id="radio" type="radio" name="t7" value=1 />
    </td>
    <td class="fontsize"> Kurang Ahli</td>

    <td class="circle"><input id="radio" type="radio" name="t8" value=1 /></td>
    <td> Kurang dari 50%</td>
  </tr>
</table>

<p>&nbsp;</p>
<p><b>Komentar dan saran secara umum tentang tenaga kerja  outsourching yang ada sekarang :
</b></p>
<textarea name="k1" id="k1" style="width:750px; height:100px; resize:none" required="required"></textarea>
</br>
</br>

<table width="750" border="0" class="choice">
  <tr>
    <th colspan="4" scope="col">1. Apakah  dalam menyediakan tenaga kerja pihak penyedia tenaga kerja sudah memenuhi  harapan yang saudara inginkan</th>
  </tr>
  <tr height="40" valign="top">
    <td width="161"><div align="left"><input id="radio" type="radio" name="q1" value=4 required="required"> Sudah Terpenuhi</div></td>
    <td width="166"><div align="left"><input id="radio" type="radio" name="q1" value=3 > Cukup</div></td>
    <td width="187"><div align="left"><input id="radio" type="radio" name="q1" value=2> Belum Terpenuhi</div></td>
    <td width="149"><div align="left"><input id="radio" type="radio" name="q1" value=1> Sangat Kurang</div></td>
  </tr>
  <tr>
    <th colspan="4" scope="row">2. Menurut saudara berapa lama pihak penyedia tenaga  kerja dalam memenuhi permintaan penambahan/penggantian tenaga kerja</th>
  </tr>
  <tr height="40" valign="top">
    <td height="40"><input id="radio" type="radio" name="q2" value=4 required="required"> Sangat Cepat</td>
    <td height="40"><input id="radio" type="radio" name="q2" value=3> Cepat</td>
    <td height="40"><input id="radio" type="radio" name="q2" value=2> Lambat</td>
    <td height="40"><input id="radio" type="radio" name="q2" value=1> Sangat Lambat</td>
  </tr>
  <tr>
    <th colspan="4" scope="row">3. Secara keseluruhan, apakah pihak penyedia tenaga kerja  yang ada sekarang sudah …….……….</th>
  </tr>
  <tr height="40" valign="top">
    <td><input id="radio" type="radio" name="q3" value=4 required="required"> Sangat Profesional</td>
    <td><input id="radio" type="radio" name="q3" value=3> Profesional</td>
    <td><input id="radio" type="radio" name="q3" value=2> Kurang Profesional</td>
    <td><input id="radio" type="radio" name="q3" value=1> Belum Profesional</td>
  </tr>
  <tr>
    <th colspan="4" scope="row">4. Apakah pengawas tenaga kerja Out Sourching sudah  optimal dalam melakukan pengawasan</th>
  </tr>
  <tr height="40" valign="top">
    <td><input id="radio" type="radio" name="q4" value=4 required="required"> Sangat Optimal</td>
    <td><input id="radio" type="radio" name="q4" value=3> Optimal</td>
    <td><input id="radio" type="radio" name="q4" value=2> Kurang Optimal</td>
    <td><input id="radio" type="radio" name="q4" value=1> Belum Optimal</td>
  </tr>
  <tr>
    <th colspan="4" scope="row">5. Apakah pengawas tenaga kerja Out Sourching sudah  proaktif menjalankan pekerjaannya ……….</th>
  </tr>
  <tr valign="top" height="40">
    <td><input id="radio" type="radio" name="q5" value=4 required="required"> Sangat Aktif</td>
    <td><input id="radio" type="radio" name="q5" value=3> Aktif</td>
    <td><input id="radio" type="radio" name="q5" value=2> Cukup Aktif</td>
    <td><input id="radio" type="radio" name="q5" value=1> Pasif</td>
  </tr>
  <tr>
    <th colspan="4" scope="row">6. Tingkat kepuasan saudara mengenai penyedia tenaga  kerja outsourching yang ada sekarang</th>
  </tr>
  <tr  valign="top" height="40">
    <td><input id="radio" type="radio" name="q6" value=4 required="required"> 100%</td>
    <td><input id="radio" type="radio" name="q6" value=3> 75%</td>
    <td><input id="radio" type="radio" name="q6" value=2> 50%</td>
    <td><input id="radio" type="radio" name="q6" value=1> Kurang dari 50%</td>
  </tr>
</table>
</br>

<p><b>Komentar secara umum mengenai penyedia tenaga kerja yang ada sekarang :</b></p>
<textarea name="k2" id="k1" style="width:750px; height:100px; resize:none" required="required"></textarea> 
</br>
</br>
<button type="submit" class="btn btn-primary" style="margin-left:610px">Submit Questioner</button>

</form>
<br><br>

<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
       <thead>
       <tr>
          <?php 
                  $logged_in = $this->session->userdata('logged_in');
                  
                  if ($this->session->userdata('username')=="admin"){
                        ?>
                          <th style="width:5%; text-align:center">No</th>
                          <th style="width:25%; text-align:center">Seksi</th>
                          <th style="width:10%; text-align:center">Tahun</th>
                          <th style="width:25%; text-align:center">Status</th>
                          <th style="width:20%; text-align:center">Tanggal</th>
                          <th style="width:10%; text-align:center">Action</th>
                  <?php
                 }

                 else {?>
                      <th style="width:5%; text-align:center">No</th>
                      <th style="width:10%; text-align:center">Tahun</th>
                      <th style="width:25%; text-align:center">Status</th>
                      <th style="width:20%; text-align:center">Tanggal</th>
                      <th style="width:10%; text-align:center">Action</th>


                  <?php
                 }
              ?>  
        </tr>
      </thead>
      <tbody>

                <?php $no = 1;
                if ($this->session->userdata('username')=="admin"){
                      foreach ($data as $row) {
                        echo "
                        <tr class=\"text-center\">
                          <td>$no</td>
                          <td>$row->seksi</td>
                          <td>$row->tahun</td>
                          <td>$row->status</td>
                          <td>$row->tanggal</td>
                          ";

                          if ($row->status == 'Submitted'){
                                echo "
                                <td>
                                  <a class=\"btn abtn-sm btn-success\" title=\"View\" href=\""; echo base_url(); echo "index.php/report/pdf/$row->id_evaluasi\" target=\"blank\"><i class=\"glyphicon glyphicon-file\"></i> View</a>
                                </td>";
                          }
                          else {
                                echo "
                                <td>
                                  <a class=\"btn abtn-sm btn-danger disabled\" title=\"View\"><i class=\"glyphicon glyphicon-file\"></i> View</a>
                                </td>";
                          }
                          echo "</tr> 
                        ";
                        $no++;
                      }

                }
                else {
                      foreach ($data as $row) {
                        echo "
                        <tr class=\"text-center\">
                          <td>$no</td>
                          <td>$row->tahun</td>
                          <td>$row->status</td>
                          <td>$row->tanggal</td>
                          ";

                          if ($row->status == 'Submitted'){
                                echo "
                                <td>
                                  <a class=\"btn abtn-sm btn-danger disabled\" title=\"Input Questioner\"><i class=\"glyphicon glyphicon-pencil\"></i> Submitted</a>
                                </td>";
                          }

                          else {
                                echo "
                                <td>
                                  <a class=\"btn abtn-sm btn-primary \" title=\"Input Questioner\" href=\""; echo base_url(); echo "index.php/main/questioner/$row->id_evaluasi\"><i class=\"glyphicon glyphicon-pencil\"></i> Input Questioner</a>
                                </td>";
                          }
                          
                          echo "</tr> 
                        ";

                        $no++;
                      }


                }
                

                ?>
            </tbody>
</table>

    <script>
       
      $(document).ready(function() {
        var table = $('#table').DataTable();
     
        $('#data tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
     
        $('#button').click( function () {
            table.row('.selected').remove().draw( false );
        } );
    } );
    </script>

  


 
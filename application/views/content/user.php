<br><br>
<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
       <tr>
          <th style="width:5%; text-align:center">No</th>
          <th style="width:20%; text-align:center">Username</th>
          <th style="width:20%; text-align:center">Seksi</th>
          <th style="width:20%; text-align:center">Email</th>
          <th style="width:20%; text-align:center">Option</th>
          
        </tr>
      </thead>
      <tbody>

                <?php $no = 1;

                foreach ($data as $row) {

                echo "
                
                <tr class=\"text-center\">
                  <td>$no</td>
                  <td>$row->username</td>
                  <td>$row->seksi</td>
                  <td>$row->email</td>
                  <td>
                      <a style=\"width: 35%\" title=\"Edit\" class=\"btn btn-primary btn-sm\" onclick=\"edit_user($row->id_user)\"><i class=\"glyphicon glyphicon-pencil\"></i> Edit</a>
                      <a style=\"width: 35%\" title=\"Delete\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Are you sure you want to delete this user?');\" href=\""; echo base_url(); echo "index.php/project/delete_user/$row->id_user\"><i class=\"glyphicon glyphicon-trash\"></i> Delete</a>
                  </td>
                </tr> 
                ";

                $no++;
              }
                ?>
            </tbody>
</table>

  <script type="text/javascript">
      function add_user()
        {
            $('#form_add_user')[0].reset(); // reset form on modals
            $('#add_user').modal('show'); // show bootstrap modal
            $('.modal-title').text('Add User'); // Set Title to Bootstrap modal title
        }

    function edit_user(id)
    {
      $('#form_edit_user')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('project/edit_user/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
             
            $('[name="id_user"]').val(data.id_user);
            $('[name="seksi"]').val(data.seksi);
            $('[name="email"]').val(data.email);
            $('[name="username"]').val(data.username);
            
            $('#edit_user').modal('show');
            // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit User'); // Set title to Bootstrap modal title           
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });

    }

    function edit()
    {
      var url;
      url = "<?php echo site_url('project/update_user')?>";
      // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form_edit_user').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               window.location.href="<?php echo site_url('main/user/')?>";

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });

      var table = document.getElementById ("table");
      table.refresh ();
    }
  </script>

     <div class="modal fade" id="add_user" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                   <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h3 class="modal-title"></h3>
                   </div>
                   <form id="form_add_user" method="post" class="form-horizontal" action="<?php echo base_url(); ?>index.php/project/add_user">
                   <div class="modal-body form">
                        
                            
                            <div class="form-body">
                                 <div class="form-group">
                                     <label class="control-label col-md-3">Seksi</label>
                                         <div class="col-md-9">
                                                <input type="text" class="form-control" name="seksi" placeholder="Seksi" required="required"/>
                                         </div>

                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-3">Username</label>
                                         <div class="col-md-9">
                                                <input type="text" class="form-control" name="username" placeholder="Username" required="required"/>
                                         </div>

                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-3">Email</label>
                                         <div class="col-md-9">
                                                <input type="text" class="form-control" name="email" placeholder="ID Lotus Note" required="required"/>
                                         </div>

                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-3">Password</label>
                                         <div class="col-md-9">
                                                <input type="password" class="form-control" name="password1" id="password1" placeholder="Password" required="required"/>
                                         </div>

                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-3">Confirm Password</label>
                                         <div class="col-md-9">
                                                <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password" required="required"/>
                                         </div>

                                  </div>
                            </div>
                      
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                  </form>   
              </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="edit_user" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                   <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h3 class="modal-title"></h3>
                   </div>
                   <form id="form_edit_user" method="post" class="form-horizontal" action="javascript:edit()">
                   <div class="modal-body form">
                        
                            <input type="hidden" value="" name="id_user"/> 
                            <div class="form-body">
                                  <div class="form-group">
                                     <label class="control-label col-md-3">Seksi</label>
                                         <div class="col-md-9">
                                                <input type="text" class="form-control" name="seksi" placeholder="Seksi" required="required"/>
                                         </div>

                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-3">Username</label>
                                         <div class="col-md-9">
                                                <input type="text" class="form-control" name="username" placeholder="Username" required="required"/>
                                         </div>

                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-3">Email</label>
                                         <div class="col-md-9">
                                                <input type="text" class="form-control" name="email" placeholder="ID Lotus Note" required="required"/>
                                         </div>

                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-3">Password</label>
                                         <div class="col-md-9">
                                                <input type="password" class="form-control" name="password3" id="password3" placeholder="Password" required="required"/>
                                         </div>

                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-3">Confirm Password</label>
                                         <div class="col-md-9">
                                                <input type="password" class="form-control" name="password4" id="password4" placeholder="Confirm Password" required="required"/>
                                         </div>

                                  </div>
                            </div>
                      
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                  </form>   
              </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
  </div>


  <script>
       
      $(document).ready(function() {

        $('#form_add_user').on('submit',function(){
              if($('#password1').val()!=$('#password2').val()){
              alert('Password not matches');
              return false;
              }
        return true;
        });

         $('#form_edit_user').on('submit',function(){
              if($('#password3').val()!=$('#password4').val()){
              alert('Password not matches');
              return false;
              }
        return true;
        });

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

  


 
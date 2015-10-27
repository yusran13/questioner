
<body>
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            
            <a class="navbar-brand" href="">
              Sistem Evaluasi Outsourching Purinusa Ekapersada Bawen 
            </a>
        </div>
  <!-- /.navbar-header -->
        <ul  class="nav navbar-top-links navbar-right">
          
           <li class="">
                
                User :  <?php $logged_in = $this->session->userdata('logged_in'); echo $this->session->userdata('seksi');?>
            </li>
          <li class="">
              <?php 
                  $logged_in = $this->session->userdata('logged_in');
                  
                  if ($logged_in){
                        ?>

                        <a class="" href="<?php echo base_url() ?>index.php/main/logout">
                          <i class="fa fa-user fa-fw"></i> Logout
                      </a>
                            
                      <?php
                 }
                  else {
                        ?>
                        <a class="" href="<?php echo base_url() ?>index.php/main/login">
                          <i class="fa fa-user fa-fw"></i> Login
                        </a>
                        <?php
                  }
               ?>         
          </li>
            <!-- /.dropdown -->
        </ul>
  <!-- /.navbar-top-links -->
        <aside class="sidebar">
         <nav class="sidebar-nav">
            <ul class="nav" id="menu">
              
              <?php 
                  $logged_in = $this->session->userdata('logged_in');
                  
                  if ($this->session->userdata('username')=="admin"){
                        ?>
                          <li onClick="add_evaluasi()">
                            <a >
                              <i class="fa fa-edit fa-fw">
                              </i>
                              Add Evaluasi Tahunan
                            </a>
                          </li>
                  <?php
                 }
              ?>  

              <li>
                <a href="">
                  <i class="fa fa-bar-chart-o fa-fw">
                  </i>
                  Daftar Evaluasi</a>
                  <ul class="nav nav-second-level">
                        <li>
                          <a href="<?php echo base_url('index.php/main/kopkar')?>"> <span class='glyphicon glyphicon-play' aria-hidden='true' style='margin:0 10px 0 0; font-size:8px;'></span>
                                
                              Koperasi Karyawan</a>
                        </li>

                        <li>
                          <a href="<?php echo base_url('index.php/main/dinasti')?>"> <span class='glyphicon glyphicon-play' aria-hidden='true' style='margin:0 10px 0 0; font-size:8px;'></span>
                                
                              Koperasi Dinasti</a>
                        </li>
                  </ul>
              </li>

           
             

             <?php 
                  $logged_in = $this->session->userdata('logged_in');
                  
                  if ($this->session->userdata('username')=="admin"){
                        ?>
                           <li>
                            <a href="">
                              <i class="fa fa-files-o fa-fw">
                              </i>
                              Scoring Evaluasi
                            </a>
                                <ul class="nav nav-second-level">
                                    <li onClick="select_year(1)">
                                      <a> <span class='glyphicon glyphicon-play' aria-hidden='true' style='margin:0 10px 0 0; font-size:8px;'></span>
                                        Koperasi Karyawan</a>
                                    </li>

                                    <li onClick="select_year(2)">
                                      <a> <span class='glyphicon glyphicon-play' aria-hidden='true' style='margin:0 10px 0 0; font-size:8px;'></span>
                                        Koperasi Dinasti</a>
                                    </li>
                              </ul>
                          </li>
                          <li>
                            <a href="<?php echo base_url('index.php/main/user')?>">
                                <i class="fa fa-user fa-fw">
                                </i>
                                User
                            </a>
                          </li>
                  <?php
                 }
              ?>  
 



            </ul>
          </nav>
      </aside>
	 </nav>

   <script type="text/javascript">
      function add_evaluasi(){
        $('#form_add')[0].reset(); // reset form on modals
        $('#add_evaluasi').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add Evaluasi Tahunan'); // Set Title to Bootstrap modal title
      }

      function select_year(id){

        $('#year')[0].reset(); // reset form on modals
        $('[name="id_tk"]').val(id);
        $('#select_year').modal('show'); // show bootstrap modal
        $('.modal-title').text('Select Year'); // Set Title to Bootstrap modal title
        //window.location.href = "<?php echo base_url(); ?>index.php/main";
      }        

  </script>

   <div class="modal fade" id="add_evaluasi" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                   <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h3 class="modal-title"></h3>
                   </div>
                   <form id="form_add" method="post" class="form-horizontal" action="<?php echo base_url(); ?>index.php/project/add_evaluasi">
                   <div class="modal-body form">
                            <div class="form-body">
                                 <div class="form-group">
                                     <label class="control-label col-md-3">Pilih Tahun Evaluasi</label>
                                         <div class="col-md-9">
                                                <input type="text" class="form-control" id="yearpicker" name="tahun" required="required"/>
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

  <div class="modal fade" id="select_year" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                   <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h3 class="modal-title"></h3>
                   </div>
                   <form id="year" method="POST" class="form-horizontal" action="<?php echo base_url(); ?>index.php/report/scoring/">
                   <div class="modal-body form">
                            <div class="form-body">
                                 <div class="form-group">
                                     
                                     <label class="control-label col-md-3">Pilih Tahun Evaluasi</label>
                                         <div class="col-md-9">
                                                <select class="form-control" name="tahun" value="">
                                                  <?php foreach($records as $row) { ?>
                                                    <option name="tahun" ><?php echo $row->tahun; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <input type="hidden" value="" name="id_tk"/>
                                         </div>
                                  </div>
                            </div>
                      
                    </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Go!</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                  </form>   
              </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
  </div>
            
 </body>


 <script type="text/javascript">
        // When the document is ready
            $(document).ready(function () {
                  $('#yearpicker').datepicker({
                      format: "yyyy",
                      minViewMode: 2,
                      autoclose: true
                  });
            });
</script>

 <?php include "header.php" ?>
 <?php include "nav-menu.php" ?>


        <div id="page-wrapper">
            <div class="row">
                <h3 align="left">User Management</h3> <div align="right" style="padding-right: 50px;"><button class="btn btn-success" onClick="add_user()"><i class="glyphicon glyphicon-plus"></i> Add User</button></div>
            </div>
            
            <div id="holder">
                <div class="row">
                    <div id="body">
                          <?php
                                include"content/user.php";
                        ?>
                    </div>
                
                </div>
             </div>
        </div>
        <div id="footer">
              <div class="container">
                <p class="text-muted" align="center">PT. PURINUSA EKAPERSADA BAWEN</p>
              </div>
        </div>



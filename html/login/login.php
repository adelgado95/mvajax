  <?php  
  	include(HTML_DIR.'overall/header.php');
  ?> 
  <div id="registro" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div id="_AJAX_LOGIN_">
                
              </div>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Log In</h4>
              </div>
              <div class="modal-body">
              <form role="form" onkeypress="return runScriptLogin(event)">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="text" class="form-control" id="user_login" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="pass_login" placeholder="Password">
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="button" class="btn btnprimary" onclick="goLogin()">Entrar</button>
            <!--    <button type="submit" class="btn btn-primary">Submit</button>-->
              </div>
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
               
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <script src="views/app/js/login.js"></script>
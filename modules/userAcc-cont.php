
  <section class="content">
      <div class="row">
          <div class="">
            <!-- USERS LIST -->
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Members</h3>
                <div class="box-tools pull-right">
                  <span class="label label-danger"><?=$regUsers?> Registered Members</span>
                  <!--<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
                  <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                </div>
              </div><!-- /.box-header -->
              <div class="box-body no-padding">
                <ul class="users-list clearfix">

                <?php include 'userAccounts.php'; ?>

                </ul><!-- /.users-list -->
              </div><!-- /.box-body -->
              <div class="box-footer text-center">
                <a href="javascript::" class="uppercase">View All Members</a>
              </div><!-- /.box-footer -->
            </div><!--/.box -->
          </div><!-- /.col -->
          </div><!-- /.row -->

  </section>



  <div class="modal fade" id="deleteAccount" role="dialog">
    <div class="modal-dialog">


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Account</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete account? <br><button type="button" class="btn btn-danger">Yes</button> <button type="button" class="btn btn-success" data-dismiss="modal">No</button></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

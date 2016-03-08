

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Eboard Tasks</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Task ID</th>
                  <th>Date Created</th>
                  <th>Title</th>
                  <th>Submit By</th>
                  <th>Progress</th>
                </tr>
              </thead>
              <tbody>

                <!--FILL TABLE FROM DATABASE-->
                <?php include 'tasks-data.php' ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>Task ID</th>
                  <th>Date Created</th>
                  <th>Title</th>
                  <th>Submit By</th>
                  <th>Progress</th>

                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </div>

  </section><!-- /.content -->

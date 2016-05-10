<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-paint-brush"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">

      <h3 class="control-sidebar-heading">General Setting</h3>
      <form role="form" method="POST" action="modules/change-setting.php">
          <div class="form-group">
      <label class="control-sidebar-subheading">
        Number of Notifications to Show
      </label>
      <p>
        <div class="row">
        <div class="col-md-6">
      <input type="text" class="form-control" name="notifyNum" required>
      <p>
    </div>
  </div>

        <input type="hidden" value="<?=$uId?>" name="uId">
        <button type="submit" class="btn btn-primary" name="notifyChange">Apply</button>
    </div>
  </form>



    </div><!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Theme Tab Content</div><!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
        <h3 class="control-sidebar-heading">Theme Settings</h3>
        <form role="form" method="POST" action="modules/change-setting.php">
        <div class="form-group">
          <label class="control-sidebar-subheading">
            Theme
          </label>
          <p>
            Change the Skin
          </p>
          <p>
            <select class="form-control" name="skins">
              <option value="">Default</option>
              <option value="skin-red">red</option>
              <option value="skin-blue">blue</option>
              <option value="skin-green">green</option>
              <option value="skin-purple">purple</option>
              <option value="skin-yellow">yellow</option>
              <option value="skin-black">black</option>
              <option value="skin-red-light">light red</option>
              <option value="skin-blue-light">light blue</option>
              <option value="skin-green-light">light green</option>
              <option value="skin-purple-light">light purple</option>
              <option value="skin-yellow-light">light yellow</option>
              <option value="skin-black-light">light black</option>
            </select>
            <p>
              <input type="hidden" value="<?=$uId?>" name="uId">
              <button type="submit" class="btn btn-primary" name="themeChange">Apply</button>
          </p>
        </div><!-- /.form-group -->
      </form>
      <form action="modules/upload.php" method="post" enctype="multipart/form-data">
        <label class="control-sidebar-subheading">
            Select image to upload:
        </label>
        <input type="hidden" value="<?=$uId?>" name="uId">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="submit" value="UploadImage" class="btn btn-primary" name="upfile">Submit</button>
      </form>
    </div><!-- /.tab-pane -->
  </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

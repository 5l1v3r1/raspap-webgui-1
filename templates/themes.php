<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fas fa-paint-brush"></i> <?php echo _("Change Theme"); ?></div>
      <div class="card-body">

        <h4><?php echo _("Theme settings"); ?></h4>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="code"><?php echo _("Select a theme"); ?></label>
            <?php SelectorOptions("theme", $themes, $selectedTheme, "theme-select") ?>
          </div>
        </div>

        <form action="?page=system_info" method="POST">
            <?php echo CSRFTokenFieldTag() ?>
          <a href="?page=<?php echo $_GET['page'] ?>" class="btn btn-outline btn-primary"><i class="fa fa-refresh"></i> <?php echo _("Refresh"); ?></a>
        </form>

      </div><!-- /.card-body -->
    </div><!-- /.card -->
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

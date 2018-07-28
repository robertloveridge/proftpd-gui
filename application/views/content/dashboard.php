<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">Dashboard</h1>
          </div>
        </div>

        <?php if (!empty($expiring_count) AND $expiring_count >= 0) { ?>
          <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $expiring_count; ?></div>
                        <div>Users expiring in the next 30 days!</div>
                    </div>
                </div>
            </div>
            <a href="/user/expiring">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
            </div>
          </div>
        </div>
      <?php } ?>



    </div>
</div>

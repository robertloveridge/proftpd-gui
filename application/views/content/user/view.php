<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/user/list_all">Users</a></li>
                    <li class="active"><?php echo $user->userid; ?></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">

              <h3 class="page-header">
                <?php echo $user->userid; ?>
              </h3>

              <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                        <th>Home Directory</th>
                        <td><?php echo $user->homedir; ?></td>
                      </tr>
                    </table>
            </div>


    </div>
</div>

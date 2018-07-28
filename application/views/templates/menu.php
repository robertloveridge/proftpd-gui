<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <?php $active_menu = $this->uri->segment(1); ?>
            <li>
                <a href="/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <?php if ($active_menu == 'user'){ echo '<li class="active">'; } else { echo '<li>'; } ?>
                <a href="#"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/user/list_all">Manage Users</a>
                    </li>
                    <li>
                        <a href="/user/expiring">Expiring Users</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>

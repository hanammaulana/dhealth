<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i> Admin
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"> Profile</a>
                        <a class="dropdown-item" href="#"> Settings</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <a class="dropdown-item" href="<?php echo site_url('LoginController/Logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
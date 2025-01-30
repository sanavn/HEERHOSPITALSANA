<?php $file_name = basename($current_url); ?>

<!-- Start: Sidebar -->

<aside id="sidebar_left" class="nano nano-primary">

    <div class="nano-content">

        <!-- sidebar menu -->

        <ul class="nav sidebar-menu">

            <li class="sidebar-label pt20">Menu</li>

            <li <?php if($file_name == "index.php"){ echo ' class="active"'; } ?>>

                <a href="index.php">

                    <span class="glyphicons glyphicons-home"></span>

                    <span class="sidebar-title">Dashboard</span>

                </a>

            </li>

            <li <?php if($file_name == "blog-view.php" || $file_name == "blog-add.php" || $file_name == "blog-update.php"){ echo ' class="active"'; } ?>>

                <a href="blog-view.php">

                    <span class="glyphicons glyphicons-notes"></span>

                    <span class="sidebar-title">Blog</span>

                </a>

            </li>
            <!-- <li <?php // if($file_name == "dr-view.php" || $file_name == "dr-add.php" || $file_name == "dr-update.php"){ echo ' class="active"'; } ?>>

            <a href="dr-view.php">

                <span class="glyphicons glyphicons-notes"></span>

                <span class="sidebar-title">Doctor List</span>

            </a>

            </li>    -->
           <li <?php if($file_name == "gallery-add.php" || $file_name == "gallery-view.php" || $file_name == "gallery-update.php"){ echo ' class="active"'; } ?>>

                <a href="gallery-view.php">

                    <span class="fa fa-picture-o"></span>

                    <span class="sidebar-title">Gallery</span>

                </a>

            </li>


            <li <?php if($file_name == "gallery.php" ){ echo ' class="active"'; } ?>>

                <a href="gallery.php">

                    <span class="fa fa-picture-o"></span>

                    <span class="sidebar-title">Gallery view</span>

                </a>

            </li>

            
            <li class="sidebar-label pt15">Settings</li>

            <li <?php if($file_name == "admin.php"){ echo ' class="active"'; } ?>>

                <a href="admin.php">

                    <span class="glyphicons glyphicons-user"></span>

                    <span class="sidebar-title">Admin</span>

                </a>

            </li>
           

        </ul>

        <div class="sidebar-toggle-mini">

            <a href="#">

                <span class="fa fa-sign-out"></span>

            </a>

        </div>

    </div>

</aside>
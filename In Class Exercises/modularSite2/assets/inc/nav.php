<nav class="subnav">
                                        <ol class="nav nav-list container-fluid nav-collapse collapse in">
                                                <li <?php echo(isset($page) && $page == 'home') ? 'class="active"' : '' ;?>><a href="<?php echo $path;?>index.php">Home</a></li>
                                                <li <?php echo(isset($page) && $page == 'people') ? 'class="active"' : '' ;?>><a href="<?php echo $path;?>people/index.php">Our People</a></li>
                                                <li <?php echo(isset($page) && $page == 'tour') ? 'class="active"' : '' ;?>><a href="<?php echo $path;?>tour/index.php">Tour</a></li>
						<li <?php echo(isset($page) && $page == 'about') ? 'class="active"' : '' ;?>><a href="<?php echo $path;?>about/index.php">About</a></li>
                                        </ol>
                                </nav><!-- end subnav -->

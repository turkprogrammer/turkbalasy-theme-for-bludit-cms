<div id="main_sidebar" class="col-xs-12 col-sm-4 col-md-4 wptg-sidebar wptg-sidebar-right d-none d-sm-block">
       <div id="wptg-main-sidebar" class="wptg-sidebar-content">
        <div class="sidebar-widget-area">
         <h2 class="sidebar-widget-title">
          Search
         </h2>
		 			 
         <form role="search" method="get" class="search-form" action="">
          <label>
           <span class="screen-reader-text">Search for:</span>
           <input type="search" class="search-field" placeholder="Search" value="" name="s" />
          </label>
          <button type="submit" class="search-submit">
           <i class="fa fa-search"></i>
           <span class="screen-reader-text">Search</span>
          </button>
         </form>
        </div>
        <div class="sidebar-widget-area">
         <h2 class="sidebar-widget-title">
          About us
         </h2>
         <img class="img-fluid" data-image="sidebar" src="<?php echo DOMAIN_THEME.'img/dummy/sidebar.jpg' ?>" />
         <p>
          <?php echo $site->description(); ?>
         </p>
        </div>
        <div class="sidebar-widget-area">
         <h2 class="sidebar-widget-title">
          Recent Posts
         </h2>
					<ul class="">
                        <?php

                        $listOfKeys = $pages->getList(1, 4);

                        if ($listOfKeys) :
                            foreach ($listOfKeys as $key) :
                            $lPage = new Page($key);
                        ?>
                        <li class="menu-item">
						<i class="fa fa-circle" aria-hidden="true"></i>

                            <a href="<?php echo $lPage->permalink() ?>">
                                <?php echo $lPage->title() ?>
                            </a>
							 <div class="navbar-clean-pro">
							 <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $page->date(); ?>
							</div>
                        </li>
                        <?php endforeach ?>
                        <?php endif ?>
                    </ul>
        </div>
      
       </div>
      </div>
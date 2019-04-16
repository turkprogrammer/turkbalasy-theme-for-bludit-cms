 <header id="header_page">
     <div id="header-xxpp" class="bold-header wptg-edit-hook wptg-image-background" style="background-image: url(<?php echo DOMAIN_THEME.'img/dummy/background.jpg' ?>); ">
      <div class="bold-header-main-content">
       <h1 class="wptg-title">
        <?php echo $site->slogan() ?>
       </h1>
       <div class="full-hr-bp">
        <hr />
       </div>
       <h3 class="wptg-description">
	   <!-- Site description -->
		<?php if ($site->description()): ?>
		<div class="description"><?php echo $site->description(); ?></div>
		<?php endif ?>
      	
       </h3>
       <div class="full-hr-bp">
        <hr />
       </div>
       <div class="footer-bold-button-area">
        <!-- call to action -->
       </div>
      </div>
     </div>
    </header>
    <div id="main_page">
     <div class="row">
      <div id="main_content" class="col-12 col-sm-12 wptg-container"></div>
     </div>
     <div class="row">
      <div id="action_content" class="col-12 col-sm-12"></div>
     </div>
     <main id="content" class="row">
      <div id="wptg-main-content" class="col-xs-12 col-sm-8 col-md-8">
	  <!-- Load Bludit Plugins: Page Begin -->
				<?php Theme::plugins('pageBegin'); ?>
       <section wptg-parent="wptg-parent" wptg-edit-hook="wptg-edit-hook">
        <div id="mina">
         <div class="wptg-post-ind" id="mina">
          <div class="left-container">
		  
          </div>
          <div class="right-container">
           
            <h2 class="wptg-post-title">
             <?php echo $page->title(); ?>
            </h2>
          
           <div class="top-right">
            <h4 class="wptg-post-title">
            <a href="<?php echo DOMAIN_CATEGORIES.$page->categoryKey() ?>" rel="tag">
				<?php echo $page->category() ?>
			</a>
			
            </h4>
            <p class="date-style wptg-postmeta">
             <?php echo $page->date(); ?>
            </p>
           </div>
		   <!-- Page cover image -->
			<?php if ($page->coverImage()): ?>
		   <div class="hover-img-base">
            <figure class="holy-sadie">
             <a href="#" title="Your Post Title" class="hoverable-post wptg-link-post">
              <img class="img-fluid wptg-post-img" src="<?php echo $page->coverImage(); ?>" data-image="post" />
              <figcaption class="overlay-content">
               <div class="overlay-cape"></div>
              </figcaption>
             </a>
            </figure>
           </div>
		   <?php endif ?>
           <p class="post-excerpt wptg-excerpt"></p>
           <p>
            <?php echo $page->content(); ?>
           </p>
		  
          </div>
         </div>
         <!-- Load Bludit Plugins: Page End -->
				<?php Theme::plugins('pageEnd'); ?>
     
        </div>
       </section>
      </div>
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
                            <a href="<?php echo $lPage->permalink() ?>">
                                <?php echo $lPage->title() ?>
                            </a>
							<div class="navbar-clean-pro">
							 <?php echo $page->date(); ?>
							</div>
                        </li>
                        <?php endforeach ?>
                        <?php endif ?>
                    </ul>
        </div>
      
       </div>
      </div>
     </main>
          
    </div>
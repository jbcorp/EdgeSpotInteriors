<?php

?>
<section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
    
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".living">
          <h5>Living Room</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".dining">
          <h5>Dining Room</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".bath">
          <h5>Bathroom</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".bed">
          <h5>Bedroom</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".kitchen">
          <h5>Kitchen</h5>
          </a></li>
      </ul>
    </div>
    <!--/Portfolio Filters --> 
    
    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 
        <!-- Portfolio Item -->
        <?php 
	       	//scan "uploads" folder and display them accordingly
		   $catg = "living";
	       $folder = "images/portfolio/".$catg;
	       $results = scandir('images/portfolio/'.$catg);
		   $count = 1;
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo '
				<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four '.$catg .' isotope-item">
					<div class="portfolio_img"> <img src="'.$folder .'/'. $result.'"  alt="Living Room '.$count.'"> </div>        
					<div class="item_overlay">
						<a href="'.$folder . '/'. $result.'" class="item_info fancybox"> 
							<h4 class="project_name">Living Room '.$count.'</h4> 
						</a>
					</div>
				</div>';
	       	}
			$count++;
	       }
	    ?>
	    <!-- Portfolio Item -->
	  
	  <!-- Portfolio Item -->
        <?php 
	       	//scan "uploads" folder and display them accordingly
		   $catg = "dining";
	       $folder = "images/portfolio/".$catg;
	       $results = scandir('images/portfolio/'.$catg);
		   $count = 1;
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo '
				<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four '.$catg .' isotope-item">
					<div class="portfolio_img"> <img src="'.$folder .'/'. $result.'"  alt="Dining Room '.$count.'"> </div>        
					<div class="item_overlay">
						<a href="'.$folder . '/'. $result.'" class="item_info fancybox"> 
							<h4 class="project_name">Dining Room '.$count.'</h4> 
						</a>
					</div>
				</div>';
	       	}
			$count++;
	       }
	    ?>
	    <!-- Portfolio Item -->
		
		<!-- Portfolio Item -->
        <?php 
	       	//scan "uploads" folder and display them accordingly
		   $catg = "bath";
	       $folder = "images/portfolio/".$catg;
	       $results = scandir('images/portfolio/'.$catg);
		   $count = 1;
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo '
				<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four '.$catg .' isotope-item">
					<div class="portfolio_img"> <img src="'.$folder .'/'. $result.'"  alt="Bathroom '.$count.'"> </div>        
					<div class="item_overlay">
						<a href="'.$folder . '/'. $result.'" class="item_info fancybox"> 
							<h4 class="project_name">Bathroom '.$count.'</h4> 
						</a>
					</div>
				</div>';
	       	}
			$count++;
	       }
	    ?>
	    <!-- Portfolio Item -->
		
		<!-- Portfolio Item -->
        <?php 
	       	//scan "uploads" folder and display them accordingly
		   $catg = "bed";
	       $folder = "images/portfolio/".$catg;
	       $results = scandir('images/portfolio/'.$catg);
		   $count = 1;
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo '
				<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four '.$catg .' isotope-item">
					<div class="portfolio_img"> <img src="'.$folder .'/'. $result.'"  alt="Bedroom '.$count.'"> </div>        
					<div class="item_overlay">
						<a href="'.$folder . '/'. $result.'" class="item_info fancybox"> 
							<h4 class="project_name">Bedroom '.$count.'</h4> 
						</a>
					</div>
				</div>';
	       	}
			$count++;
	       }
	    ?>
	    <!-- Portfolio Item -->
		
		<!-- Portfolio Item -->
        <?php 
	       	//scan "uploads" folder and display them accordingly
		   $catg = "kitchen";
	       $folder = "images/portfolio/".$catg;
	       $results = scandir('images/portfolio/'.$catg);
		   $count = 1;
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo '
				<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four '.$catg .' isotope-item">
					<div class="portfolio_img"> <img src="'.$folder .'/'. $result.'"  alt="Kitchen '.$count.'"> </div>        
					<div class="item_overlay">
						<a href="'.$folder . '/'. $result.'" class="item_info fancybox"> 
							<h4 class="project_name">Kitchen '.$count.'</h4> 
						</a>
					</div>
				</div>';
	       	}
			$count++;
	       }
	    ?>
	    <!-- Portfolio Item -->
      
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
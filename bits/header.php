<div class="navbar main-navbar" role="navigation">
    <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $BASE_URL;?>">
				<img src="<?php echo $CDN_IMGS;?>img/logo.png" alt="<?php echo $SITE_NAME;?>">
			</a>
		</div>
		<div class="navbar-collapse collapse" style="height: 1px;">
			<ul class="nav navbar-nav">
				<?php
				if($mens_collections_count > 0){
					?>
					<li>
						<a href="<?php echo $BASE_URL;?>collections.php?g=0" class="dropdown-toggle">Men</a>
						<ul class="dropdown-menu grouped" role="menu">
							<li role="presentation" class="dropdown-header">Choose a Collection.</li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $BASE_URL;?>collections.php?g=0">View All</a></li>
							<?php
							$i = 0;
							for($i;$i<$mens_collections_count;$i++){
								echo '<li role="presentation">'
										. '<a role="menuitem" tabindex="-1" href="' . $BASE_URL . 'clothes.php?id=' . $mens_collections[$i]['clothes_id'] . '" data-img="' . $BASE_URL . 'img/clothes/' . $mens_collections[$i]['clothes_id'] . '/cover.png">'
											. $mens_collections[$i]['clothes_title']
										. '</a>'
									. '</li>';
							}
							?>
							<li role="presentation">
								<div class="cover-banner">
									<img src="">
								</div>
							</li>
						</ul>
						<ul class="dropdown-menu full-width grouped">
							<li role="presentation" class="dropdown-header">&nbsp;</li>
							<li role="presentation" class="dropdown-header">&nbsp;</li>
							<?php
							$i = 0;
							for($i;$i<$mens_collections_count;$i++){
								echo '<li role="presentation" class="dropdown-header">&nbsp;</li>';
							}
							?>
						</ul>
					</li>
					<?php
				}
				if($womens_collections_count > 0){
					?>
					<li>
						<a href="<?php echo $BASE_URL;?>collections.php?g=1" class="dropdown-toggle">Women</a>
						<ul class="dropdown-menu grouped" role="menu">
							<li role="presentation" class="dropdown-header">Choose a Collection.</li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $BASE_URL;?>collections.php?g=1">View All</a></li>
							<?php
							$i = 0;
							for($i;$i<$womens_collections_count;$i++){
								echo '<li role="presentation">'
										. '<a role="menuitem" tabindex="-1" href="' . $BASE_URL . 'clothes.php?id=' . $womens_collections[$i]['clothes_id'] . '" data-img="' . $BASE_URL . 'img/clothes/' . $womens_collections[$i]['clothes_id'] . '/cover.png">'
											. $womens_collections[$i]['clothes_title']
										. '</a>'
									. '</li>';
							}
							?>
							<li role="presentation">
								<div class="cover-banner">
									<img src="">
								</div>
							</li>
						</ul>
						<ul class="dropdown-menu full-width grouped">
							<li role="presentation" class="dropdown-header">&nbsp;</li>
							<li role="presentation" class="dropdown-header">&nbsp;</li>
							<?php
							$i = 0;
							for($i;$i<$womens_collections_count;$i++){
								echo '<li role="presentation" class="dropdown-header">&nbsp;</li>';
							}
							?>
						</ul>
					</li>
					<?php
				}
				?>
				<li>
					<a href="<?php echo $BASE_URL;?>index_v1.php" class="dropdown-toggle">Custom</a>
					<ul class="dropdown-menu" role="menu">
						<li role="presentation" class="dropdown-header">Start from scratch. What would you like?</li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $BASE_URL;?>index_v1.php">View Gallery</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $BASE_URL;?>order.php">Submit your Request</a></li>
					</ul>
					<ul class="dropdown-menu full-width">
						<li role="presentation" class="dropdown-header">&nbsp;</li>
						<li role="presentation" class="dropdown-header">&nbsp;</li>
						<li role="presentation" class="dropdown-header">&nbsp;</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo $BASE_URL;?>merchandise.php" class="dropdown-toggle">Merchandise</a>
					<ul class="dropdown-menu" role="menu">
						<li role="presentation" class="dropdown-header">Oh and I also make shirts and stuff</li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $BASE_URL;?>merchandise.php">View all Merchandise</a></li>
						<?php
						$i = 0;
						for($i;$i<$merchandise_count;$i++){
							echo '<li role="presentation">'
									. '<a role="menuitem" tabindex="-1" href="' . $BASE_URL . 'merchandise.php?c=' . $merchandise[$i]['category_id'] . '">' . $merchandise[$i]['category_title'] . '</a>'
								. '</li>';
						}
						?>
					</ul>
					<ul class="dropdown-menu full-width">
						<li role="presentation" class="dropdown-header">&nbsp;</li>
						<li role="presentation" class="dropdown-header">&nbsp;</li>
						<?php
						$i = 0;
						for($i;$i<$merchandise_count;$i++){
							echo '<li role="presentation" class="dropdown-header">&nbsp;</li>';
						}
						?>
					</ul>
				</li>
				<li>
					<a href="<?php echo $BASE_URL;?>about.php" class="dropdown-toggle">Info</a>
					<ul class="dropdown-menu" role="menu">
    					<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0);" id="contact_link">Contact</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $BASE_URL;?>about.php">About Coat & Tails</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $BASE_URL;?>info_rescue.php">Fundraisers</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $BASE_URL;?>info_artists.php">Artist Application</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $BASE_URL;?>faq.php">FAQ</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $BASE_URL;?>pricing.php">Pricing</a></li>
					</ul>
					<ul class="dropdown-menu full-width">
						<li role="presentation" class="dropdown-header">&nbsp;</li>
						<li role="presentation" class="dropdown-header">&nbsp;</li>
						<li role="presentation" class="dropdown-header">&nbsp;</li>
						<li role="presentation" class="dropdown-header">&nbsp;</li>
                        <li role="presentation" class="dropdown-header">&nbsp;</li>
    					<li role="presentation" class="dropdown-header">&nbsp;</li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="<?php echo $BASE_URL;?>cart.php" id="cart_link">
						<span class="glyphicon glyphicon-shopping-cart"></span>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="http://www.facebook.com/pages/Coat-and-Tails-Pet-Portraits/128628673951387" class="social_icon" target="_blank"><img src="<?php echo $CDN_IMGS;?>img/facebook.png"></a>
					<a href="http://ahotbubbleofpoison.tumblr.com/" class="social_icon" target="_blank"><img src="<?php echo $CDN_IMGS;?>img/tumblr.png"></a>
					<a href="http://instagram.com/coatandtails/" class="social_icon" target="_blank"><img src="<?php echo $CDN_IMGS;?>img/ig.png"></a>
					<a href="https://twitter.com/coatandtails" class="social_icon" target="_blank"><img src="<?php echo $CDN_IMGS;?>img/twitter.png"></a>
				</li>
			</ul>
		</div>
	</div>
</div>
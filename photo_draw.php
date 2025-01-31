<?php
$PAGE_DESCRIPTION = $CURRENT_PAGE_NAME = $CURRENT_PAGE_TYPE = 'Photograph or Draw Portrait';

$target_mode = '';
include_once(dirname(__FILE__) . '/defChecks.php');

if(isset($_SESSION['target_mode'])){
	$target_mode = $_SESSION['target_mode'];
}
if(isset($_GET['m'])){
	$target_mode = isSetAndNotDefault('', 'GET', 'm', false);
  $_SESSION['target_mode'] = $target_mode;
}

if($target_mode != ''){
  closeConnections();
  header("Location:" . $BASE_URL . "frame.php");
  exit();
}

closeConnections();

commonHeaders();
?><html lang="en">
<head>
	<?php echo commonMetaHeader();?>
</head>
<body class="f photo_draw">

	<?php include_once(dirname(__FILE__) . '/bits/header.php');?>

	<div class="container sub-header">
		
	</div>

	<div class="container w-bg center">
		<div class="row">
			<div class="col-sm-12">
				<h2>Do you want a photo edit or an actual drawing?</h2>
			</div>
			<div class="col-sm-10 col-sm-offset-1">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-3">
						<a href="<?php echo $_SERVER['PHP_SELF'];?>?m=0" class="btn btn-lg btn-block btn-inverted">Photo Edit</a>
					</div>
					<div class="col-sm-3">
						<a href="<?php echo $_SERVER['PHP_SELF'];?>?m=1" class="btn btn-lg btn-block btn-inverted">Drawing</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4">
						<hr>
						<div class="mode_diffs">Below is the basic difference:</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<img class="res-img" src="<?php echo $CDN_IMGS;?>img/photo_mode.jpg">
						<div class="mode_title">Photo Edit</div>
						<div class="mode_process">For the photo edit option, I edit one of the photos you upload onto the costume you select.</div>
					</div>
					<div class="col-sm-4 col-sm-offset-2">
						<img class="res-img" src="<?php echo $CDN_IMGS;?>img/draw_mode.jpg">
						<div class="mode_title">Drawing</div>
						<div class="mode_process">For the drawing option, I draw the pet's face onto the costume you select at the size you want.</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12">
					<hr>
						
					</div>
				</div>

				<div class="row">
					<h2>Photo Edit Process</h2>
				</div>
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<div class="mode_process">Step 1: You send a photo.</div>
						<img class="res-img" src="<?php echo $CDN_IMGS;?>img/photo_draw/1.jpg">
						
					</div>
					<div class="col-sm-4 col-sm-offset-1">
						<div class="mode_process">Step 2: I isolate the pet's face.</div>
						<img class="res-img" src="<?php echo $CDN_IMGS;?>img/photo_draw/2.jpg">
						
					</div>
					<div class="col-sm-4 col-sm-offset-1">
						<div class="mode_process">Step 3: I add the face to the clothes you just selected.</div>
						<img class="res-img" src="<?php echo $CDN_IMGS;?>img/photo_draw/3.jpg">
						
					</div>
					<div class="col-sm-4 col-sm-offset-1">
						<div class="mode_process">Step 4 (optional): I frame it.</div>
						<img class="res-img" src="<?php echo $CDN_IMGS;?>img/photo_draw/4.jpg">
						
					</div>
					
				</div>

				<div class="row">
						<a href="<?php echo $_SERVER['PHP_SELF'];?>?m=0" style="max-width:50%;margin-right:auto;margin-left:auto;margin-top: 25px;" class="btn btn-lg btn-block btn-inverted">Get a Photo Edit ></a>
				</div>


					<div class="row">
					<div class="col-sm-12">
					<hr>
						
					</div>
				</div>
				<div class="row">
					<h2>Drawing Process</h2>
				</div>
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<div class="mode_process">Step 1: You send a photo.</div>
						<img class="res-img" src="<?php echo $CDN_IMGS;?>img/photo_draw/2_draw.jpg">
						
					</div>
					<div class="col-sm-4 col-sm-offset-1">
						<div class="mode_process">Step 2: I draw it onto the clothes you select.</div>
						<img class="res-img" src="<?php echo $CDN_IMGS;?>img/photo_draw/1_draw.jpg">
						
					</div>
				</div>
					
					<div class="row">
						
							<a href="<?php echo $_SERVER['PHP_SELF'];?>?m=1" style="max-width:50%;margin-right:auto;margin-left:auto;margin-top: 25px;" class="btn btn-lg btn-block btn-inverted">Get a Drawing ></a>

					</div>

				<div class="row">
					<div class="col-sm-12">
					<hr>
						
					</div>
				</div>
				<div class="row">
					<h2>Plusses & Minuses</h2>
				</div>
				<div class="row descr">
					<div class="col-sm-4 col-sm-offset-1">
						<h2>Photo Edit</h2>
                        <p>For the photo edit option, I edit one of the photos you upload onto the costume you select.</p>
						<h3>Plusses</h3>
						<ul>
    						<li>Cheaper, starting at $30</li>
						    <li>Faster turnaround</li>
						    <li>If you upload a good photo, then it often looks better than the drawing. My drawings of clothes are relatively realistic, so a good photo works pretty well</li>
						</ul>
						<h3>Minuses</h3>
						<ul>
							<li>If the lighting is different from the costume you choose, the composition will be inconsistent.</li>
							<li>If the photo is blurry or grainy, it won't look as good as a drawing.</li>
							<li>If the photo is taken from a perspective that differs from the drawing, it won't come out as well - it will look photo-edited.</li>
							<li>Because most people use their phones to take photos, I have to cap the size to 11"x14". So basically with this option, you cannot get a print larger than 11"x14".</li>
						</ul>
					</div>
					<div class="col-sm-4 col-sm-offset-2">
						<h2>Drawing</h2>
                        <p>For the drawing option, I draw the pet's face onto the costume you select at the size you want.</p>
						<h3>Plusses</h3>
						<ul>
							<li>It looks like it was drawn by the same hand. After all, it was. This is rarely the case with the photo edit option</li>
							<li>I can draw it up to 20"x24".</li>
						</ul>
						<h3>Minuses</h3>
						<ul>
							<li>More expensive: starting at $96.</li>
							<li>Slower turnaround. It takes me longer to draw it.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row footer-row">
			<div class="col-sm-12">
				<div class="pull-right">
					<a href="javascript:void(0);" id="start_over">Start over</a>
				</div>
			</div>
		</div>
	</div>

	<?php echo commonFoot();?>
	<script>
	window.init.base_url="<?php echo $BASE_URL;?>";
	</script>
</body>
</html>
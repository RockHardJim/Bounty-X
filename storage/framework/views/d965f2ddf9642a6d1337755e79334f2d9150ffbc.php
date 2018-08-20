<?php $__env->startSection('content'); ?>

		<main id="listar-main" class="listar-main listar-haslayout">
			<div class="listar-themepost listar-placespost listar-detail listar-detailvone">
				<figure class="listar-featuredimg"><img src="<?php echo e(url('upload/images/')); ?>/<?php echo $bounties[0]->image; ?>" alt="image description"></figure>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-postcontent">
								<h1><?php echo $bounties[0]->title; ?><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h1>
								<div class="listar-reviewcategory">
									<ul class="listar-postinfotags">
										<li>
											<div class="listar-btnquickinfo">
												<a class="listar-btnshare" href="javascript:void(0);">
													<i class="icon-share3"></i>
													<span>share</span>
												</a>
												<div class="listar-btnquickinfo">
													<div class="listar-shareicons">
														<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
														<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
														<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="listar-themepostfoot">
									<ul>
										<li>
											<i class="icon-icons74"></i>
											<span><?php echo $bounties[0]->latitude; ?> |  <?php echo $bounties[0]->longitude; ?></span>
										</li>
										<li>
											<i class="icon-icons20"></i>
											<span>Ends <span> </span> <?php echo $bounties[0]->ends; ?></span>
										</li>
										<li>
											<i class="icon-global"></i>
											<span><a href="#">REXP: <?php echo $pool; ?></a></span>
										</li>
									</ul>
								</div>
							</div>
							<div class="listar-themetabs">
								<ul class="listar-themetabnav" role="tablist">
									<li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
									<li role="presentation"><a href="#projects" aria-controls="projects" role="tab" data-toggle="tab">Projects</a></li>
									<li role="presentation"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
								</ul>
								<div class="tab-content listar-themetabcontent">
									<div role="tabpanel" class="tab-pane active listar-overview" id="overview">
										<div class="listar-leftbox">
											<p><?php echo $bounties[0]->description; ?></p>
										</div>
		
									</div>
									<div role="tabpanel" class="tab-pane listar-pricing" id="projects">
										<ul class="listar-prices">
											<li>
Projects have not  been upvoted yet
											</li>
										</ul>
									</div>
									<div role="tabpanel" class="tab-pane listar-addressmaplocation" id="location">
										<div id="listar-postlocationmap" class="listar-postlocationmap"></div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('citizen.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
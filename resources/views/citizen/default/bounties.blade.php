<?php 
die(var_dump($user)); 
?>
@extends('citizen/layout/app')
@section('content')

			<div id="listar-content" class="listar-content">
				<div class="listar-listing listar-listingvtwo">
					<div id="listar-mapclustring" class="listar-mapclustring">
						<div class="listar-maparea">
							<div id="listar-listingmap" class="listar-listingmap"></div>
							<div class="listar-mapcontrols">
								<span id="doc-mapplus"><i class="fa fa-plus"></i></span>
								<span id="doc-mapminus"><i class="fa fa-minus"></i></span>
								<span id="doc-lock"><i class="fa fa-lock"></i></span>
								<span id="listar-geolocation"><i class="fa fa-crosshairs"></i></span>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
						<div class="row">
							<div class="listar-listingarea">
								<div class="listar-themeposts listar-placesposts listar-gridview">
                        <?php
                        if(is_null($bounties))
                            {
                                exit();
                            }
                            else
                            {
                            ?>
                            <?php foreach($bounties as $bounty){ ?>
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg">
											<a href="http://localhost/citizen4/public/bounty/<?php echo $bounty->id; ?>"><img src="{{ url('upload/images/') }}/<?php echo $bounty->image; ?>" alt="image description"></a>
											<div class="listar-postcontent">
												<h3><a href="http://localhost/citizen4/public/bounty/<?php echo $bounty->id; ?>"><?php echo $bounty->title; ?></a></h3>
												<div class="listar-themepostfoot">
													<div class="listar-postbtns">
														<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
														<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
														<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
																<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
															</div>
															<a class="listar-btnshare" href="javascript:void(0);">
																<i class="icon-share3"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</figure>
									</div>
                            <?php } ?>
                                <?php
    }
    ?>
								</div>
                                
                                
                                
							</div>
						</div>
					</div>
				</div>
			</div>


    <?php
    if(is_null($bounties))
    {
        exit();
    }
    else
    {
    ?>
        <script type="text/javascript">
            var data = {
	           "status": 'found',
               <?php foreach($bounties as $bounty){ ?>
	               "listing": [
                    {
			             "id": "<?php echo $bounty->id; ?>",
			             "longitude": <?php echo $bounty->longitude; ?>,
			             "latitude": <?php echo $bounty->latitude; ?>,
			             "image": "{{ url('upload/images/') }}/<?php echo $bounty->image; ?>",
			             "subjects": "<?php echo $bounty->description; ?>",
			             "title": "<?php echo $bounty->title; ?>",
			             "url": "http://localhost/citizen4/public/bounty/<?php echo $bounty->id; ?>",
			             "featured": 'no',
			             "marker": 'citizen/images/icons/markerone.png',
                    },
                   	]
                    
                    <?php } ?>
                }
        </script>
    <?php
    }
    ?>
@stop
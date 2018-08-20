@extends('citizen.layout.app')

@section('content')
		<div class="listar-mapbanner">
			<div id="listar-listingmap" class="listar-listingmap"></div>
			<div class="listar-mapcontrols">
				<span id="doc-mapplus"><i class="fa fa-plus"></i></span>
				<span id="doc-mapminus"><i class="fa fa-minus"></i></span>
				<span id="doc-lock"><i class="fa fa-lock"></i></span>
				<span id="listar-geolocation"><i class="fa fa-crosshairs"></i></span>
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
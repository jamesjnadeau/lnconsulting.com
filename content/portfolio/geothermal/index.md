/*
Title: Geothermal
Description: L.N. Consulting is a mechanical, electrical, and energy services engineering design firm, with geothermal and renewable energy systems integration experience
*/


# Geothermal

<div>
	<div class="row">
		<div class="col-md-6" >
			<ul class="list-group">
				<a class="list-group-item" href="/portfolio/geothermal/champlain-college-perry-hall-renovation-project" data-img-url="/files/champlain_perry-hall.jpg" >
					<h5 class="list-group-item-heading">Champlain College Perry Hall Renovation Project, 	    Burlington, VT</h5>
					<p class="list-group-item-text small">
								LEED platinum
					</p>
				</a>
				<a class="list-group-item" href="/portfolio/geothermal/burlington-school-district-cp-smith-school-renovation" >
					<h5 class="list-group-item-heading">CP Smith School Renovation, 	    Burlington, VT</h5>
					<p class="list-group-item-text small">

					</p>
				</a>
				<a class="list-group-item" href="/portfolio/geothermal/crowe-residence" >
					<h5 class="list-group-item-heading">Crowe Residence, Shelburne, VT</h5>
					<p class="list-group-item-text small">

					</p>
				</a>
				<a class="list-group-item" href="/portfolio/geothermal/burlington-school-district-barnes-school-renovation" >
					<h5 class="list-group-item-heading">Lawrence Barnes School Renovation, 	    Burlington, VT</h5>
					<p class="list-group-item-text small">

					</p>
				</a>
				<a class="list-group-item" href="/portfolio/nrg-systems-expansion-project" data-img-url="/files/nrg-systems.jpg"  >
					<h5 class="list-group-item-heading">NRG Systems Expansion Project, 	    Hinesburg, VT</h5>
					<p class="list-group-item-text small">
								LEED gold
					</p>
				</a>
				<a class="list-group-item" href="/portfolio/geothermal/kalichstein-residence" >
					<h5 class="list-group-item-heading">Waitsfield, VT Residence</h5>
					<p class="list-group-item-text small">

					</p>
				</a>
				<a class="list-group-item" href="/portfolio/geothermal/waring-residence" >
					<h5 class="list-group-item-heading">Waring Residence, 	    South Hero, VT</h5>
					<p class="list-group-item-text small">

					</p>
				</a>

			</ul>
		</div>
		<div class="col-md-6" >
			<img id="thumbnail_img" class="img-responsive img-rounded" src="/files/geothermal.jpg" >
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$thumbnail = $('#thumbnail_img');
		$('a.list-group-item').hover(function() {
			$this = $(this);
			var data_url = $this.attr('data-img-url');
			if(data_url) {
				console.log(data_url);
				$thumbnail.attr('src', data_url);
			}
		});
		
	});
</script>
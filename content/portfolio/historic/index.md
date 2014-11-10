/*
Title: Historic
Description: L.N. Consulting is a mechanical, electrical, and energy services engineering design firm, with geothermal and renewable energy systems integration experience
*/


# Historic

<div>
	<div class="row">
		<div class="col-md-6" >
			<ul class="list-group">
			<a class="list-group-item" href="/portfolio/historic/champlain-college-aiken-hall-renovation-project" data-img-url="/files/champlain-aiken-hall.jpg" >
				<h5 class="list-group-item-heading">Champlain College Aiken Hall Renovation Project, 	    Burlington, VT</h5>
				<p class="list-group-item-text small">
						    LEED gold
				</p>
			</a>
			<a class="list-group-item" href="/portfolio/historic/champlain-college-perry-hall-renovation-project" >
				<h5 class="list-group-item-heading">Champlain College Perry Hall Renovation Project, 	    Burlington, VT</h5>
				<p class="list-group-item-text small">
						    LEED platinum
				</p>
			</a>
			<a class="list-group-item" href="/portfolio/middlebury-college-franklin-environmental-center-at-hillcrest-hall" data-img-url="/files/middlebury_franklin.jpg" >
				<h5 class="list-group-item-heading">Middlebury College Franklin Environmental Center at Hillcrest Hall, Middlebury, VT</h5>
				<p class="list-group-item-text small">
						    LEED platinum
				</p>
			</a>
			<a class="list-group-item" href="/portfolio/historic/middlebury-college-%E2%80%93-proctor-hall-renovation-project" >
				<h5 class="list-group-item-heading">Middlebury College ? Proctor Hall Renovation Project, 	    Middlebury, VT</h5>
				<p class="list-group-item-text small">
						    
				</p>
			</a>
			<a class="list-group-item" href="/portfolio/historic/burlington-city-of-%E2%80%93-moran-center-project" >
				<h5 class="list-group-item-heading">Moran Center Project, 	    Burlington, VT</h5>
				<p class="list-group-item-text small">
						    
				</p>
			</a>
			<a class="list-group-item" href="/portfolio/historic/shelburne-farms-pv-installation-project" data-img-url="/files/shelburne_farms.jpg" >
				<h5 class="list-group-item-heading">Shelburne Farms PV Installation Project, 	    Shelburne, VT</h5>
				<p class="list-group-item-text small">
						    
				</p>
			</a>
			<a class="list-group-item" href="/portfolio/historic/shelburne-farms-residential-learning-center" >
				<h5 class="list-group-item-heading">Shelburne Farms Residential Learning Center, 	    Shelburne, VT</h5>
				<p class="list-group-item-text small">
						    
				</p>
			</a>
			<a class="list-group-item" href="/portfolio/teal-farm" data-img-url="/files/teal-farm.jpg" >
				<h5 class="list-group-item-heading">Teal Farm, 	    Huntington, VT</h5>
				<p class="list-group-item-text small">
						    
				</p>
			</a>
			<a class="list-group-item" href="/portfolio/historic/university-of-vermont-%E2%80%93-given-building-infill-project" >
				<h5 class="list-group-item-heading">University of Vermont, Given Building Infill Project, 	    Burlington, VT</h5>
				<p class="list-group-item-text small">
						    LEED gold
				</p>
			</a>

			</ul>
		</div>
		<div class="col-md-6" >
			<img id="thumbnail_img" class="img-responsive img-rounded" src="/files/shelburne_farms.jpg" >
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
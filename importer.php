<?php
require 'querypath/qp.php';


$base_url = 'http://lnconsult.herokuapp.com';

$sub_url = '/portfolio/plant-systems/';
$title = 'Plant Systems';


//ensure the directory exists
$dir = '/home/codio/workspace/content'.$sub_url;
if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}
echo $base_url.$sub_url.PHP_EOL;

$html = file_get_contents($base_url.$sub_url);

$root = htmlqp($html);
$root = $root->find('#subpageText');
$count = 0;
$index_ul = '';
foreach($root as $value) {
	$dds = $value->find('dd');
	foreach($dds as $dd) {
		
		$link = $dd->find('a')->attr('href');
		//echo $link.PHP_EOL;
		
		$desc = $dd->find('a')->innerhtml();
		
		$street = $dd;
		$street->find('a')->remove();
		$street = explode(PHP_EOL, $street->text());
		
		
		//$street = str_replace(array('\r', '\n'), '', strip_tags($street->text()));
		
		if($link == '') {
			//echo '$bad_link'.PHP_EOL;
		} else {
			$ul = <<<END
			<a class="list-group-item" href="$link" >
				<h5 class="list-group-item-heading">$desc, {$street[1]}</h5>
				<p class="list-group-item-text small">
					{$street[2]}
				</p>
			</a>
END;
			$index_ul .= $ul.PHP_EOL;
			//echo $ul.PHP_EOL;
			//echo $base_url.$link.PHP_EOL;
			$place_html = file_get_contents($base_url.$link);
			$place_root = htmlqp($place_html);
			$place_root = $place_root->find('#subpageText');

			$title = $place_root->find('h3')->text();
			$street = $place_root->find('h4')->text();

			$text = '';
			$ps = $place_root->find('p');
			foreach($ps as $p) {
				$text .= '<p>'.$p->text().'</p>'.PHP_EOL.'				';
			}

			$img =  $place_root->find('img')->attr('src');

			$doc = <<<END
/*
Title: $street
Description: L.N. Consulting is a mechanical, electrical, and energy services engineering design firm, with geothermal and renewable energy systems integration experience
*/

# $title

<div>
	<div class="row">
		<div class="col-md-6" >
			<div class="well" >
				<h3>$street</h3>
				$text
			</div>
		</div>
		<div class="col-md-6" >
			<img class="img-responsive img-rounded" src="$img" >
		</div>
	</div>
</div>
END;
			//echo $doc.PHP_EOL;
			//echo '/home/codio/workspace/content'.$link.PHP_EOL;
			//die();
			file_put_contents('/home/codio/workspace/content'.$link.'.md', $doc);
			
		}
	}
}

$index_md = <<<END
/*
Title: $title
Description: L.N. Consulting is a mechanical, electrical, and energy services engineering design firm, with geothermal and renewable energy systems integration experience
*/


# $title

<div>
	<div class="row">
		<div class="col-md-6" >
			<ul class="list-group">
				$index_ul
			</ul>
		</div>
	</div>
</div>
			
END;
file_put_contents('/home/codio/workspace/content'.$sub_url.'index.md', $index_md);


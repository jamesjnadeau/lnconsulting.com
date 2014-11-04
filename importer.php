<?php
require 'querypath/src/qp.php';


$base_url = 'http://http://lnconsult.herokuapp.com/';
$sub_url = '/portfolio/renewable-energy/'
$html = curl_load($base_url.$sub_url);

require 'QueryPath/QueryPath.php';
$root = htmlqp($html);
$root = $root->find('ul.members li');
$count = 0;
foreach($root as $value)
{
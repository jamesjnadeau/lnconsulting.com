<?php

/**
 * Example hooks for a Pico plugin
 *
 * @author Gilbert Pellegrom
 * @link http://pico.dev7studios.com
 * @license http://opensource.org/licenses/MIT
 */
class Page_Animation {

	public function before_render(&$twig_vars, &$twig, &$template)
	{
		$twig_vars['page_animation_in'] ='fadeInDown';
		$twig_vars['page_animation_out'] ='fadeOutDownBig';
	}

}

?>
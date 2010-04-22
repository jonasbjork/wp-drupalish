<?php

/**
 * Create hyperlinks
 *
 * @param string $text The link text
 * @param string $path The URL
 * @param array $attributes Everything you want to have inside href-tag
 * @return string $l The hyperlink, formatted
 * @author Jonas Björk <jonas@jonasbjork.net>
 */
function l( $text, $path, array $attributes = array() ) {
	$attr = null;
	if ( isset( $attributes['title'] ) && strpos( $attributes['title'], '<' ) !== false ) {
		$attributes['title'] = strip_tags( $attibutes['title']);
	}

	foreach ( $attributes as $a => $v ) {
		$attr .= $a . '="' . $v . '" ';
	}
 
	return '<a href="' . $path . '" ' . $attr .'>' . $text . '</a>';
}

/**
 * Get singular or plural form of an word
 *
 * @param int $count Number to check
 * @param string $singular The word in singular form
 * @param string $plural The word in plural form
 * @return string $str The word in correct form
 * @author Jonas Björk <jonas@jonasbjork.net>
 */
function format_plural( $count = 0, $singular = '', $plural = '' ) {
	if ( $count == 1 )
		return $singular;
	
	return $plural;
}

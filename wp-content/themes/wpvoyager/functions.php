<?php
/**
* Remove Gutenberg editor
*/
	
add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_block_editor_for_page', '__return_false');

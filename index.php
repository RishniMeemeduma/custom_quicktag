<?php
/*
Plugin name:Custom tags
Plugin URI:http://www.wordpress/customtags
Description:This is a test custom tags plugin
Author:Rishni Meemeduma
Author URI:http://www.ris.tt
*/
// Add Quicktags
function custom_tags() {

	if ( wp_script_is( 'quicktags' ) ) {
	?>
	<script type="text/javascript">
	QTags.addButton( 'bolt_tag', 'b', '<b>', '</b>', 'b', 'Bolt tag', 1 );
	QTags.addButton( 'center tag', 'center', '<center>', '</center>', 'c', 'center',  );
	QTags.addButton( 'Title tag', 'h1', '<h1>', '</h1>', 'h', 'Title tag',  );
	QTags.addButton( 'Link', 'a', '<a href>', '</a>', 'a', 'Link',  );
	QTags.addButton( 'order list', 'li', '<li>', '</li>', 'l', 'Order List',  );
	</script>
	<?php
	}

}
add_action( 'admin_print_footer_scripts', 'custom_tags' );


?>
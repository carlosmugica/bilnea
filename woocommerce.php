<?php

get_header();

?>

<div id="primary" class="main-row">
	<div id="content" role="main" class="span8 offset2">

		<?php

		if (is_product()) {
			include 'woocommerce/single.php';
		} else if (is_shop()) {
			include 'woocommerce/shop.php';
		} else if (is_archive()) {
			include 'woocommerce/archive.php';
		} else {
			woocommerce_content();
		}

		?>

	</div>
</div>

<?php

get_footer();

?>
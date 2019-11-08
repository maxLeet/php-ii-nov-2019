<?php
spl_autoload_register(
	function($class) {
		$filename = str_replace('\\', '/', $class) . '.php';
		require __DIR__ . '/' . $filename;
	}
);
use EntityRelationshipStats\EntitiesAvailable\EntitiesAvailable;

$availability1 = new EntitiesAvailable(3, 4, ['card', 'slide', 'slide_show'], ['article', 'product_detail_page', 'testimonial', 'blog']);
$availability2 = new EntitiesAvailable(4, 4, ['card', 'slide', 'slide_show', 'hero'], ['article', 'product_detail_page', 'sponsors', 'testimonial']);
$availability1_node_type_names = $availability1->getNodeTypeNamesAsString();
$availability2_paragraphs_totals = $availability2->getTotalNodeTypes();

echo $availability1_node_type_names;
echo $availability2_paragraphs_totals;
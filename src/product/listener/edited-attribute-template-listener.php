<?php
namespace Affilicious\Product\Listener;

use Affilicious\Common\Generator\Key_Generator_Interface;
use Affilicious\Common\Model\Slug;
use Affilicious\Attribute\Model\Attribute_Template;

if (!defined('ABSPATH')) {
	exit('Not allowed to access pages directly.');
}

class Edited_Attribute_Template_Listener
{
	/**
	 * An array of changed term IDs and slugs
	 *
	 * @var array
	 */
	protected $changed_terms = [];

	/**
	 * @var Key_Generator_Interface
	 */
	protected $key_generator;

	/**
	 * @since 0.9.2
	 * @param Key_Generator_Interface $key_generator
	 */
	public function __construct(Key_Generator_Interface $key_generator)
	{
		$this->key_generator = $key_generator;
	}

	/**
	 * @hook edit_aff_attribute_tmpl
	 * @since 0.9.2
	 * @param int $term_id
	 */
	public function before_edit($term_id)
	{
		$term = get_term($term_id, Attribute_Template::TAXONOMY, OBJECT);
		if(!($term instanceof \WP_Term)) {
			return;
		}

		$this->changed_terms[$term->term_id] = $term->slug;
	}

	/**
	 * @hook edited_aff_attribute_tmpl
	 * @since 0.9.2
	 * @param int $term_id
	 */
	public function after_edit($term_id)
	{
		global $wpdb;

		$term = get_term($term_id, Attribute_Template::TAXONOMY, OBJECT);
		if(!($term instanceof \WP_Term)) {
			return;
		}

		if(isset($this->changed_terms[$term->term_id])) {
			$old_slug = $this->changed_terms[$term->term_id];
			$new_slug = $term->slug;

			$old_key = $this->key_generator->generate_from_slug(new Slug($old_slug))->get_value();
			$new_key = $this->key_generator->generate_from_slug(new Slug($new_slug))->get_value();

			$wpdb->query("
				UPDATE $wpdb->postmeta
				SET meta_key = REPLACE(meta_key, '_affilicious_product_attribute_{$old_key}', '_affilicious_product_attribute_{$new_key}')
				WHERE meta_key LIKE '_affilicious_product_attribute_{$old_key}_%';
			");

			$wpdb->query("
				UPDATE $wpdb->postmeta
				SET meta_key = REPLACE(meta_key, '_affilicious_product_variants_-_attribute_{$old_key}', '_affilicious_product_variants_-_attribute_{$new_key}')
				WHERE meta_key LIKE '_affilicious_product_variants_-_attribute_{$old_key}_%'
			");
		}
	}
}
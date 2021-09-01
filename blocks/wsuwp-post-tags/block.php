<?php namespace WSUWP\Theme\WDS;

class Block_WSUWP_Post_Tags extends Block {

	protected static $block_name    = 'wsuwp/post-tags';
	protected static $default_attrs = array(
		'className' => '',
        'hide'      => false,
		'style'     => 'default',
		'prefix'    => '',
	);


	public static function render( $attrs, $content = '' ) {

		if ( ! static::is_set( $attrs, 'hide' ) ) {

			$wrapper_classes = 'wsu-meta-tags';

			static::add_class( $wrapper_classes, '', 'className', $attrs );
			static::add_class( $wrapper_classes, 'wsu-meta-tags--', 'style', $attrs );

			ob_start();

			if ( has_tag() ) {

				include __DIR__ . '/templates/default.php';

			}

			return ob_get_clean();

		} else {

			return '';
		}


	}


}
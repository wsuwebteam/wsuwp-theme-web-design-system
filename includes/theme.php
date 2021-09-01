<?php namespace WSUWP\Theme\WDS;


class Theme {


	protected static $version = '0.0.9';


	public static function get( $property ) {

		switch ( $property ) {
			case 'version':
				return self::$version;
			default:
				return '';
		}

	}


	public static function init() {

		self::load_class( 'query' );

        require_once __DIR__ . '/templates.php';
		require_once __DIR__ . '/scripts.php';
        require_once __DIR__ . '/blocks.php';
        require_once __DIR__ . '/customizer.php';
        require_once __DIR__ . '/menus.php';
		require_once __DIR__ . '/supports.php';
		require_once __DIR__ . '/wds_options.php';

	}


	public static function load_class( $class_slug ) {

		require_once get_template_directory() . '/classes/class-' . $class_slug . '.php';

	}

}

Theme::init();

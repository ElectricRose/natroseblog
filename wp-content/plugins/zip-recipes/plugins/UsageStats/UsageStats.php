<?php

namespace ZRDN;

class UsageStats {
	const DESCRIPTION = "Automatically create a recipe index from all your recipes.";
	const VERSION = "1.0";

	function __construct() {
		if ( $this->isDisabled() ) {
			return false;
		}

		add_action( "zrdn__init_hooks", array( $this, 'init_hooks' ) );
	}

	private function isDisabled()
	{
		$disabled = false;
		$pluginOptions = get_option(ZipRecipes::PLUGIN_OPTION_NAME, array());
		if(isset($pluginOptions[__CLASS__]) && $pluginOptions[__CLASS__]["active"]) {
			$disabled = false;
		}
		else {
			$disabled = true;
		}

		return $disabled;
	}

	public function init_hooks() {
		Util::log( "In init_hooks" );

		// Shortcode
		add_action("zrdn__usage_stats", array($this, 'load_piwik'));
	}

	public function load_piwik() {
		// show piwik script
		wp_enqueue_script("zrdn_piwik", plugins_url('scripts/piwik.js', __FILE__), /*deps*/ array(), /*version*/ "1.0", /*in_footer*/ true);
	}
}
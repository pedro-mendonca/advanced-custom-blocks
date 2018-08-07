<?php
/**
 * Control abstract.
 *
 * @package   Advanced_Custom_Blocks
 * @copyright Copyright(c) 2018, Advanced Custom Blocks
 * @license http://opensource.org/licenses/GPL-2.0 GNU General Public License, version 2 (GPL-2.0)
 */

namespace Advanced_Custom_Blocks\Blocks\Controls;

/**
 * Class Text
 */
class Text extends Control_Abstract {

	/**
	 * Control name.
	 *
	 * @var string
	 */
	public $name = 'text';

	/**
	 * Text constructor.
	 *
	 * @return void
	 */
	public function __construct() {
		parent::__construct();

		$this->label = __( 'Text', 'advanced-custom-blocks' );

		$this->options[] = new Option( array(
			'name'    => 'default',
			'label'   => __( 'Default Value', 'advanced-custom-blocks' ),
			'type'    => 'text',
			'default' => '',
		) );
		$this->options[] = new Option( array(
			'name'    => 'placeholder',
			'label'   => __( 'Placeholder Text', 'advanced-custom-blocks' ),
			'type'    => 'text',
			'default' => '',
		) );
		$this->options[] = new Option( array(
			'name'    => 'limit',
			'label'   => __( 'Character Limit', 'advanced-custom-blocks' ),
			'type'    => 'number',
			'default' => '',
		) );
	}
}
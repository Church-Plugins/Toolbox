<?php
/**
 * Models a Customizer heading, a Control just in name, it does not control any setting.
 *
 * @since   4.12.14
 *
 * @package ChurchPlugins\Setup\Customizer\Controls
 */

namespace ChurchPlugins\Setup\Customizer\Controls;

/**
 * Class Heading
 *
 * @since   1.0.6
 *
 * @package ChurchPlugins\Setup\Customizer\Controls
 */
class Heading extends _Control {

	/**
	 * Control's Type.
	 *
	 * @since 1.0.6
	 *
	 * @var string
	 */
	public $type = 'heading';

	/**
	 * Anyone able to set theme options will be able to see the header.
	 *
	 * @since 1.0.6
	 *
	 * @var string
	 */
	public $capability = 'edit_theme_options';

	/**
	 * The heading does not control any setting.
	 *
	 * @since 1.0.6
	 *
	 * @var array<string,mixed>
	 */
	public $settings = [];

	/**
	 * Render the control's content
	 *
	 * @since 1.0.6
	 */
	public function render_content() { ?>

		<h4 class="customize-control-heading">
			<?php echo esc_html( $this->label ); ?>
		</h4>

		<?php if ( ! empty( $this->description ) ) : ?>

			<p class="customize-control-heading-description">
				<?php echo wp_kses_post( $this->description ); ?>
			</p>

		<?php endif;
	}
}

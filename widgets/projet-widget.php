<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Elementor_Projet_Widget extends \Elementor\Widget_Base {

	public function get_style_depends() {
		return [ 'style' ];
	}

	public function get_name() {
        return 'projet';
    }

	public function get_title() {
        return esc_html__( 'Projet Stage', 'textdomain' );
    }

	public function get_icon() {
        return 'eicon-globe';
    }

    protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Boutton', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

			$this->add_control(
				'border',
				[
					'type' => \Elementor\Controls_Manager::SELECT,
					'label' => esc_html__( 'Bordure', 'textdomain' ),
					'default' => 'solid',
					'options' => [
						'none' => esc_html__( 'Vide', 'textdomain' ),
						'solid'  => esc_html__( 'Plein', 'textdomain' ),
					],
					'selectors' => [
						'{{WRAPPER}} .projet' => 'border-style: {{VALUE}};',
					],
				]
			);

			$this->add_control(
				'border_color',
				[
					'label' => esc_html__( 'Couleur de bordure', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'options' => [
						'red' => esc_html__( 'Rouge', 'textdomain' ),
						'green'  => esc_html__( 'Vert', 'textdomain' ),
						'blue' => esc_html__( 'Bleu', 'textdomain' ),
						'purple'  => esc_html__( 'Violet', 'textdomain' ),
					],
					'selectors' => [
						'{{WRAPPER}} .projet' => 'border-color: {{VALUE}}',
					],
				]
			);

			$this->add_control(
				'color',
				[
					'label' => esc_html__( 'Couleur du bouton', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'options' => [
						'red' => esc_html__( 'Rouge', 'textdomain' ),
						'green'  => esc_html__( 'Vert', 'textdomain' ),
						'blue' => esc_html__( 'Bleu', 'textdomain' ),
						'purple'  => esc_html__( 'Violet', 'textdomain' ),
						'var(--color)'  => esc_html__( 'Vert fluo', 'textdomain' ),
						'var(--color)'  => esc_html__( 'Vert fluo', 'textdomain' ),
					],
					'selectors' => [
						'{{WRAPPER}} .projet' => 'background-color: {{VALUE}}',
					],
				]
			);
			
			$this->add_control(
				'color_text',
				[
					'label' => esc_html__( 'Couleur du texte', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'options' => [
						'red' => esc_html__( 'Rouge', 'textdomain' ),
						'green'  => esc_html__( 'Vert', 'textdomain' ),
						'blue' => esc_html__( 'Bleu', 'textdomain' ),
						'purple'  => esc_html__( 'Violet', 'textdomain' ),
					],
					'selectors' => [
						'{{WRAPPER}} .projet' => 'color: {{VALUE}}',
					],
				]
			);

			$this->add_control(
				'widget_text',
				[
					'label' => esc_html__( 'Texte', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Default text', 'textdomain' ),
					'placeholder' => esc_html__( 'Texte', 'textdomain' ),
				]
			);

			$this->add_control(
				'gradient',
				[
					'label' => esc_html__( 'Gradient', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'Rien',
					'options' => [
						'' => esc_html__( 'Default', 'textdomain' ),
						'Prim' => esc_html__( 'Primaire', 'textdomain' ),
						'Second' => esc_html__( 'Secondaire', 'textdomain' ),
					],
				]
			);

			$this->add_control(
				'show_button',
				[
					'label' => esc_html__( 'Afficher le boutton', 'textdomain' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Afficher', 'textdomain' ),
					'label_off' => esc_html__( 'Cacher', 'textdomain' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);


		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		
		<a class="projet style gradient<?php echo $settings['gradient']; ?>">
			<?php echo $settings['widget_text']; ?>
		</a>
		<?php
	}
}
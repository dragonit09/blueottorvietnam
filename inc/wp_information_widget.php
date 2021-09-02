<?php 

class My_Information_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
				'My_Information_Widget',
				__('Information', 'translation_domain'), // Name
				array('description' => __('Information to contact', 'translation_domain'),)
		);
	}

	public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'Information' : null;
 
        isset($instance['address']) ? $address = $instance['address'] : null;
        isset($instance['phone']) ? $phone = $instance['phone'] : null;

        ?>

		<p>
            <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo esc_attr($address); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo esc_attr($phone); ?>">
        </p>
       
        <?php
    }

	public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['address'] = (!empty($new_instance['address']) ) ? strip_tags($new_instance['address']) : '';
        $instance['phone'] = (!empty($new_instance['phone']) ) ? strip_tags($new_instance['phone']) : '';

 
        return $instance;
    }

	public function widget($args, $instance) {
 
       
        $address = $instance['address'];
        $phone = $instance['phone'];
  
 
        $address_html = '<div class="infor-address"><img src="'.get_template_directory_uri() . '/assets/icons/address.svg" alt="Address" title="Address" /> '.$address.'</div>';
        $phone_html = '<div class="infor-phone"><img src="'.get_template_directory_uri() . '/assets/icons/phone.svg" alt="Phone" title="Phone" /> '.$phone.'</div>';
 
		echo $args['before_widget'];
		echo '<div class="information-icons">';
			echo (!empty($address) ) ? $address_html : null;
			echo (!empty($phone) ) ? $phone_html : null;
		echo '</div>';
		echo $args['after_widget'];
	}
}

// register My_Information_Widget widget
function register_my_information_widget() {
	register_widget('My_Information_Widget');
}
 
add_action('widgets_init', 'register_my_information_widget');
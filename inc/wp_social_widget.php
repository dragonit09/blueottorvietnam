<?php 

class My_Social_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
				'My_Social_Widget',
				__('Social Networks Profiles', 'translation_domain'), // Name
				array('description' => __('Links to Author social media profile', 'translation_domain'),)
		);
	}

	public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'My Social Profile' : null;
 
        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        ?>

		<p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
        </p>
 
        <?php
    }

	public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';
 
        return $instance;
    }

	public function widget($args, $instance) {
 
        $title = apply_filters('widget_title', $instance['title']);
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $linkedin = $instance['linkedin'];
 
        $facebook_profile = '<a class="facebook" href="' . $facebook . '"><img src="'.get_template_directory_uri() . '/assets/icons/facebook.svg" alt="Facebook" title="Facebook" /></a>';
        $twitter_profile = '<a class="twitter" href="' . $twitter . '"><img src="'.get_template_directory_uri() . '/assets/icons/twitter.svg" alt="Twitter" title="Twitter" /></a>';
        $linkedin_profile = '<a class="linkedin" href="' . $linkedin . '"><img src="'.get_template_directory_uri() . '/assets/icons/linkedin.svg" alt="Linkedin" title="Linkedin" /></a>';
 
		echo $args['before_widget'];
		echo '<div class="social-icons">';
			echo (!empty($twitter) ) ? $twitter_profile : null;
			echo (!empty($facebook) ) ? $facebook_profile : null;
			echo (!empty($linkedin) ) ? $linkedin_profile : null;
		echo '</div>';
		echo $args['after_widget'];
	}
}

// register My_Social_Widget widget
function register_my_social_profile() {
	register_widget('My_Social_Widget');
}
 
add_action('widgets_init', 'register_my_social_profile');
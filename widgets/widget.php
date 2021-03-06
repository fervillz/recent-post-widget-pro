<?php 

/**
 * @package    Recent_Posts_Widget_Pro
 * @since      0.1
 * @author     Fernando
 * @copyright  Copyright (c) 2016, Fernando
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */
class Recent_Post_Widget_Pro extends WP_Widget {

    /**
     * Constructor
     *
     * @return void
     **/
    function Recent_Post_Widget_Pro() {
        $widget_ops = array( 'classname' => 'CSS class name', 'description' => 'Description' );
        $this->WP_Widget( 'CSS class name', 'Title', $widget_ops );
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme
     * @param array  An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    function widget( $args, $instance ) {
        extract( $args, EXTR_SKIP );
        echo $before_widget;
        echo $before_title;
        echo 'Title'; // Can set this with a widget option, or omit altogether
        echo $after_title;

    //
    // Widget display logic goes here
    //

    echo $after_widget;
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    function update( $new_instance, $old_instance ) {

        // update logic goes here
        $updated_instance = $new_instance;
        return $updated_instance;
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance ) {
        //$instance = wp_parse_args( (array) $instance, array( array of option_name => value pairs ) );

        // display field names here using:
        // $this->get_field_id( 'option_name' ) - the CSS ID
        // $this->get_field_name( 'option_name' ) - the HTML name
        // $instance['option_name'] - the option value
    }
}

add_action( 'widgets_init', create_function( '', "register_widget( 'Recent_Post_Widget_Pro' );" ) );
 ?>
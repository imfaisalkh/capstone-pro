<!-- This file is used to markup the administration form of the widget. -->
<?php
    $ids = ! empty( $instance['ids'] ) ? $instance['ids'] : esc_html__( 'New ids', 'capstone-pro' );
?>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'ids' ) ); ?>"><?php esc_attr_e( 'Listing IDs:', 'capstone-pro' ); ?></label> 
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'ids' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'ids' ) ); ?>" type="text" value="<?php echo esc_attr( $ids ); ?>">
</p>
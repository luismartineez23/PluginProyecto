<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    PluginProyecto
 * @subpackage PluginProyecto/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
    function PluginProyectoWidgetPublicForm($args, $instance) {
    $title = apply_filters( 'widget_title', $instance['title'] );

    // los argumentos before y after del widget son definidos por el tema
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];

    // Aquí es donde ejecutaremos el código y mostramos la salida
    echo __( 'Inscríbete si tu institución está interesada en el proyecto', 'PluginProyectoSuscribe_widget_domain' );
    echo $args['after_widget'];
    ?>
    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
       <input type="hidden" name="action" value="PluginProyecto_suscribe">

        <p>
            <label for="solo-subscribe-name"><?php _e('Nombre:', 'subscribe-to-comments'); ?>
                <input type="name" name="name" id="solo-subscribe-name" size="22" value="" /></label>
            <label for="solo-subscribe-email"><?php _e('E-Mail:', 'subscribe-to-comments'); ?>
                <input type="email" name="email" id="solo-subscribe-email" size="22" value="" /></label>
            <label for="solo-subscribe-logo"><?php _e('logo:', 'subscribe-to-comments'); ?>
                <input type="url" name="url" id="solo-subscribe-logo" value="" /></label>
            <input type="submit" name="submit" value="<?php _e('Subscribe', 'subscribe-to-comments'); ?>" />
        </p>
    </form>
<?php
}
?>
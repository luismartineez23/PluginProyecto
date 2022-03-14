<?php

// Registrar y cargar el widget
function PluginProyecto_load_widget() {
    register_widget( 'PluginProyectoWidget' );
}
add_action( 'widgets_init', 'PluginProyecto_load_widget' );

// Creando el widget
class PluginProyectoWidget extends WP_Widget {

    function __construct() {
        parent::__construct(

// ID base del widget
            'PluginProyectoWidget',

// Nombre del widget que aparecerá en la UI
            __('PluginProyecto Widget', 'PluginProyecto_widget_domain'),

// Descripción del widget
            array( 'description' => __( 'Recoge las instituciones interesadas en participar en el proyecto piloto durante 2022/2023', 'PluginProyecto_widget_domain' ), )
        );
    }

// Creando la vista del widget del Frontend

    public function widget( $args, $instance ) {

        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/PluginProyecto-public-display.php';

        PluginProyectoWidgetPublicForm($args, $instance);
    }


// Creando la vista del widget del Backend
    public function form( $instance ) {

        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/PluginProyecto-admin-display.php';


        PluginProyectoWidgetAdminForm($instance, $this);
    }

// Actualizando el widget reemplazando la instancia antigua por la nueva
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
} // Class CarlosIIIJobsWidgetSuscribe ends here
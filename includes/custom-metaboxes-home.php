<?php
/* --------------------------------------------------------------
    1.- HOME: ABOUT SECTION
-------------------------------------------------------------- */
$cmb_home_about = new_cmb2_box(array(
    'id'            => $prefix . 'home_about_metabox',
    'title'         => esc_html__('Home: About Principal', 'tisserie'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
));

$group_field_id = $cmb_home_about->add_field(array(
    'id'          => $prefix . 'home_about_group',
    'name'      => esc_html__('Grupos del About', 'tisserie'),
    'description' => __('Items dentro del About', 'tisserie'),
    'type'        => 'group',
    'options'     => array(
        'group_title'       => __('Item {#}', 'tisserie'),
        'add_button'        => __('Agregar otro Item', 'tisserie'),
        'remove_button'     => __('Remover Item', 'tisserie'),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__('¿Estas seguro de remover este Item?', 'tisserie')
    )
));

$cmb_home_about->add_group_field($group_field_id, array(
    'id'   => 'bg_image',
    'name'      => esc_html__('Imagen de Fondo del Item', 'tisserie'),
    'desc'      => esc_html__('Cargar un fondo para este Item', 'tisserie'),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__('Cargar fondo', 'tisserie'),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'thumbnail'
));

$cmb_home_about->add_group_field($group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__('Título del Item', 'tisserie'),
    'desc'      => esc_html__('Ingrese el Título del Item', 'tisserie'),
    'type' => 'text'
));


$cmb_home_about->add_group_field($group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__('Descripción del Item', 'tisserie'),
    'desc'      => esc_html__('Ingrese la descripción del Item', 'tisserie'),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
));

/* --------------------------------------------------------------
    2.- HOME: VALUES SECTION
-------------------------------------------------------------- */
$cmb_home_values = new_cmb2_box(array(
    'id'            => $prefix . 'home_values_metabox',
    'title'         => esc_html__('Home: Valores Principal', 'tisserie'),
    'object_types'  => array('page'),
    'show_on'      => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'cmb_styles' => true,
    'closed'     => false
));

$group_field_id = $cmb_home_values->add_field(array(
    'id'          => $prefix . 'home_values_group',
    'name'      => esc_html__('Grupos del Valores', 'tisserie'),
    'description' => __('Items dentro del Valores', 'tisserie'),
    'type'        => 'group',
    'options'     => array(
        'group_title'       => __('Item {#}', 'tisserie'),
        'add_button'        => __('Agregar otro Item', 'tisserie'),
        'remove_button'     => __('Remover Item', 'tisserie'),
        'sortable'          => true,
        'closed'         => true,
        'remove_confirm' => esc_html__('¿Estas seguro de remover este Item?', 'tisserie')
    )
));

$cmb_home_values->add_group_field($group_field_id, array(
    'id'   => 'bg_image',
    'name'      => esc_html__('Imagen de Fondo del Item', 'tisserie'),
    'desc'      => esc_html__('Cargar un fondo para este Item', 'tisserie'),
    'type'    => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__('Cargar fondo', 'tisserie'),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'thumbnail'
));

$cmb_home_values->add_group_field($group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__('Título del Item', 'tisserie'),
    'desc'      => esc_html__('Ingrese el Título del Item', 'tisserie'),
    'type' => 'text'
));


$cmb_home_values->add_group_field($group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__('Descripción del Item', 'tisserie'),
    'desc'      => esc_html__('Ingrese la descripción del Item', 'tisserie'),
    'type' => 'wysiwyg',
    'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny' => false
    )
));


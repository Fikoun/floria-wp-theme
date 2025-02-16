<?php

class Floria_Menu_Walker extends Walker_Nav_Menu {

    // Ensure each menu item knows if it has children.
    public function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args = [], &$output = '' ) {
        $element->has_children = ! empty( $children_elements[ $element->ID ] );
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent  = str_repeat("\t", $depth);
        $classes = 'floria-sub';
        $output .= "\n$indent<ul class=\"$classes\">\n";
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent  = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? [] : (array) $item->classes;

        // If the item has children, add group + relative for the hover effect
        if ($item->has_children) {
            $classes[] = 'relative group';
        }

        $class_names = implode(' ', array_filter($classes));
        $output .= $indent . '<li class="' . esc_attr($class_names) . '">';

        $attributes  = ' href="' . esc_attr($item->url) . '"';
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= '<span>' . $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after . '</span>';
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}
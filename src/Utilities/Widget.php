<?php namespace MpLoader\Utilities ;


/**
 * Description of Widget
 *
 * @author shawnsandy
 */
class Widget {
    //put your code here
    
    public function __construct() {
        self::add_widget('sidebar', 'primary-sidebar','Main sidebar');
        self::add_widget('secondary sidebar', 'secondary-sidebar','Main sidebar');
    }
    
    public static function factory() {
        $factory = new Widget();
        return $factory;
    }
    
    
    /**
     * Deprecated use register sidebar
     * @param type $name
     * @param type $widget_id
     * @param type $description
     * @param type $id
     * @param type $div
     * @param type $title
     */
    public static function add_widget($name, $widget_id, $description = "", $id = 'widgets', $div = "aside", $title = 'h1') {
        //$widget_id = preg_replace(" ", "-", $name);
        register_sidebar(array(
            'name' => ucfirst($name),
            'id' => $widget_id,
            'description' => __($description),
            'before_widget' => '<' . $div . ' id="%1$s" class="widget %2$s">',
            'after_widget' => "</{$div}>",
            'before_title' => '<' . $title . ' class="widget-title">',
            'after_title' => '</' . $title . '>',
        ));
    }
    
    
}

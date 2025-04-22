<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Application Controller Class
 *
 * Superclass from which all application controllers extend.
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Libraries
 */

class CI_Controller {

    /**
     * CI Singleton instance
     *
     * @var CI_Controller
     */
    private static $instance;

    /**
     * Class constructor
     */
    public function __construct()
    {
        self::$instance = $this;

        // Assign all the class objects that were instantiated by the bootstrap file
        foreach (is_loaded() as $var => $class) {
            $this->$var = load_class($class);
        }

        $this->load = load_class('Loader', 'core');
        $this->load->initialize();

        log_message('debug', 'Controller Class Initialized');
    }

    /**
     * Get the CI singleton instance
     *
     * @return CI_Controller
     */
    public static function &get_instance(): CI_Controller
    {
        return self::$instance;
    }
}

// END CI_Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */

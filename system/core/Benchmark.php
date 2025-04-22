<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter Benchmark Class
 *
 * This class enables you to mark points and calculate the time difference
 * between them. Memory consumption can also be displayed.
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Libraries
 */

class CI_Benchmark {

    /**
     * List of all benchmark markers and their timestamps
     *
     * @var array
     */
    public $marker = [];

    /**
     * Set a benchmark marker
     *
     * @param   string  $name   Name of the marker
     * @return  void
     */
    public function mark($name)
    {
        $this->marker[$name] = microtime(true);
    }

    /**
     * Calculates the time difference between two marked points
     *
     * @param   string  $point1     Start marker
     * @param   string  $point2     End marker
     * @param   int     $decimals   Number of decimal places
     * @return  mixed
     */
    public function elapsed_time($point1 = '', $point2 = '', $decimals = 4)
    {
        if ($point1 === '') {
            return '{elapsed_time}';
        }

        if (!isset($this->marker[$point1])) {
            return '';
        }

        if (!isset($this->marker[$point2])) {
            $this->marker[$point2] = microtime(true);
        }

        return number_format($this->marker[$point2] - $this->marker[$point1], $decimals);
    }

    /**
     * Memory Usage
     *
     * Returns the {memory_usage} pseudo-variable.
     *
     * @return  string
     */
    public function memory_usage()
    {
        return '{memory_usage}';
    }
}

// END CI_Benchmark class

/* End of file Benchmark.php */
/* Location: ./system/core/Benchmark.php */

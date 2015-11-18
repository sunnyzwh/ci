<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CI Smarty
 *
 * Smarty templating for Codeigniter
 *
 * @package   CI Smarty
 * @author    Dwayne Charrington
 * @copyright 2015 Dwayne Charrington and Github contributors
 * @link      http://ilikekillnerds.com
 * @license   MIT
 * @version   3.0
 */

class Smartytest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
    }

    public function index()
    {
        // Some example data
        $data['title'] = "The Smarty parser works!";
        $data['body']  = "This is body text to show that the Smarty Parser works!";
        $data['zhangwenhan'] = array(
            'apple',
            'orange',
            'banana',
        );

        // Load the template from the views directory
        $this->parser->parse("smartytest.tpl", $data);
    }

    public function testMysql() {
        $this->load->database();
        $sql = "select name, email from contacts";
        $query = $this->db->query($sql);
        print_r($query);
    }

    /**
     * Showing off Smarty 3 template inheritance features
     *
     */
    public function inheritance()
    {
        // Some example data
        $data['title'] = "The Smarty parser works with template inheritance!";
        $data['body']  = "This is body text to show that Smarty 3 template inheritance works with Smarty Parser.";

        // Load the template from the views directory
        $this->parser->parse("inheritancetest.tpl", $data);

    }

    public function json()
    {
        $data = array(
            'apple' => 10,
            'banana' => 88,
            'cherry' => 97,
        );
        $this->my_message->showMessage(0, 'success', $data);
    }

    public function http() 
    {
        $request = MY_Curl::get('http://cp01-rdqa04-dev118.cp01.baidu.com:8855/?qt=searchjob&name=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&job_level=0&city=%E8%A5%BF%E5%AE%89');
        echo $request->body;
    }

    public function curl() 
    {
        $request = $this->my_curl->get('http://cp01-rdqa04-dev118.cp01.baidu.com:8855/?qt=searchjob&name=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&job_level=0&city=%E8%A5%BF%E5%AE%89');
        echo $request->body;
    }

}


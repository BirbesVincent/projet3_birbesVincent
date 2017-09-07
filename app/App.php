<?php

use Core\Config;
use Core\Database\MysqlDatabase;

/**
 * Class App
 */
class App
{
    /**
     * @var string
     * title of the page
     */
    public $title = "Page par défaut";
    /**
     * @var
     * instance of the class
     */
    private static $_instance;
    /**
     * @var
     * instance of the db
     */
    private $db_instance;

    /**
     * @return App
     * set $_instance
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    /**
     * @param $name
     * @return mixed
     * get table with $name from db
     */
    public function getTable($name){
        $class_name = '\\App\\Table\\' .ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    /**
     * @return MysqlDatabase
     * establish connection with db
     * using config file
     */
    public function getDb(){
        $config = Config::getInstance(ROOT. '/config/config.php');
        if (is_null($this->db_instance)) {
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

    /**
     * load autoload
     */
    public static function load(){
        session_start();
        require ROOT . '/app/Autoloader.php';
        App\Autoloader::register();
        require  ROOT . '/core/Autoloader.php';
        Core\Autoloader::register();
    }
}

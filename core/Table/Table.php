<?php

namespace Core\Table;

use Core\Database\MysqlDatabase;

/**
 * Class Table
 * @package Core\Table
 * list of functions => requests use by the controller
 */
class Table{

    /**
     * @var string table name use for the request
     * redefine by childs class
     */
    protected $table;
    /**
     * @var MysqlDatabase establish connection to database
     */
    protected $db;

    /**
     * Table constructor.
     * @param MysqlDatabase $db
     * create a instance of database connection using MysqlDatabase
     */
    public function __construct(MysqlDatabase $db)
    {
        $this->db = $db;
        if (is_null($this->table))
        {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '',$class_name));
        }
    }

    /**
     * @return array|bool|mixed|\PDOStatement
     * Select all values from the entity which called the function
     */
    public function all(){
        return $this->query('SELECT * FROM ' . $this->table);
    }

    /**
     * @return array|bool|mixed|\PDOStatement
     * Select all values from the entity which called the function and ORDER By date
     */
    public function index(){
            return $this->query('SELECT * FROM ' . $this->table . 'ORDER BY date');
        }

    /**
     * @param $id id of the comment
     * @return array|bool|mixed|\PDOStatement
     * set var report to 1 using id_comment
     */
    public function report($id){
        return $this->query("UPDATE {$this->table} SET report = 1 WHERE id = ?",[$id]);
    }

    public function unReport($id){
        return $this->query("UPDATE {$this->table} SET report = 0 WHERE id = ?",[$id]);
    }

    /**
     * @return array|bool|mixed|\PDOStatement
     * list comments when var report = 1
     */
    public function AllReportedComments(){
        return $this->query("SELECT * FROM {$this->table} WHERE report = 1");
    }

    /**
     * @param $statement
     * @param null $values values send to the request
     * @param bool $one var use to set number of response
     * @return array|bool|mixed|\PDOStatement
     * execute SQL request or prepare if values exists
     */
    public function query($statement, $values = null, $one = false){
        if($values){
            return $this->db->prepare(
                $statement,
                $values,
                str_replace('Table','Entity', get_class($this)),
                $one
             );
        } else {
            return $this->db->query(
                $statement,
                str_replace('Table','Entity', get_class($this)),
                $one
            );
        }
    }

    /**
     * @param $id
     * @return array|bool|mixed|\PDOStatement
     * return object using id
     */
    public function findById($id){
        return $this->query("SELECT * 
                            FROM {$this->table}
                            WHERE id = ?", [$id], get_called_class(), true);
    }

    /**
     * @param $id
     * @return array|bool|mixed|\PDOStatement
     * return comment using articles_id
     */
    public function findAllCommentsByArticle($id){
        return $this->query("SELECT * 
                            FROM comments 
                            WHERE articles_id = ?", [$id]);
    }

    /**
     * @param $id
     * @param $values
     * @return array|bool|mixed|\PDOStatement
     * update article entry define by id using $values
     */
    public function update($id, $values){
        $sql_parts = [];
        $attributes = [];
        foreach ($values as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(',',$sql_parts);
        return $this->query("UPDATE ($this->table) SET $sql_part WHERE id = ?", $attributes, true);
    }

    /**
     * @param $values
     * @return array|bool|mixed|\PDOStatement
     * create an entry using table and fill it with $values
     */
    public function create($values){
        $sql_parts = [];
        $attributes = [];
        foreach ($values as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(',',$sql_parts);
        return $this->query("INSERT INTO $this->table SET $sql_part", $attributes, true);
    }

    /**
     * @param $id
     * @return array|bool|mixed|\PDOStatement
     * delete en entry from table using id
     */
    public function delete($id){
        return $this->query("DELETE FROM $this->table WHERE id = ?", [$id]);
    }
}
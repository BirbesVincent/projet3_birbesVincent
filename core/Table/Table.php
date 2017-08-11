<?php

namespace Core\Table;

use Core\Database\MysqlDatabase;

class Table{

    protected $table;
    protected $db;

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

    public function all(){
        return $this->query('SELECT * FROM ' . $this->table);
    }

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

    public function findById($id){
        return $this->query("SELECT * 
                            FROM {$this->table}
                            WHERE id = ?", [$id], get_called_class(), true);
    }

    public function findAllCommentsByArticle($id){
        return $this->query("SELECT * 
                            FROM {$this->table} 
                            WHERE articles_id = ?", [$id]);
    }

    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(',',$sql_parts);
        var_dump($attributes);
        return $this->query("UPDATE ($this->table) SET $sql_part WHERE id = ?", $attributes, true);
    }

    public function create($fields){
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(',',$sql_parts);
        return $this->query("INSERT INTO $this->table SET $sql_part", $attributes, true);
    }

    public function delete($id){
        return $this->query("DELETE FROM $this->table WHERE id = ?", [$id]);
    }

}
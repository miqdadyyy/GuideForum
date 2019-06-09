<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 08/06/19
 * Time: 0:43
 */

class BaseModel extends Database
{
    protected $table;
    protected $db;
    protected $columns;
    protected $hidden;

    /**
     * BaseModel constructor.
     * @param $table
     */
    public function __construct($table, $columns, $hidden)
    {
        $this->db = static::getDB();
        $this->table = $table;
        $this->columns = $columns;
        $this->hidden = $hidden;
    }

    public function createProperty($name, $value){
        $this->{$name} = $value;
    }

    public function create(array $data)
    {
        $query = "INSERT INTO $this->table";
        $col = [];
        $val = [];
        foreach ($data as $column => $value) {
            array_push($col, $column);
            array_push($val, "'$value'");
        }
        $col = implode(", ", $col);
        $val = implode(", ", $val);

        $query .= "($col) VALUES($val)";

        $result = $this->db->query($query);

        if(!$result){
            return [
                'message' => $this->db->error,
                'data' => null
            ];
        } else{
            return [
                'message' => 'success',
                'data' => (object) $data
            ];
        }
    }

    public function find($id, $column = '*')
    {
        $result = $this->getRows("id = $id", null, $column);
        return $result;
    }

    public function get($clauses = null, $order = null)
    {
        return $this->getRows($clauses, $order);
    }

    private function getRows($clauses = null, $order = null, $column = null)
    {
        if (is_array($clauses) || is_array($order) || is_array($column)) {
            return "Parameter is not valid";
        }

        $column = $column != null ? $column : implode(", ", array_diff($this->columns, $this->hidden));
        $clauses = $clauses != null ? 'WHERE ' . $clauses : '';
        $order = $order != null ? 'ORDER BY ' . $order : '';

        $query = "SELECT $column FROM $this->table $clauses $order";
//        MainHelper::dj($query);
        $result = $this->db->query($query);

        $data = null;
        if($result){
            $data = [];
            $message = $result->num_rows > 0 ? 'success' : 'empty';
            foreach ($result as $res){
                array_push($data, (object) $res);
            }
        } else {
            $message = $this->db->error;
        }
        return [
            'message' => $message,
            'data' => $data
        ];
    }

    public function select(array $columns, $clauses = '', $order = null)
    {
        $clauses = is_numeric($clauses) ? "id = $clauses" : '';
        $column = implode(', ', $columns);
        return $this->getRows($clauses, $order, $column);
    }

    public function update($clauses, array $val)
    {
        $ids = $this->select(['id'], $clauses)["data"];
        $set_val = [];
        foreach ($val as $column => $value) {
            array_push($set_val, "$column = '$value'");
        }
        $set = implode(', ', $set_val);
        $query = "UPDATE $this->table SET $set WHERE $clauses";
        if ($this->db->query($query)) {
            $data = [];
            foreach ($ids as $id){
                array_push($data, $this->find($id->id)["data"][0]);
            }

            return [
                'message' => 'success',
                'data' => $this->get($clauses)["data"]
            ];
        } else {
            return [
                'message' => $this->db->error,
                'data' => null
            ];
        }
    }

    public function delete($clauses)
    {
        $query = "DELETE FROM $this->table WHERE ";
        if (is_numeric($clauses)) {
            $query .= "id = $clauses";
        } else {
            $query .= $clauses;
        }
        if ($this->db->query($query)) {
            return [
                'message' => 'success',
                'data' => null
            ];
        } else {
            return [
                'message' => $this->db->error,
                'data' => null
            ];
        }
    }

    public function size()
    {
        return count($this->select(['id']));
    }
}
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

    /**
     * BaseModel constructor.
     * @param $table
     */
    public function __construct($table)
    {
        $this->db = static::getDB();
        $this->table = $table;
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
        if ($this->db->query($query)) {
            return "Create data success";
        } else {
            return $this->db->error;
        }
    }

    public function find($id, $column = '*')
    {
        $result = $this->getRows("id = $id", null, $column);
        return $result ? $result[0] : [];
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

        $column = $column != null ? $column : '*';
        $clauses = $clauses != null ? 'WHERE ' . $clauses : '';
        $order = $order != null ? 'ORDER BY ' . $order : '';

        $query = "SELECT $column FROM $this->table $clauses $order";
        $result = $this->db->query($query);
        return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
    }

    public function select(array $columns, $clauses = '', $order = null)
    {
        $clauses = is_numeric($clauses) ? "id = $clauses" : '';
        $column = implode(', ', $columns);
        return $this->getRows($clauses, $order, $column);
    }

    public function update($clauses, array $val)
    {
        $set_val = [];
        foreach ($val as $column => $value) {
            array_push($set_val, "$column = '$value'");
        }
        $set = implode(', ', $set_val);
        $query = "UPDATE $this->table SET $set WHERE $clauses";
        if ($this->db->query($query)) {
            return "Update Success";
        } else {
            return $this->db->error;
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
            return "Delete Success";
        } else {
            return $this->db->error;
        }
    }

    public function size()
    {
        return count($this->select(['id']));
    }
}
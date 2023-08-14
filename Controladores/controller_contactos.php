<?php

class Contactos extends Conectar
{
    private $table;
    private $view;
    private $id;
    private $lastid;
    public $values = array();

    public function __construct()
    {
        $con = new Conectar();
        $this->db = $con->conexionBD();
        $this->field = array();
    }

    public function lastId()
    {
        $this->lastid = $this->db->insert_id;
        return $this->lastid;
    }

    public function setView($v)
    {
        $this->view = $v;
    }

    public function setTable($t)
    {
        $this->table = $t;
    }

    public function setColumns($c)
    {
        $this->column[] = $c;
    }

    public function setKey($k)
    {
        $this->pkey = $k;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->table}";

        $result = $this->db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $this->field[] = $row;
        }
        return $this->field;
    }

    public function getWhere($value)
    {
        $this->id = $value;
        $sql = "SELECT * FROM {$this->table} WHERE {$this->pkey}={$this->id}";
        //echo $sql;
        $result = $this->db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $this->field[] = $row;
        }
        return $this->field;
    }

    public function getView()
    {
        $sql = "SELECT * FROM {$this->view}";

        $result = $this->db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $this->field[] = $row;
        }
        return $this->field;
    }

    public function getWhereview($value)
    {
        $this->id = $value;
        $sql = "SELECT * FROM {$this->view} WHERE {$this->pkey}={$this->id}";

        $result = $this->db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $this->field[] = $row;
        }
        return $this->field;
    }

    public function insertContacto($correo, $direccion, $codigo, $ciudad, $estado, $telefono)
    {
        $this->col = implode(",", $this->column);

        // echo $this->col;
        // echo $this->val;
        $sql = "INSERT INTO {$this->table} ({$this->pkey},{$this->col}) VALUE (NULL,'$correo','$direccion','$codigo','$ciudad','$estado','$telefono')";
        // echo $sql;
        $this->db->query($sql);
    }

    public function updateContacto($value, $correo, $direccion, $codigo, $ciudad, $estado, $telefono)
    {
        $this->id = $value;     //ATRAPA EL ID QUE SE USARA PARA IDENTIFICAR CUAL SE CAMBIARA
        // $this->col = implode(",",$this->columsn);
        $this->values[] = $this->column[0] . "='" . $correo . "'";
        $this->values[] = $this->column[1] . "='" . $direccion . "'";
        $this->values[] = $this->column[2] . "='" . $codigo . "'";
        $this->values[] = $this->column[3] . "='" . $ciudad . "'";
        $this->values[] = $this->column[4] . "='" . $estado . "'";
        $this->values[] = $this->column[5] . "='" . $telefono . "'";

        $this->val = implode(",", $this->values);

        $sql = "UPDATE {$this->table} SET {$this->val} WHERE {$this->pkey}='{$this->id}'";
        $this->db->query($sql);
    }


    public function deleteContacto($value)
    {
        $this->id = $value;
        $sql = "DELETE FROM {$this->table} WHERE {$this->pkey}={$this->id}";
        //echo $sql;
        $this->db->query($sql);
    }
}

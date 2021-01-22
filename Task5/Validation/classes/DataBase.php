<?php

namespace Validation\classes;

class DataBase
{
    private $db;

    private $fp;

    public function __construct($current_db)
    {
        $this->db = $current_db;
        $this->fp = fopen('db.txt', 'a+');
    }

    public function __destruct()
    {
        fclose($this->fp);
    }

    public function setDb($data)
    {
        if (!empty($data)) {
            $this->db[] = $data;
            foreach ($data as $key => $value) {
                fwrite($this->fp, $data[$key] . ';');
            }
            fwrite($this->fp, PHP_EOL);
        }
    }

    public function getDb()
    {
        return $this->db;
    }
}
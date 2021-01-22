<?php

namespace Validation\classes;

class User
{
    public $id;

    public function __construct()
    {
        $this->id = rand(1, 15);
    }

    public function load(DataBase $db, $id)
    {
        if (!empty($db->getDb())) {
            foreach ($db->getDb() as $userData) {
                if ($id == $userData['id']) {
                    throw new \Exception('Пользователь с таким id уже существует!');
                }
            }
        }
        return $id;
    }

    public function is_email(DataBase $db, $email) {
        foreach ($db->getDb() as $userData) {
            if ($email === $userData['email']) {
                return true;
            }
        }
        return false;
    }

    public function save(DataBase $db, $data)
    {
        if ($this->is_email($db, $data['email'])) {
            throw new \Exception('Пользователь с таким email уже существует!');
        }
        $data['id'] = $this->load($db, $this->id);
        $db->setDb($data);
    }
}
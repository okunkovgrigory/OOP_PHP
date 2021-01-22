<?php

namespace Validation\classes;

class UserFormValidator
{
    private $email;

    public function validate(array $POST)
    {
        if (empty(trim($POST['name']))) {
            return false;
        }

        if ($POST['age'] < 18) {
            return false;
        }
        if (strpos($POST['email'], '@') !== false) {
            $this->email = array_combine(['username', 'hostname'], explode('@', $POST['email']));
            if (!preg_match('#\b[a-zA-Z0-9]{0,60}\.(biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|name|net|org|pro|tel|[a-z]{2})\b#', $this->email['hostname'])
                or !preg_match('#^(?!\.)[a-zA-Z0-9\._\-]{3,60}$#ui', $this->email['username'])) {
                return false;
            }
        } else {
            return false;
        }
        return true;
    }
}
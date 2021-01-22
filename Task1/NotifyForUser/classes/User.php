<?php


class User
{
    public $fullName;
    public $email;
    public $gender;
    public $age;
    public $phone;

    public function __construct($fullName, $email, $gender = '', $age = '', $phone = '')
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->gender = $gender;
        $this->age = $age;
        $this->phone = $phone;
    }

    private function notifyOnEmail($message)
    {
        $this->send($this->email, $message);
    }

    private function notifyOnPhone($message)
    {
        $this->send($this->phone, $message);
    }

    public function notify($message)
    {
        if (!$this->phone) {
            $this->notifyOnEmail($this->censor($message));
        } else {
            $this->notifyOnPhone($this->censor($message));
        }
    }

    private function censor($message)
    {
        if ($this->age < 18) {
            return 'Вам еще нет 18 лет!';
        }
        return $message;
    }

    private function send($emailOrPhone, $message)
    {
        if ($emailOrPhone === $this->email) {
            echo "Уведомление клиенту: {$this->fullName} на почту ({$emailOrPhone}): {$message}" . PHP_EOL;
        } else {
            echo "Уведомление клиенту: {$this->fullName} на телефон ({$emailOrPhone}): {$message}" . PHP_EOL;
        }
    }
}
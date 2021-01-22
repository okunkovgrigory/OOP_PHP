<?php


class Plane
{
    private $blackBox;

    public function __construct(BlackBox $blackBox)
    {
        $this->blackBox = $blackBox;
    }

    public function flyAndCrush()
    {
        $this->flyProcess();
        $this->crushProcess();
    }

    protected function flyProcess()
    {
        $this->addLog('Летит прямо, делая мертвую петлю!' . PHP_EOL);

    }

    private function crushProcess()
    {
        $this->addLog('Самолет терпит крушение!' . PHP_EOL);
    }

    protected function addLog($message)
    {
        $this->blackBox->addLog($message);
    }

    public function getBoxForEngineer(Engineer $engineer)
    {
        $engineer->setBox($this->blackBox);
    }



}
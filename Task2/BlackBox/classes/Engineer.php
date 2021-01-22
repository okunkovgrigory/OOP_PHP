<?php


class Engineer
{
    public function setBox(BlackBox $blackBox)
    {
        $blackBox->getDataByEngineer($this);
    }

    public function takeBox(Plane $plane)
    {
        $plane->getBoxForEngineer($this);
    }

    public function decodeBox($blackBoxData)
    {
        foreach ($blackBoxData as $dataItem)
        {
            echo $dataItem;
        }
    }
}
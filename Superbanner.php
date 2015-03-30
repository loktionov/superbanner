<?php

namespace loktionov\superbanner;


class Superbanner
{
    public $bannercount = 50;

    public function GetBanners($c = 1, $tmpl = 'superbanner1')
    {
        $c = $this->getCount($c);
        if (!$c) return false;
        $alias = '@loktionov/superbanner/views/' . $tmpl;
        $res = [];
        for ($i = 0; $i < $c; $i++)
            $res[] = \Yii::$app->controller->renderPartial($alias, ['id'=>$i]);
        return $res;
    }

    private function getCount($c)
    {
        if ($this->bannercount <= 0)
            return false;
        if (preg_match('/^(\d+)%$/', $c, $matches)) {
            $c = round($this->bannercount * $matches[1] / 100);
        } else if (!is_numeric($c) OR $c <= 0) {
            return false;
        }
        if ($c > $this->bannercount)
            $c = $this->bannercount;
        $this->bannercount -= $c;
        return $c;
    }
} 

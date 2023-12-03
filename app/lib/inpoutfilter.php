<?php
namespace PHPMVC\lib;
trait InpoutFilter
{
    public function filterInt($inpot)
    {
        return filter_var($inpot, FILTER_SANITIZE_NUMBER_INT);
    }
    public function filterFloat($inpot)
    {
        return filter_var($inpot, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }
    public  function filterString($inpot)
    {
        return  htmlentities(strip_tags($inpot), ENT_QUOTES, 'UTF-8');
    }
}










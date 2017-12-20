<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-09-18 10:47:27
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 16:08:52
 */
namespace WDAO;

class Verifies extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table'=>'verifies'));
    }
}
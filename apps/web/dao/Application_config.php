<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 15:47:21
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 15:47:53
 */
namespace WDAO;

class Application_config extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table' => 'application_config'));
    }

}
<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-09-13 15:11:27
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 14:51:12
 */
namespace MDAO;

class Application_config extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table'=>'application_config_ext'));
    }
}
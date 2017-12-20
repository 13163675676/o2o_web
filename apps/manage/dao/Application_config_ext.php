<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 14:49:49
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 14:50:25
 */
namespace MDAO;

class Application_config_ext extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table'=>'application_config_ext'));
    }
}
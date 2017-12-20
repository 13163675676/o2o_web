<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 15:38:24
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 15:38:59
 */
namespace MDAO;

class Web_config_ext extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table'=>'web_config_ext'));
    }
}
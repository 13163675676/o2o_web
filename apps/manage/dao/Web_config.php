<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-09-12 16:24:51
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 15:37:55
 */
namespace MDAO;

class Web_config extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table'=>'web_config'));
    }
}
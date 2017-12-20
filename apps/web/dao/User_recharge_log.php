<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 16:40:39
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 16:41:39
 */
namespace WDAO;

class User_recharge_log extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table' => 'user_recharge_log'));
    }

}
<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 15:27:49
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 15:28:06
 */
namespace MDAO;

class User_withdraw_log extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table' => 'user_withdraw_log'));
    }
}
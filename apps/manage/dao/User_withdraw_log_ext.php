<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 15:24:18
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 15:24:52
 */
namespace MDAO;

class User_withdraw_log_ext extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table' => 'user_withdraw_log_ext'));
    }
}
<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 16:45:24
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 16:45:46
 */
namespace WDAO;

class User_withdraw_log extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table' => 'user_withdraw_log'));
    }

}
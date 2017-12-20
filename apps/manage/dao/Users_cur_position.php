<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 15:31:00
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 15:31:36
 */
namespace MDAO;

class Users_cur_position extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table' => 'users_cur_position'));
    }
}
<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-09-19 17:10:36
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 16:11:14
 */
namespace WDAO;

class Users_favorate extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table'=>'users_favorate'));
    }
}
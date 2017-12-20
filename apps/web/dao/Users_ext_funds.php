<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-09-20 10:08:18
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-18 09:56:04
 */
namespace WDAO;

class Users_ext_funds extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table'=>'users_ext_funds'));
    }
}
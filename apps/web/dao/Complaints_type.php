<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 16:49:11
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 16:49:31
 */
namespace WDAO;

class Complaints_type extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table' => 'complaints_type'));
    }

}
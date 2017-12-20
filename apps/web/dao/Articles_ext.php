<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 15:56:44
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 15:57:25
 */
namespace WDAO;

class Articles_ext extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table' => 'Articles_ext'));
    }

}
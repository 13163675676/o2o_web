<?php
/**
 * @Author: Zhaoyu
 * @Date:   2017-12-15 15:01:29
 * @Last Modified by:   Zhaoyu
 * @Last Modified time: 2017-12-15 15:01:56
 */
namespace MDAO;

class Articles_ext extends \MDAOBASE\DaoBase
{
    public function __construct()
    {
        parent::__construct(array('table'=>'Articles_ext'));
    }
}
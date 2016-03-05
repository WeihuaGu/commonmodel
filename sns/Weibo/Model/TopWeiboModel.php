<?php

namespace sns\Weibo\Model;
use Model\Model;


class TopWeiboModel extends Model
{
    protected $tableName='weibo_top';
  
    public function getTopWeibo($limit = 10)
    {
       echo "this is a test to Model";
    }
} 

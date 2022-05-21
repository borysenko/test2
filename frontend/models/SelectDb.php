<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class SelectDb extends Model{

    public static function getFind() {
        return [1 => 'db1', 2 => 'db2', 3 => 'db3', 4 => 'db4'];
    }

    public static function getTables($db = 'db1') {
      
        $tables = Yii::$app->$db->schema->getTableNames();
        
        return $tables;

    }
}

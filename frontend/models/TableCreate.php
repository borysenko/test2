<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class TableCreate extends Model
{
    public $db;
    //public $name;
    public $sql = 'DROP TABLE IF EXISTS `test_table`;
    CREATE TABLE `test_table` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT \'0\',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;';


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'sql'], 'required'],
        ];
    }

    public function execute(){
        $db = $this->db;

        try {
             Yii::$app->$db->createCommand($this->sql)->execute();
        } catch (\yii\db\Exception $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
    
    }


}

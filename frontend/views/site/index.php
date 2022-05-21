<?php
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

 <ul class="list-group">
  <?php foreach($dbs as $db):?>
  <li class="list-group-item">
    <h3>
        <a href="<?=Url::to(['site/index', 'db' => $db])?>"><?=$db?></a>
    </h3>
    <a class="btn btn-info" href="<?=Url::to(['site/create-table', 'db' => $db])?>">Добавить файл</a>
  </li>
  <?php endforeach;?>
</ul>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Файл table</th>
      <th scope="col"></th>
      <th scope="col">Удалить</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($tables as $key => $table):?>
    <tr>
      <th scope="row"><?=$key?></th>
      <td><?=$table?></td>
      <td>
      <?php if(strchr($table,'posts')):?>
        <a href="<?=Url::to(['site/export-table', 'db' => $db_full, 'table' => $table])?>" class="btn btn-info">
            Экспорт новости в XML
        </a>
      <?php endif;?>  
      </td>
      <td><a href="<?=Url::to(['site/delete-table', 'db' => $db_full, 'table' => $table])?>" onclick="return confirm('Удалить?');" class="btn btn-danger">Удалить</a></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
 
</div>

<?php
use yii\bootstrap4\Html;
?>
<?xml version="1.0"?>
<?php
echo"<posts>";
foreach ($posts as $key => $post) {
	echo "<post>\n";
		echo "<title>".Html::encode($post['post_title'])."</title>\n";
		echo "<content>".Html::encode($post['post_content'])."</content>\n";
	echo"</post>\n";
}
echo"</posts>";
<?php
use yii\helpers\Html;
use yii\helpers\Url;

$path = Yii::$app->request->getPathInfo();
$page = empty($path) ? 'index' : basename($path);

if (
    $page === 'layout-mini'
) {
    echo '<body class="mini-sidebar">';
} else 
{
    echo '<body>';
}

?>

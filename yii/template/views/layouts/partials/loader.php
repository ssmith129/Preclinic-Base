<?php
use yii\helpers\Html;
use yii\helpers\Url;

$path = Yii::$app->request->getPathInfo();
// Handle root path - if empty, treat as index page
$page = empty($path) ? 'index' : basename($path);

if (
    $page === 'index' ||
    $page === 'student-dashboard' ||
    $page === 'teacher-dashboard' ||
    $page === 'parent-dashboard'
) {
    ?>
    <div id="global-loader">
        <div class="page-loader"></div>
    </div>
    <?php
}
?>
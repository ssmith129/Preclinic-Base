<?php
use yii\helpers\Html;
use yii\helpers\Url;

$path = Yii::$app->request->getPathInfo();
$page = empty($path) ? 'index' : basename($path);

if (
    $page === 'layout-dark'
) {
    echo '<html lang="en" data-bs-theme="dark">';
}

elseif (
    $page === 'layout-hidden'
) {
    echo '<html lang="en" data-layout="hidden">';
}

elseif (
    $page === 'layout-hover-view'
) {
    echo '<html lang="en" data-layout="hoverview">';
}

elseif (
    $page === 'layout-mini'
) {
    echo '<html lang="en" data-layout="mini">';
}

elseif (
    $page === 'layout-rtl'
) {
    echo '<html lang="en" dir="rtl">';
}

elseif (
    $page === 'layout-full-width'
) {
    echo '<html lang="en" data-layout="full-width">';
} else 
{
    echo '<html lang="en">';
}
?>

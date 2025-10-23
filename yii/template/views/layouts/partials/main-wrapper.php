<?php
use yii\helpers\Html;
use yii\helpers\Url;

$path = Yii::$app->request->getPathInfo();
$page = empty($path) ? 'index' : basename($path);

if (
    $page === 'login'
) {
    echo '<div class="main-wrapper auth-bg auth-bg-custom position-relative overflow-hidden">';
} elseif (
    $page === 'coming-soon' || $page === 'under-maintenance'
) {
    echo '<div class="main-wrapper auth-bg">';
} elseif (
    $page === 'login-basic' || $page === 'login-illustration' || $page === 'login-cover' ||  $page === 'register-basic' || $page === 'register-illustration' || $page === 'register-cover' || $page === 'forgot-password-basic' || $page === 'forgot-password-illustration' || $page === 'forgot-password-cover' || $page === 'reset-password-basic' || $page === 'reset-password-illustration' || $page === 'reset-password-cover' || $page === 'email-verification-basic' || $page === 'email-verification-illustration' || $page === 'email-verification-cover' || $page === 'success-basic' || $page === 'success-illustration' || $page === 'success-cover' || $page === 'two-step-verification-basic' || $page === 'two-step-verification-illustration' || $page === 'two-step-verification-cover' || $page === 'lock-screen' || $page === 'error-404' || $page === 'error-500'
) {
    echo '<div class="main-wrapper auth-bg position-relative overflow-hidden">';
} else 
{
    echo '<div class="main-wrapper">';
}
?>

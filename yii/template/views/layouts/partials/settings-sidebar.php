<?php
use yii\helpers\Html;
use yii\helpers\Url;

$path = Yii::$app->request->getPathInfo();
$page = empty($path) ? 'index' : basename($path);
?>

<!-- Start Settings Sidebar -->
<div class="sidebars settings-sidebar" id="sidebar2">
    <div class="sidebar-inner" data-simplebar>
        <div id="sidebar-menu5" class="sidebar-menu mt-0 p-0">
            <ul>
                <li class="submenu">
                    <a href="javascript:void(0);" class="<?php echo ($page == 'profile-settings' || $page == 'security-settings' || $page == 'notifications-settings' || $page == 'integrations-settings') ? 'active' : '' ?>">
                        <i class="ti ti-user-cog me-2"></i><span>Account Settings</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="profile-settings" class="<?php echo ($page == 'profile-settings') ? 'active' : '' ?>">Profile</a></li>
                        <li><a href="security-settings" class="<?php echo ($page == 'security-settings') ? 'active' : '' ?>">Security</a></li>
                        <li><a href="notifications-settings" class="<?php echo ($page == 'notifications-settings') ? 'active' : '' ?>">Notifications</a></li>
                        <li><a href="integrations-settings" class="<?php echo ($page == 'integrations-settings') ? 'active' : '' ?>">Integrations</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);" class="<?php echo ($page == 'organization-settings' || $page == 'localization-settings' || $page == 'prefixes-settings' || $page == 'seo-setup-settings' || $page == 'language-settings' || $page == 'language-settings2' || $page == 'language-settings3' || $page == 'maintenance-mode-settings' || $page == 'login-and-register-settings' || $page == 'preferences-settings') ? 'active' : '' ?>">
                        <i class="ti ti-world-cog me-2"></i><span>Website Settings</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="organization-settings" class="<?php echo ($page == 'organization-settings') ? 'active' : '' ?>">Organization</a></li>
                        <li><a href="localization-settings" class="<?php echo ($page == 'localization-settings') ? 'active' : '' ?>">Localization</a></li>
                        <li><a href="prefixes-settings" class="<?php echo ($page == 'prefixes-settings') ? 'active' : '' ?>">Prefixes</a></li>
                        <li><a href="seo-setup-settings" class="<?php echo ($page == 'seo-setup-settings') ? 'active' : '' ?>">SEO Setup</a></li>
                        <li><a href="language-settings" class="<?php echo ($page == 'language-settings' || $page == 'language-settings2' || $page == 'language-settings3') ? 'active' : '' ?>">Language</a></li>
                        <li><a href="maintenance-mode-settings" class="<?php echo ($page == 'maintenance-mode-settings') ? 'active' : '' ?>">Maintenance Mode</a></li>
                        <li><a href="login-and-register-settings" class="<?php echo ($page == 'login-and-register-settings') ? 'active' : '' ?>">Login & Register</a></li>
                        <li><a href="preferences-settings" class="<?php echo ($page == 'preferences-settings') ? 'active' : '' ?>">Preferences</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);" class="<?php echo ($page == 'appointment-settings' || $page == 'working-hours-settings' || $page == 'cancellation-reason-settings') ? 'active' : '' ?>">
                        <i class="ti ti-building-hospital me-2"></i><span>Clinic Settings</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="appointment-settings" class="<?php echo ($page == 'appointment-settings') ? 'active' : '' ?>">Appointment</a></li>
                        <li><a href="working-hours-settings" class="<?php echo ($page == 'working-hours-settings') ? 'active' : '' ?>">Working Hours</a></li>
                        <li><a href="cancellation-reason-settings" class="<?php echo ($page == 'cancellation-reason-settings') ? 'active' : '' ?>">Cancellation Reason</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);" class="<?php echo ($page == 'invoice-settings' || $page == 'invoice-templates-settings' || $page == 'signatures-settings' || $page == 'custom-fields-settings') ? 'active' : '' ?>">
                        <i class="ti ti-device-mobile-cog me-2"></i><span>App Settings</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="invoice-settings" class="<?php echo ($page == 'invoice-settings') ? 'active' : '' ?>">Invoice Settings</a></li>
                        <li><a href="invoice-templates-settings" class="<?php echo ($page == 'invoice-templates-settings') ? 'active' : '' ?>">Invoice Templates</a></li>
                        <li><a href="signatures-settings" class="<?php echo ($page == 'signatures-settings') ? 'active' : '' ?>">Signatures</a></li>
                        <li><a href="custom-fields-settings" class="<?php echo ($page == 'custom-fields-settings') ? 'active' : '' ?>">Custom Fields</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);" class="<?php echo ($page == 'email-settings' || $page == 'email-templates-settings' || $page == 'sms-gateways-settings' || $page == 'sms-templates-settings' || $page == 'gdpr-cookies-settings') ? 'active' : '' ?>">
                        <i class="ti ti-device-desktop-cog me-2"></i><span>System Settings</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="email-settings" class="<?php echo ($page == 'email-settings') ? 'active' : '' ?>">Email Settings</a></li>
                        <li><a href="email-templates-settings" class="<?php echo ($page == 'email-templates-settings') ? 'active' : '' ?>">Email Templates</a></li>
                        <li><a href="sms-gateways-settings" class="<?php echo ($page == 'sms-gateways-settings') ? 'active' : '' ?>">SMS Gateways</a></li>
                        <li><a href="sms-templates-settings" class="<?php echo ($page == 'sms-templates-settings') ? 'active' : '' ?>">SMS Templates</a></li>
                        <li><a href="gdpr-cookies-settings" class="<?php echo ($page == 'gdpr-cookies-settings') ? 'active' : '' ?>">GDPR Cookies</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);" class="<?php echo ($page == 'payment-methods-settings' || $page == 'bank-accounts-settings' || $page == 'tax-rates-settings' || $page == 'currencies-settings') ? 'active' : '' ?>">
                        <i class="ti ti-settings-dollar me-2"></i><span>Finance & Accounts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="payment-methods-settings" class="<?php echo ($page == 'payment-methods-settings') ? 'active' : '' ?>">Payment Methods</a></li>
                        <li><a href="bank-accounts-settings" class="<?php echo ($page == 'bank-accounts-settings') ? 'active' : '' ?>">Bank Accounts</a></li>
                        <li><a href="tax-rates-settings" class="<?php echo ($page == 'tax-rates-settings') ? 'active' : '' ?>">Tax Rates</a></li>
                        <li><a href="currencies-settings" class="<?php echo ($page == 'currencies-settings') ? 'active' : '' ?>">Currencies</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);" class="<?php echo ($page == 'sitemap-settings' || $page == 'clear-cache-settings' || $page == 'storage-settings' || $page == 'cronjob-settings' || $page == 'ban-ip-address-settings' || $page == 'system-backup-settings' || $page == 'database-backup-settings' || $page == 'system-update') ? 'active' : '' ?>">
                        <i class="ti ti-settings-2 me-2"></i><span>Other Settings</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="sitemap-settings" class="<?php echo ($page == 'sitemap-settings') ? 'active' : '' ?>">Sitemap</a></li>
                        <li><a href="clear-cache-settings" class="<?php echo ($page == 'clear-cache-settings') ? 'active' : '' ?>">Clear Cache</a></li>
                        <li><a href="storage-settings" class="<?php echo ($page == 'storage-settings') ? 'active' : '' ?>">Storage</a></li>
                        <li><a href="cronjob-settings" class="<?php echo ($page == 'cronjob-settings') ? 'active' : '' ?>">Cronjob</a></li>
                        <li><a href="ban-ip-address-settings" class="<?php echo ($page == 'ban-ip-address-settings') ? 'active' : '' ?>">Ban IP Address</a></li>
                        <li><a href="system-backup-settings" class="<?php echo ($page == 'system-backup-settings') ? 'active' : '' ?>">System Backup</a></li>
                        <li><a href="database-backup-settings" class="<?php echo ($page == 'database-backup-settings') ? 'active' : '' ?>">Database Backup</a></li>
                        <li><a href="system-update" class="<?php echo ($page == 'system-update') ? 'active' : '' ?>">System Update</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Settings Sidebar -->
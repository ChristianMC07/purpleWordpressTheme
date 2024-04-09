<?php

/**
 * Plugin Name: Form Plugin 1
 */

function formplugin1_activate()
{
}
register_activation_hook(__FILE__, formplugin1_activate());

function formplugin1_deactive()
{
}
register_deactivation_hook(__FILE__, formplugin1_deactive());

function formplugin1_uninstall()
{
}
register_uninstall_hook(__FILE__, formplugin1_uninstall());

<?php
$hook_version = 1;
$hook_array = array();

$hook_array['before_save'][] = array(
    1,
    'Disable Activities for specific modules',
    'custom/modules/disable_activities.php',
    'DisableActivities',
    'execute'
);

<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class DisableActivities
{
    public function execute($bean, $event, $arguments)
    {
        // Define modules where activities should remain enabled
        $enabledModules = [
            'Leads',
            'Opportunities',
            'Contacts',
            'Cases',
            'CustomModule1', // Replace with actual module names
            'CustomModule2'
        ];

        // Disable activities for modules not in the allowed list
        if (!in_array($bean->module_dir, $enabledModules)) {
            Activity::disable();
        }
    }
}

<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('activate and deactivate the plugin correctly');

$I->loginAsAdminUser();

$I->amOnPluginsPage();

$I->seePluginActivated('plugin-sample-project');

$I->deactivatePlugin('plugin-sample-project');

$I->seePluginDeactivated('plugin-sample-project');

$I->activatePlugin('plugin-sample-project');

$I->seePluginActivated('plugin-sample-project');


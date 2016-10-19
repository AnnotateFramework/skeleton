<?php

$configurator = new Nette\Configurator();

// Uncomment following line to enable dynamic debug mode
// $debugModeConfig = __DIR__ . '/config/debugger.neon';
if (isset($debugModeConfig)) {
	$ips = Nette\Neon\Neon::decode(file_get_contents($debugModeConfig));
	if (!empty($ips)) {
		$configurator->setDebugMode($ips);
	}
}

$configurator->enableDebugger(__DIR__ . '/../log');
$configurator->setTempDirectory(__DIR__ . '/../temp');

// Uncomment following line to enable workbench support
// $workbenchActive = TRUE;
if (isset($workbenchActive)) {
	$configurator->createRobotLoader()
		->addDirectory(__DIR__ . '/../workbench')
		->register();
}

$configurator->addConfig(__DIR__ . '/config/config.neon');
$container = $configurator->createContainer();
return $container;

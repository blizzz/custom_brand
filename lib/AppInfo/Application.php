<?php

namespace OCA\CustomBrand\AppInfo;

use OCA\CustomBrand\Listener\CustomWizardListener;
use OCA\FirstRunWizard\Event\CustomWizardEvent;
use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;

class Application extends App implements IBootstrap {

	public const APP_ID = 'custom_brand';

	public function __construct(array $urlParams = []) {
		parent::__construct(self::APP_ID, $urlParams);
	}

	public function register(IRegistrationContext $context): void {
		if (class_exists(CustomWizardEvent::class)) {
			$context->registerEventListener(CustomWizardEvent::class, CustomWizardListener::class);
		}
	}

	public function boot(IBootContext $context): void {
		// TODO: Implement boot() method.
	}
}

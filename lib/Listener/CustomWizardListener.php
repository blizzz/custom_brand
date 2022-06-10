<?php

namespace OCA\CustomBrand\Listener;

use OCA\FirstRunWizard\Event\CustomWizardEvent;
use OCP\EventDispatcher\Event;

class CustomWizardListener implements \OCP\EventDispatcher\IEventListener {

	/**
	 * @inheritDoc
	 */
	public function handle(Event $event): void {
		if (!$event instanceof CustomWizardEvent) {
			return;
		}

		$event->addSlide('<h1>Hello</h1>');
	}
}


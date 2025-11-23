<?php

namespace App\Twig\Components;

use Flasher\Prime\FlasherInterface;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveListener;
use Symfony\UX\LiveComponent\ComponentToolsTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class Flasher
{
	use ComponentToolsTrait;
	use DefaultActionTrait;

	#[LiveAction]
	public function flash(FlasherInterface $flasher): void
	{
		$flasher->success("Flash message depuis Live Component Flasher.php");
		$json = $flasher->render('json');
		$this->dispatchBrowserEvent('flasher:render', $json);
	}
}

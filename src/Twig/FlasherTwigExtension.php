<?php

declare(strict_types=1);

namespace App\Twig;

use Flasher\Prime\FlasherInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigFilter;

class FlasherTwigExtension extends AbstractExtension
{
    public function __construct(private FlasherInterface $flasher)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('flasher_render', $this->render(...)),
        ];
    }

    public function render(): string
    {
        return $this->flasher->render();
    }
}

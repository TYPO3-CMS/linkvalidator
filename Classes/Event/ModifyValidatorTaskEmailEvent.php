<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\Linkvalidator\Event;

use TYPO3\CMS\Core\Mail\FluidEmail;
use TYPO3\CMS\Linkvalidator\Result\LinkAnalyzerResult;

/**
 * Allows to process and modify the LinkAnalyzer result and FluidEmail object
 */
final readonly class ModifyValidatorTaskEmailEvent
{
    public function __construct(
        private LinkAnalyzerResult $linkAnalyzerResult,
        private FluidEmail $fluidEmail,
        private array $modTSconfig
    ) {}

    public function getLinkAnalyzerResult(): LinkAnalyzerResult
    {
        return $this->linkAnalyzerResult;
    }

    public function getFluidEmail(): FluidEmail
    {
        return $this->fluidEmail;
    }

    public function getModTSconfig(): array
    {
        return $this->modTSconfig;
    }
}

<?php
/*
 * Copyright (c)
 * Kirill chEbba Chebunin <iam@chebba.org>
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 */

namespace EventBand\Processor;

use EventBand\ClassNamedEvent;

/**
 * Description of DispatchTimeoutEvent
 *
 * @author Kirill chEbba Chebunin <iam@chebba.org>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
class DispatchTimeoutEvent extends StoppableDispatchEvent
{
    private $timeout;

    public function __construct($timeout)
    {
        $this->timeout = (int) $timeout;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }
}

<?php

/**
 * This is part of the ascetik/callapsule-run package
 *
 * @package    Calapsule\Run
 * @category   Interface
 * @license    https://opensource.org/license/mit/  MIT License
 * @copyright  Copyright (c) 2023, Vidda
 * @author     Vidda <vidda@ascetik.fr>
 */

declare(strict_types=1);

namespace Ascetik\Callapsule\Run\Types;

/**
 * Describe the behavior of an instance
 * responsible for callable execution
 *
 * @version 1.0.0
 */
interface RunningStrategy
{
    public function call(callable $call, array $arguments = []): mixed;
}

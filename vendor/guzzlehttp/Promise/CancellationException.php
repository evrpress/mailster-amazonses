<?php

namespace Mailster\Aws3\GuzzleHttp\Promise;

/**
 * Exception that is set as the reason for a promise that has been cancelled.
 */
class CancellationException extends \Mailster\Aws3\GuzzleHttp\Promise\RejectionException
{
}
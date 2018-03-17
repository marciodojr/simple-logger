<?php

namespace Mdojr\Logger;

use Psr\Log\AbstractLogger;
use Psr\Log\LogLevel;
use Psr\Log\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Mdojr\Logger\SimpleLogger;

final class SimpleLoggerTest extends TestCase
{
    public function testEmergencyMethodNoReturnValue()
    {
        $dbLogger = new SimpleLogger();
        $this->assertNull($dbLogger->emergency('Emergency method emergency level'));
    }

    public function testAlertMethodNoReturnValue()
    {
        $dbLogger = new SimpleLogger();
        $this->assertNull($dbLogger->alert('Alert method alert level'));
    }

    public function testCriticalMethodNoReturnValue()
    {
        $dbLogger = new SimpleLogger();
        $this->assertNull($dbLogger->critical('Critical method critical level'));
    }

    public function testErrorMethodNoReturnValue()
    {
        $dbLogger = new SimpleLogger();
        $this->assertNull($dbLogger->error('Error method error level'));
    }

    public function testWarningMethodNoReturnValue()
    {
        $dbLogger = new SimpleLogger();
        $this->assertNull($dbLogger->warning('Warning method warning level'));
    }

    public function testNoticeMethodNoReturnValue()
    {
        $dbLogger = new SimpleLogger();
        $this->assertNull($dbLogger->notice('Notice method notice level'));
    }

    public function testInfoMethodNoReturnValue()
    {
        $dbLogger = new SimpleLogger();
        $this->assertNull($dbLogger->info('Info method info level'));
    }

    public function testDebugMethodNoReturnValue()
    {
        $dbLogger = new SimpleLogger();
        $this->assertNull($dbLogger->debug('Debug method debug level'));
    }

    public function testLogMethodNoReturnValue()
    {
        $dbLogger = new SimpleLogger();
        $this->assertNull($dbLogger->log(LogLevel::ERROR, 'Log method error level'));
    }

    public function testLogMethodThrowException()
    {
        $this->expectException(InvalidArgumentException::class);
        $dbLogger = new SimpleLogger();
        $dbLogger->log('wrongloglevel', 'This message will never be shown/saved');
    }

    public function testLoggerExtendsAbstractLogger()
    {
        $dbLogger = new SimpleLogger();
        $this->assertInstanceOf(AbstractLogger::class, $dbLogger);
    }
}

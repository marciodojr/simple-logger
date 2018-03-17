<?php

namespace Mdojr\Logger;

use Psr\Log\AbstractLogger;
use Psr\Log\LogLevel;
use Psr\Log\InvalidArgumentException;

class SimpleLogger extends AbstractLogger
{
    
    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return void
     */
    public function log($level, $message, array $context = [])
    {
        if (!in_array($level, [
            LogLevel::EMERGENCY,
            LogLevel::ALERT,
            LogLevel::CRITICAL,
            LogLevel::ERROR,
            LogLevel::WARNING,
            LogLevel::NOTICE,
            LogLevel::INFO,
            LogLevel::DEBUG
        ])) {
            throw new InvalidArgumentException("Invalid log level $level");
        }

        $this->write($level, $this->interpolate((string)$message, $context));   
    }

    /**
     * Interpolates context values into the message placeholders.
     */
    private function interpolate($message, array $context = [])
    {
        $replacement = [];

        foreach ($context  as $key => $value) {
            $replace['{' . $key . '}'] = $val;
        }

        return strtr($message, $replacement);
    }

    private function write($level, $message)
    {
        error_log("Log[$level]: $message");
    }
}

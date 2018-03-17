# Simple PSR-3 Logger

## Description
Just write messages to server log in the format:
Log[*level*]: *message*

Example:
Log[error]: Resource not created


## How to install
```
composer require "marciodojr/simple-logger"
```

## How to use
```php
use Mdojr\Logger\SimpleLogger;
use Psr\Log\LogLevel;

$logger = new SimpleLogger();

$logger->log(LogLevel::ERROR, 'my log message'); // Log[error]: my log message
$logger->emergency(
    'emergency message {placeholder}', 
    ['placeholder' => 'with placeholders']
); // Log[emergency]: emergency message with placeholders

// ... any other log level specified by psr-3
```

## How to test
```
    composer test
```

## PSR-3 specification

https://www.php-fig.org/psr/psr-3/
<?php

namespace Doctrine\Common\Persistence\Mapping;

use const E_USER_DEPRECATED;
use function class_alias;
use function interface_exists;
use function sprintf;
use function trigger_error;

if (! interface_exists(\Doctrine\Persistence\Mapping\ReflectionService::class, false)) {
    @trigger_error(sprintf(
        'The %s\ReflectionService class is deprecated since doctrine/persistence 1.3 and will be removed in 2.0.'
        . ' Use \Doctrine\Persistence\Mapping\ReflectionService instead.',
        __NAMESPACE__
    ), E_USER_DEPRECATED);
}

class_alias(
    \Doctrine\Persistence\Mapping\ReflectionService::class,
    __NAMESPACE__ . '\ReflectionService'
);

if (false) {
    /**
     * @deprecated 1.3 Use Doctrine\Persistence\Mapping\ReflectionService
     */
    interface ReflectionService extends \Doctrine\Persistence\Mapping\ReflectionService
    {
    }
}

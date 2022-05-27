<?php

declare(strict_types=1);

/**
 * Plug loader
 */
spl_autoload_register(function ($fqcn) {
    $prefix = 'Yl\\Market';

    $base_dir = __DIR__ . '/app';

    $n = strlen($prefix);
    if (strncmp($prefix, $fqcn, $n) !== 0) {
        return;
    }

    $fqcn = substr($fqcn, $n);
    $file = $base_dir . '' . str_replace('\\', '/', $fqcn) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});
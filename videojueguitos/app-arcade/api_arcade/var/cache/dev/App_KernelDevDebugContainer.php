<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXOJx0Gx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXOJx0Gx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXOJx0Gx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXOJx0Gx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXOJx0Gx\App_KernelDevDebugContainer([
    'container.build_hash' => 'XOJx0Gx',
    'container.build_id' => 'c77f4d12',
    'container.build_time' => 1708076351,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXOJx0Gx');

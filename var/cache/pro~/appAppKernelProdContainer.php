<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHcwsRvU\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHcwsRvU/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerHcwsRvU.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerHcwsRvU\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerHcwsRvU\appAppKernelProdContainer([
    'container.build_hash' => 'HcwsRvU',
    'container.build_id' => '0b383b42',
    'container.build_time' => 1689039410,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHcwsRvU');
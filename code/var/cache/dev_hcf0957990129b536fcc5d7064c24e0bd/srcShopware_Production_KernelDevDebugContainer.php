<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBgZpdLh\srcShopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBgZpdLh/srcShopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBgZpdLh.legacy');

    return;
}

if (!\class_exists(srcShopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBgZpdLh\srcShopware_Production_KernelDevDebugContainer::class, srcShopware_Production_KernelDevDebugContainer::class, false);
}

return new \ContainerBgZpdLh\srcShopware_Production_KernelDevDebugContainer([
    'container.build_hash' => 'BgZpdLh',
    'container.build_id' => '0a2b2d83',
    'container.build_time' => 1587661190,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBgZpdLh');
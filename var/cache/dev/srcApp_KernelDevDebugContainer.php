<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRQeFrIL\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRQeFrIL/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRQeFrIL.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRQeFrIL\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRQeFrIL\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'RQeFrIL',
    'container.build_id' => '1ab78557',
    'container.build_time' => 1551706449,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRQeFrIL');

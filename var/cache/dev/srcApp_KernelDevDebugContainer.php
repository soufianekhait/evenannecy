<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2jUiRGU\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2jUiRGU/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2jUiRGU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2jUiRGU\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container2jUiRGU\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '2jUiRGU',
    'container.build_id' => '1afc5695',
    'container.build_time' => 1552310294,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2jUiRGU');

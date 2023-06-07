<?php

declare(strict_types=1);

namespace Petk\Skeleton;

use Composer\Script\Event;

/**
 * Installer.
 */
class Installer
{
    public static function postUpdate(Event $event)
    {
        $composer = $event->getComposer();
        // do stuff
    }

    public static function postCreateProject(Event $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        // do stuff
    }

    public static function warmCache(Event $event)
    {
        // make cache toasty
    }
}

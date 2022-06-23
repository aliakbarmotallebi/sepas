<?php

namespace App\Traits;

trait Status
{
    public static $PUBLISHED_STATUS = 'PUBLISHED';

    public static $UNPUBLISHED_STATUS = 'UNPUBLISHED';

    /**
     * @return bool
     */
    public function hasPublished(): bool
    {
        return (bool) ($this->status == self::$PUBLISHED_STATUS);
    }

    /**
     * @return bool
     */
    public function hasUnPublished(): bool
    {
        return (bool) ! $this->hasPublished();
    }
}

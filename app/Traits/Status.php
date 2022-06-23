<?php namespace App\Traits;

trait Status {

    static $PUBLISHED_STATUS   = 'PUBLISHED';

    static $UNPUBLISHED_STATUS = 'UNPUBLISHED';

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
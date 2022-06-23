<?php

namespace App\Traits;

use Carbon\Carbon;
use Hekmatinasser\Verta\Facades\Verta;

trait Jalali
{
    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return verta($this->created_at);
    }

    /**
     * @return string
     */
    public function getAge()
    {
        return verta($this->created_at)->formatDifference();
    }
}

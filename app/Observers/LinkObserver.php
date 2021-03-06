<?php

namespace App\Observers;
use App\Models\Link;
use Cache;
class LinkObserver
{
    // 在保存是清空cache_key对应的缓存
    public function saved(Link $link){
        Cache::forget($link->cache_key);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: yarmat
 * Date: 16.01.19
 * Time: 11:18
 */

namespace Yarmat\Seo\Traits;


trait HasSeoTrait
{
    public function seo()
    {
        return $this->morphOne(config('seo.model'), 'seoable')->withDefault();
    }

    public function saveSeo(array $attributes)
    {
        return $this->seo()->updateOrCreate(['seoable_id' => $this->id], $attributes);
    }

    public function deleteSeo()
    {
        return $this->seo()->delete();
    }
}

<?php

namespace Yarmat\Seo\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Yarmat\Seo\Models\Seo
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $keywords
 */
class Seo extends Model
{

    public $timestamps = false;

    public $translatable = ['title', 'description', 'keywords'];

    protected $fillable = ['title', 'description', 'keywords'];

    public function seoable()
    {
        return $this->morphTo();
    }

}

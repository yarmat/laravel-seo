<?php

namespace Yarmat\Seo\Contracts;

interface SeoContract
{
    public function seo();

    public function saveSeo(array $attributes);

    public function deleteSeo();
}

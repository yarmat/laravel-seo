## Laravel-seo

Package for using seo fields (Title, Description, Keywords) in your Eloquent Model.

## Installing

<pre>composer require yarmat/laravel-seo</pre>

You must publish the migration with:

<pre>php artisan vendor:publish --provider="Yarmat\Seo\SeoServiceProvider" --tag="migrations"
</pre>

After the migration has been published you can create seos-tables by running the migrations:

<pre>php artisan migrate</pre>

##Usage

First, add the Yarmat\Seo\Traits\HasSeoTrait trait to your model(s):

<pre>
use Illuminate\Database\Eloquent\Model;
use Yarmat\Seo\Traits\HasSeoTrait;

class Blog extends Model 
{
    use HasSeoTrait;
}
</pre>

A Seo fields can be added to your model:
<pre>
$blog->saveSeo([
    'title'       => 'Title',
    'description' => 'Description',
    'keywords'    => 'Keywords'
]);
</pre>

A Seo fields can be deleted from your model:
<pre>
$blog->deleteSeo();
</pre>

Get the Seo fields
<pre>
$blog->seo->title; // if seo.title not added to this model returned null
$blog->seo->description; // if seo.description not added to this model returned null
$blog->seo->keywords; // if seo.keywords not added to this model returned null
</pre>

##If you wont to use your own Model

You must publish the migration with:

<pre>php artisan vendor:publish --provider="Yarmat\Seo\SeoServiceProvider" --tag="config"</pre>

After publishing edit config file seo.php
<pre>
return [
    'model' => App\Seo.php // f.e.
];
</pre>

## License

The Laravel-seo is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

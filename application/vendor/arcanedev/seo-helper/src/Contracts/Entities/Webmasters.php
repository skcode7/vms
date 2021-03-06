<?php namespace Arcanedev\SeoHelper\Contracts\Entities;

use Arcanedev\SeoHelper\Contracts\Renderable;

/**
 * Interface  Webmasters
 *
 * @package   Arcanedev\SeoHelper\Contracts\Entities
 * @author    ARCANEDEV <arcanedev.maroc@gmail.com>
 */
interface Webmasters extends Renderable
{
    /* -----------------------------------------------------------------
     |  Getters & Setters
     | -----------------------------------------------------------------
     */

    /**
     * Get all the metas collection.
     *
     * @return \Arcanedev\SeoHelper\Contracts\Entities\MetaCollection
     */
    public function all();

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Make Webmaster instance.
     *
     * @param  array  $webmasters
     *
     * @return self
     */
    public static function make(array $webmasters = []);

    /**
     * Add a webmaster to collection.
     *
     * @param  string  $webmaster
     * @param  string  $content
     *
     * @return self
     */
    public function add($webmaster, $content);

    /**
     * Reset the webmaster collection.
     *
     * @return self
     */
    public function reset();
}

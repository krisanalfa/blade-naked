<?php namespace KrisanAlfa\Theme;

/**
 * A Blade Theme for Bono Theme
 *
 * @category  Theme
 * @package   BladeNaked
 * @author    Krisan Alfa Timur <krisan47@gmail.com>
 * @copyright 2013 PT Sagara Xinix Solusitama
 * @license   https://raw.github.com/xinix-technology/bono/master/LICENSE MIT
 * @link      https://github.com/krisanalfa/blade-naked
 */
class BladeNaked extends BladeTheme
{
    public function __construct($config)
    {
        parent::__construct($config);

        $directory = explode(DIRECTORY_SEPARATOR.'src', __DIR__);
        $directory = reset($directory);

        $this->addBaseDirectory($directory, 4);

        $this->resolveAssetPath('vendor/blade-naked');
    }
}

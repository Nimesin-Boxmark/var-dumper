<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var)
    {
        VarDumper::dump($var);

        return $var;
    }
}

if (!function_exists('dd')) {
    function dd($var)
    {
        VarDumper::dump($var);


        exit(1);
    }
}

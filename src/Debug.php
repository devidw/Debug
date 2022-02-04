<?php

namespace Devidw\Debug;

/**
 * Class Debug
 * 
 * @package Devidw\Debug
 * @version 1.0.0
 */
class Debug
{
    /**
     * Dump the given variable
     * 
     * @since 1.0.0
     * 
     * @param mixed $var The variable to dump
     * @param bool $die Whether to die after dumping
     * 
     * @return void
     */
    public static function dump(mixed $var, $die = true): void
    {
        $dump = var_export($var, true);

        echo <<<HTML
        <pre><code class="language-php">{$dump}</code></pre>
        <link rel="stylesheet" href="https://highlightjs.org/static/demo/styles/atom-one-dark.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
        <script>hljs.highlightAll()</script>
        HTML;

        if ($die) {
            die;
        }
    }
}

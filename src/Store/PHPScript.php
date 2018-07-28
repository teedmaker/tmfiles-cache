<?php

namespace TMFiles\Cache\Store;

use TMFile;
use Excpetion;

class PHPScript
{
    protected $file        = null;
    protected $cache       = null;
    protected $engineClass = 'TMFiles\\Engines\\PHPSimple';

    /**
     * Initializing a new PHP script file
     *
     * @param string $path
     * @param string $cacheDir
     * @param string $cacheName
     */
    public function __construct(string $path, string $cacheDir=null, string $cacheName=null) {
        $cacheDir  = $cacheDir ?? TMFFILES_DIR;
        $cacheDir .= substr($cacheDir, -1)==='/'? '': '/';
        $cacheName = $cacheName ?? md5($path);
        $cache     = "{$cacheDir}{$cacheName}";
        $this->file  = new TMFile($path);
        $this->cache = new TMFile($cache);
        return $this;
    }

    /**
     * Setting the engine class to manipulates this file.
     *
     * @param [type] $object
     * @return TMFiles\Cache\Store\PHPScript
     */
    public function engine($object) {
        if (is_string($object)) {
            if (!class_exists($object)) {
                throw new Excpetion("The engine class `{$object}` does not exists.");
            }
            $object = new $object;
        }
        $this->engineClass = $object;
        return $this;
    }

    /**
     * Get the file
     *
     * @return void
     */
    public function get() {
        if ($this->verifyHasEdited()) {
            return $this->cacheTheFile();
        }
        return $this->cache->getPath();
    }

    // protecteds methods

    /**
     * Verify if the file has edited.
     * If the `filemtime` is greater than the cached file, then was.
     *
     * @return boolean
     */
    protected function verifyHasEdited(): bool {
        return $this->file->modified()->isGreaterThan($this->cache);
    }

    protected function cacheTheFile() {}

}

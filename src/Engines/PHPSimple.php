<?php

namespace TMFiles\Cache\Engines;

class PHPSimple extends EngineBase implements EngineModel
{
    protected $content;

    public function __construct(string $content) {
        $this->content = $content;
        $this->manipulate();
        $this->setFunc('@helloWorld', function() {
            echo "Hello World!";
        });
        $this->setFunc('@sayMyName(:name)', function($name) {
            echo "Hello {$name}!";
        })->set('name', '([a-zA-Z])');
    }

    public function manipulate() {
        $this->content = str_replace('test', '123', $this->content);
    }

    /**
     * Returns the content value
     *
     * @return string
     */
    public function getContent(): string {
        return $this->content;
    }
}

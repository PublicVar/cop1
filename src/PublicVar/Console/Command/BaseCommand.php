<?php

namespace PublicVar\Console\Command;

use Symfony\Component\Console\Command\Command;

class BaseCommand extends Command
{

    protected $description;
    protected $arguments;
    protected $keywords;
    protected $options;

    public function __construct($name = null, $description = '', $keywords = '', $arguments = null, $options = null)
    {
        parent::__construct($name);
        $this->description = $description;
        $this->arguments = $arguments;
        $this->keywords = $keywords;
        $this->options = $options;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getArguments()
    {
        return $this->arguments;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    public function setArguments($arguments)
    {
        $this->arguments = $arguments;
        return $this;
    }

    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

}

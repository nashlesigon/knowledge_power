<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Propel\PropelBundle\PropelBundle(),
            new Knowledge\HibarooBundle\KnowledgeHibarooBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        // use YAML for configuration
        // comment to use another configuration format
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');

        // uncomment to use XML for configuration
        //$loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.xml');

        // uncomment to use PHP for configuration
        //$loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.php');
    }
}

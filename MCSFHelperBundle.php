<?php

namespace MCSF\HelperBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use MCSF\HelperBundle\DependencyInjection\Compiler\TranslationCompilerPass;

class MCSFHelperBundle extends Bundle {

  public function build(ContainerBuilder $container) {
    parent::build($container);

    $container->addCompilerPass(new TranslationCompilerPass());
  }
}
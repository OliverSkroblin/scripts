<?php declare(strict_types=1);

use Shopware\Core\Framework\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class PublicBundle extends Bundle
{
    protected $name = 'Public Bundle';

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $definitions = $container->getDefinitions();
        foreach ($definitions as $definition) {
            $definition->setPublic(true);
        }
    }
}

<?php declare(strict_types = 1);

namespace Contributte\Barelib\DI;

use Nette\DI\CompilerExtension;

/**
 * Example Nette DI compiler extension.
 *
 * @see https://doc.nette.org/en/dependency-injection/nette-container
 */
class BarelibExtension extends CompilerExtension
{

	public function loadConfiguration(): void
	{
		// $builder = $this->getContainerBuilder();
		// $config = $this->getConfig();

		// Register services here
		// $builder->addDefinition($this->prefix('service'))
		//     ->setFactory(ExampleService::class);
	}

	public function beforeCompile(): void
	{
		// Modify services before container is compiled
	}

}

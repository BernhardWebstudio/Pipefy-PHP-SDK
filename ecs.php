<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthFixer::class);
    $services->set(BlankLineAfterOpeningTagFixer::class);

    $parameters = $containerConfigurator->parameters();

    $parameters->set(Option::SETS, [
        SetList::CLEAN_CODE,
        SetList::SYMPLIFY,
        SetList::COMMON,
        SetList::PSR_12,
        SetList::DOCTRINE_ANNOTATIONS,
        SetList::ARRAY,
    ]);

    $parameters->set(Option::PATHS, [__DIR__ . '/src', __DIR__ . '/ecs.php', __DIR__ . '/rector.php']);

    $parameters->set(Option::SKIP, [
        // paths to skip
        '*/Fixture/*',
        '*/Source/*',
    ]);
};

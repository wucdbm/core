<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Elasticsearch\Filter;

use ApiPlatform\Api\FilterInterface as BaseFilterInterface;

/**
 * Elasticsearch filter interface.
 *
 * @experimental
 *
 * @author Baptiste Meyer <baptiste.meyer@gmail.com>
 */
interface FilterInterface extends BaseFilterInterface
{
    public function apply(array $clauseBody, string $resourceClass, ?string $operationName = null, array $context = []): array;
}

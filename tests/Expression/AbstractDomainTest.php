<?php

namespace Zangra\Component\Odoo\Tests\Expression;

use Zangra\Component\Odoo\DBAL\Expression\Comparison;
use Zangra\Component\Odoo\Expression\CompositeDomain;
use Zangra\Component\Odoo\Tests\AbstractTest;

/**
 * @abstract
 */
abstract class AbstractDomainTest extends AbstractTest
{
    /**
     * @param mixed $value
     */
    public function createComparison(string $operator, string $fieldName, $value): Comparison
    {
        return new Comparison($operator, $fieldName, $value);
    }

    public function createCompositeDomain(string $operator, array $domains = []): CompositeDomain
    {
        return new CompositeDomain($operator, $domains);
    }
}

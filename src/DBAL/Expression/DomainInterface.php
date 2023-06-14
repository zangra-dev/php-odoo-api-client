<?php

namespace Zangra\Component\Odoo\DBAL\Expression;

use IteratorAggregate;

interface DomainInterface extends IteratorAggregate
{
    public function toArray(): array;
}

<?php

namespace Fnp\Acl\Contracts;

interface AclAction
{
    public function canBePerformedBy(AclResourceRule $resource): bool;
}

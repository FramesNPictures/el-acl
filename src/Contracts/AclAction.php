<?php

namespace Fnp\Acl\Contracts;

interface AclAction
{
    public function canBePerformedBy(AclResource $resource): bool;
}

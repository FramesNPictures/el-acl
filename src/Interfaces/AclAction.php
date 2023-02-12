<?php

namespace Fnp\Acl\Interfaces;

interface AclAction
{
    public function canBePerformedBy(AclResource $resource): bool;
}

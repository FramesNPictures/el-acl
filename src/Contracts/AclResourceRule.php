<?php

namespace Fnp\Acl\Contracts;

interface AclResourceRule extends AclResource
{
    public function canBeCreatedBy(AclResource $resource): bool;
    public function canBeReadBy(AclResource $resource): bool;
    public function canBeUpdatedBy(AclResource $resource): bool;
    public function canBeDeletedBy(AclResource $resource): bool;
}

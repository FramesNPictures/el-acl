<?php

namespace Fnp\Acl\Contracts;

interface AclResource extends Acl
{
    public function canBeCreatedBy(Acl $resource): bool;
    public function canBeReadBy(Acl $resource): bool;
    public function canBeUpdatedBy(Acl $resource): bool;
    public function canBeDeletedBy(Acl $resource): bool;
}

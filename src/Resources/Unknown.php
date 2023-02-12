<?php

namespace Fnp\Acl\Resources;

use Fnp\Acl\Interfaces\AclResource;

class Unknown implements AclResource
{
    public function canBeCreatedBy(AclResource $resource): bool
    {
        return false;
    }

    public function canBeReadBy(AclResource $resource): bool
    {
        return false;
    }

    public function canBeUpdatedBy(AclResource $resource): bool
    {
        return false;
    }

    public function canBeDeletedBy(AclResource $resource): bool
    {
        return false;
    }
}

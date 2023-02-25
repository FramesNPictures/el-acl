<?php

namespace Fnp\Acl\Resources;

use Fnp\Acl\Contracts\AclResourceRule;

class Unknown implements AclResourceRule
{
    public function canBeCreatedBy(AclResourceRule $resource): bool
    {
        return false;
    }

    public function canBeReadBy(AclResourceRule $resource): bool
    {
        return false;
    }

    public function canBeUpdatedBy(AclResourceRule $resource): bool
    {
        return false;
    }

    public function canBeDeletedBy(AclResourceRule $resource): bool
    {
        return false;
    }
}

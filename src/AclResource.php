<?php

namespace Fnp\Acl;

abstract class AclResource
{
    private mixed $resource;

    public function __construct(mixed $resource)
    {
        $this->resource = $resource;
    }

    public function getResource(): mixed
    {
        return $this->resource;
    }

    abstract function canCreate(AclResource $resource): bool;
    abstract function canRead(AclResource $resource): bool;
    abstract function canUpdate(AclResource $resource): bool;
    abstract function canDelete(AclResource $resource): bool;
}

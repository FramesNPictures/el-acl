<?php

namespace Fnp\Acl;

use Fnp\Acl\Interfaces\AclResource;
use Fnp\Acl\Resources\Itself;
use http\Params;

class Can
{
    public static function resource(AclResource $resource): CanResourceHelper
    {
        return new CanResourceHelper($resource);
    }
}

class CanBeHelper
{
    private AclResource $resource;

    public function __construct(AclResource $resource)
    {
        $this->resource = $resource;
    }

    public function created(): bool
    {
        return $this->resource->canBeCreatedBy(new Itself());
    }

    public function read(): bool
    {
        return $this->resource->canBeReadBy(new Itself());
    }

    public function updated(): bool
    {
        return $this->resource->canBeUpdatedBy(new Itself());
    }

    public function deleted(): bool
    {
        return $this->resource->canBeDeletedBy(new Itself());
    }
}


class CanResourceHelper
{
    private AclResource $resource;

    public function __construct(AclResource $resource)
    {
        $this->resource = $resource;
    }

    public function be(): CanBeHelper
    {
        return new CanBeHelper($this->resource);
    }

    public function create(AclResource $resource): bool
    {
        return $resource->canBeCreatedBy($this->resource);
    }

    public function read(AclResource $resource): bool
    {
        return $resource->canBeReadBy($this->resource);
    }

    public function update(AclResource $resource): bool
    {
        return $resource->canBeUpdatedBy($this->resource);
    }

    public function delete(AclResource $resource): bool
    {
        return $resource->canBeDeletedBy($this->resource);
    }
}

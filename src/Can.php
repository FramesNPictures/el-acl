<?php

namespace Fnp\Acl;

use Fnp\Acl\Contracts\AclAction;
use Fnp\Acl\Contracts\AclResource;
use Fnp\Acl\Contracts\AclResourceRule;
use Fnp\Acl\Resources\Unknown;

class Can
{
    public static function resource(AclResource $resource): CanResourceHelper
    {
        return new CanResourceHelper($resource);
    }

    public static function action(AclAction $action): CanActionHelper
    {
        return new CanActionHelper($action);
    }
}

class CanActionHelper
{
    private AclAction $action;

    public function bePerformed(): bool
    {
        return $this->action->canBePerformedBy(new Unknown());
    }
}

class CanBeHelper
{
    private AclResourceRule $resource;

    public function __construct(AclResourceRule $resource)
    {
        $this->resource = $resource;
    }

    public function created(): bool
    {
        return $this->resource->canBeCreatedBy(new Unknown());
    }

    public function read(): bool
    {
        return $this->resource->canBeReadBy(new Unknown());
    }

    public function updated(): bool
    {
        return $this->resource->canBeUpdatedBy(new Unknown());
    }

    public function deleted(): bool
    {
        return $this->resource->canBeDeletedBy(new Unknown());
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

    public function perform(AclAction $action): bool
    {
        return $action->canBePerformedBy($this->resource);
    }

    public function create(AclResourceRule $resource): bool
    {
        return $resource->canBeCreatedBy($this->resource);
    }

    public function read(AclResourceRule $resource): bool
    {
        return $resource->canBeReadBy($this->resource);
    }

    public function update(AclResourceRule $resource): bool
    {
        return $resource->canBeUpdatedBy($this->resource);
    }

    public function delete(AclResourceRule $resource): bool
    {
        return $resource->canBeDeletedBy($this->resource);
    }
}

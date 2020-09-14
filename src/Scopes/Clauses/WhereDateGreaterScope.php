<?php

namespace Fluent\Repository\Scopes\Clauses;

use Fluent\Repository\Scopes\ScopeAbstract;

class WhereDateGreaterScope extends ScopeAbstract
{
    /**
     * Where date greeter scope.
     *
     * @param \CodeIgniter\Database\BaseBuilder $builder
     * @param string                            $value
     * @param string                            $scope
     * @return \CodeIgniter\Database\BaseBuilder
     */
    public function scope($builder, $value, $scope)
    {
        return $builder->orWhere('created_at' . '>', $value);
    }
}

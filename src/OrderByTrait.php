<?php

namespace Rukhsar\AddonTraits;

use DB;

trait OrderByTrait
{
    /*
    *   Provide a standard method for ordering a model by default.
    *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string                                $field
     * @param string                                $direction
     *
     * @return \Illuminate\Database\Eloquent\Builder
    */
    public function scopeOrder($query, $field='', $direction='')
    {
        if (isset($this->default_order_by) && empty($field))
        {
            $field = $this->default_order_by;
        }

        if (isset($this->default_order_direction) && empty($direction))
        {
            $direction = $this->default_order_direction;
        }

        if (empty($direction))
        {
            $direction = 'asc';
        }

        if(!empty($field))
        {
            return $query->orderBy(DB::raw($field), $direction);
        }

        return $this;
    }
}
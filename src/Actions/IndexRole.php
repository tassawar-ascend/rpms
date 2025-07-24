<?php

namespace LaravelCore174\Rpms\Actions;

use Illuminate\Support\Facades\DB;

class IndexRole
{
    public function __invoke()
    {
        return DB::table('roles')->paginate(10);
    }
}
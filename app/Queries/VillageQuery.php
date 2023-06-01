<?php

namespace App\Queries;

use App\Models\Village;
use App\ViewModels\VillageCollection;
use LaravelCommon\App\Queries\Query;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Processors\Processor;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Foundation\Auth\User;

class VillageQuery extends Query
{
    /**
     * Create a new query builder instance.
     *
     * @param  Village  $village
     * @param  \Illuminate\Database\ConnectionInterface  $connection
     * @param  \Illuminate\Database\Query\Grammars\Grammar|null  $grammar
     * @param  \Illuminate\Database\Query\Processors\Processor|null  $processor
     * @return void
     */
    public function __construct(
        Village $village,
        ConnectionInterface $connection,
        Grammar $grammar = null,
        Processor $processor = null
    ) {
        parent::__construct($village, $connection, $grammar, $processor);
    }


    public function collectionClass()
    {
        return VillageCollection::class;
    }
}

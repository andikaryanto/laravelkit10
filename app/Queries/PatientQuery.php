<?php

namespace App\Queries;

use App\Models\Patient;
use App\ViewModels\PatientCollection;
use LaravelCommon\App\Queries\Query;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Processors\Processor;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Foundation\Auth\User;

class PatientQuery extends Query
{
    /**
     * Create a new query builder instance.
     *
     * @param  Patient  $patient
     * @param  \Illuminate\Database\ConnectionInterface  $connection
     * @param  \Illuminate\Database\Query\Grammars\Grammar|null  $grammar
     * @param  \Illuminate\Database\Query\Processors\Processor|null  $processor
     * @return void
     */
    public function __construct(
        Patient $patient,
        ConnectionInterface $connection,
        Grammar $grammar = null,
        Processor $processor = null
    ) {
        parent::__construct($patient, $connection, $grammar, $processor);
    }


    public function collectionClass()
    {
        return PatientCollection::class;
    }
}

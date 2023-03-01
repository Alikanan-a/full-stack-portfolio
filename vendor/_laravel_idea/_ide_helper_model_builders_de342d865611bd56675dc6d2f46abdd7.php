<?php //62004a5a57a5b10ab3510c30bc70b07a
/** @noinspection all */

namespace LaravelIdea\Helper {

    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\ConnectionInterface;
    use Illuminate\Database\Eloquent\Builder;

    /**
     * @see \Illuminate\Database\Query\Builder::useIndex
     * @method $this useIndex(string $index)
     * @see \Illuminate\Database\Query\Builder::whereJsonContainsKey
     * @method $this whereJsonContainsKey(string $column, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereIn
     * @method $this whereIn(Expression|string $column, $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereNotIn
     * @method $this orWhereNotIn(Expression|string $column, $values)
     * @see \Illuminate\Database\Query\Builder::selectRaw
     * @method $this selectRaw(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::havingNotNull
     * @method $this havingNotNull(array|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::insertOrIgnore
     * @method int insertOrIgnore(array $values)
     * @see \Illuminate\Database\Query\Builder::orHavingNull
     * @method $this orHavingNull(string $column)
     * @see \Illuminate\Database\Query\Builder::unionAll
     * @method $this unionAll(\Closure|Builder|\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereNull
     * @method $this orWhereNull(array|Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::joinWhere
     * @method $this joinWhere(Expression|string $table, \Closure|string $first, string $operator, string $second, string $type = 'inner')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonContains
     * @method $this orWhereJsonContains(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::orderBy
     * @method $this orderBy(\Closure|Expression|Builder|\Illuminate\Database\Query\Builder|string $column, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::raw
     * @method Expression raw($value)
     * @see \Illuminate\Database\Concerns\BuildsQueries::each
     * @method $this each(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::setBindings
     * @method $this setBindings(array $bindings, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonLength
     * @method $this orWhereJsonLength(string $column, $operator, $value = null)
     * @see \Illuminate\Database\Query\Builder::whereRowValues
     * @method $this whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereNotExists
     * @method $this orWhereNotExists(\Closure|Builder|\Illuminate\Database\Query\Builder $callback)
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerInRaw
     * @method $this orWhereIntegerInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::crossJoin
     * @method $this crossJoin(Expression|string $table, \Closure|null|string $first = null, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::newQuery
     * @method $this newQuery()
     * @see \Illuminate\Database\Query\Builder::rightJoinSub
     * @method $this rightJoinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::average
     * @method mixed average(Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::whereFullText
     * @method $this whereFullText(string|string[] $columns, string $value, array $options = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::existsOr
     * @method $this existsOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::sum
     * @method int|mixed sum(Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::havingRaw
     * @method $this havingRaw(string $sql, array $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkMap
     * @method $this chunkMap(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::getRawBindings
     * @method $this getRawBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereColumn
     * @method $this orWhereColumn(array|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::min
     * @method mixed min(Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::forceIndex
     * @method $this forceIndex(string $index)
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method $this unless($value = null, callable $callback = null, callable $default = null)
     * @see \Illuminate\Database\Query\Builder::whereNotIn
     * @method $this whereNotIn(Expression|string $column, $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereTime
     * @method $this whereTime(Expression|string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazyByIdDesc
     * @method $this lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::insertUsing
     * @method int insertUsing(array $columns, \Closure|Builder|\Illuminate\Database\Query\Builder|string $query)
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazyById
     * @method $this lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::rightJoinWhere
     * @method $this rightJoinWhere(Expression|string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::groupBy
     * @method $this groupBy(...$groups)
     * @see \Illuminate\Database\Query\Builder::union
     * @method $this union(\Closure|Builder|\Illuminate\Database\Query\Builder $query, bool $all = false)
     * @see \Illuminate\Database\Query\Builder::orWhereDay
     * @method $this orWhereDay(Expression|string $column, string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orWhereFullText
     * @method $this orWhereFullText(string|string[] $columns, string $value, array $options = [])
     * @see \Illuminate\Database\Query\Builder::joinSub
     * @method $this joinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::selectSub
     * @method $this selectSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::ignoreIndex
     * @method $this ignoreIndex(string $index)
     * @see \Illuminate\Database\Query\Builder::dd
     * @method never dd()
     * @see \Illuminate\Database\Query\Builder::whereNull
     * @method $this whereNull(array|Expression|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::prepareValueAndOperator
     * @method $this prepareValueAndOperator(string $value, string $operator, bool $useDefault = false)
     * @see \Illuminate\Database\Query\Builder::whereIntegerNotInRaw
     * @method $this whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRaw
     * @method $this orWhereRaw(string $sql, $bindings = [])
     * @see \Illuminate\Database\Query\Builder::whereJsonContains
     * @method $this whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereBetweenColumns
     * @method $this orWhereBetweenColumns(Expression|string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::mergeWheres
     * @method $this mergeWheres(array $wheres, array $bindings)
     * @see \Illuminate\Database\Query\Builder::sharedLock
     * @method $this sharedLock()
     * @see \Illuminate\Database\Query\Builder::applyBeforeQueryCallbacks
     * @method $this applyBeforeQueryCallbacks()
     * @see \Illuminate\Database\Query\Builder::orderByRaw
     * @method $this orderByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::doesntExist
     * @method bool doesntExist()
     * @see \Illuminate\Database\Query\Builder::addNestedHavingQuery
     * @method $this addNestedHavingQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereMonth
     * @method $this orWhereMonth(Expression|string $column, string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::whereNotNull
     * @method $this whereNotNull(array|Expression|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::count
     * @method int count(Expression|string $columns = '*')
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetween
     * @method $this orWhereNotBetween(Expression|string $column, iterable $values)
     * @see \Illuminate\Database\Query\Builder::fromRaw
     * @method $this fromRaw(string $expression, $bindings = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method $this mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Query\Builder::take
     * @method $this take(int $value)
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetweenColumns
     * @method $this orWhereNotBetweenColumns(Expression|string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::updateOrInsert
     * @method $this updateOrInsert(array $attributes, array $values = [])
     * @see \Illuminate\Database\Query\Builder::havingNull
     * @method $this havingNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method $this flushMacros()
     * @see \Illuminate\Database\Query\Builder::havingNested
     * @method $this havingNested(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::cloneWithout
     * @method $this cloneWithout(array $properties)
     * @see \Illuminate\Database\Query\Builder::whereBetweenColumns
     * @method $this whereBetweenColumns(Expression|string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::fromSub
     * @method $this fromSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonContainsKey
     * @method $this orWhereJsonContainsKey(string $column)
     * @see \Illuminate\Database\Query\Builder::cleanBindings
     * @method $this cleanBindings(array $bindings)
     * @see \Illuminate\Database\Query\Builder::orWhereDate
     * @method $this orWhereDate(Expression|string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::avg
     * @method mixed avg(Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::addBinding
     * @method $this addBinding($value, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::getGrammar
     * @method $this getGrammar()
     * @see \Illuminate\Database\Query\Builder::lockForUpdate
     * @method $this lockForUpdate()
     * @see \Illuminate\Database\Concerns\BuildsQueries::eachById
     * @method $this eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::cloneWithoutBindings
     * @method $this cloneWithoutBindings(array $except)
     * @see \Illuminate\Database\Query\Builder::orHavingRaw
     * @method $this orHavingRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntContainKey
     * @method $this whereJsonDoesntContainKey(string $column, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::castBinding
     * @method $this castBinding($value)
     * @see \Illuminate\Database\Query\Builder::forPageBeforeId
     * @method $this forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::getColumns
     * @method $this getColumns()
     * @see \Illuminate\Database\Query\Builder::orWhereBetween
     * @method $this orWhereBetween(Expression|string $column, iterable $values)
     * @see \Illuminate\Database\Concerns\ExplainsQueries::explain
     * @method $this explain()
     * @see \Illuminate\Database\Query\Builder::select
     * @method $this select(array|mixed $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::addSelect
     * @method $this addSelect(array|mixed $column)
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method $this when($value = null, callable $callback = null, callable $default = null)
     * @see \Illuminate\Database\Query\Builder::orWhereExists
     * @method $this orWhereExists(\Closure|Builder|\Illuminate\Database\Query\Builder $callback, bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereJsonLength
     * @method $this whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::beforeQuery
     * @method $this beforeQuery(callable $callback)
     * @see \Illuminate\Database\Query\Builder::truncate
     * @method $this truncate()
     * @see \Illuminate\Database\Query\Builder::lock
     * @method $this lock(bool|string $value = true)
     * @see \Illuminate\Database\Query\Builder::join
     * @method $this join(Expression|string $table, \Closure|string $first, null|string $operator = null, null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::whereMonth
     * @method $this whereMonth(Expression|string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::having
     * @method $this having(\Closure|string $column, float|int|null|string $operator = null, float|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereNested
     * @method $this whereNested(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRowValues
     * @method $this orWhereRowValues(array $columns, string $operator, array $values)
     * @see \Illuminate\Database\Query\Builder::useWritePdo
     * @method $this useWritePdo()
     * @see \Illuminate\Database\Query\Builder::orWhereIn
     * @method $this orWhereIn(Expression|string $column, $values)
     * @see \Illuminate\Database\Query\Builder::orderByDesc
     * @method $this orderByDesc(\Closure|Expression|Builder|\Illuminate\Database\Query\Builder|string $column)
     * @see \Illuminate\Database\Query\Builder::orWhereNotNull
     * @method $this orWhereNotNull(Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::getProcessor
     * @method $this getProcessor()
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazy
     * @method $this lazy(int $chunkSize = 1000)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContainKey
     * @method $this orWhereJsonDoesntContainKey(string $column)
     * @see \Illuminate\Database\Query\Builder::skip
     * @method $this skip(int $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinWhere
     * @method $this leftJoinWhere(Expression|string $table, \Closure|string $first, string $operator, string $second)
     * @see \Illuminate\Database\Query\Builder::doesntExistOr
     * @method $this doesntExistOr(\Closure $callback)
     * @see \Illuminate\Database\Query\Builder::whereNotExists
     * @method $this whereNotExists(\Closure|Builder|\Illuminate\Database\Query\Builder $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereIntegerInRaw
     * @method $this whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereDay
     * @method $this whereDay(Expression|string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::forNestedWhere
     * @method $this forNestedWhere()
     * @see \Illuminate\Database\Query\Builder::max
     * @method mixed max(Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::whereExists
     * @method $this whereExists(\Closure|Builder|\Illuminate\Database\Query\Builder $callback, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::inRandomOrder
     * @method $this inRandomOrder(int|string $seed = '')
     * @see \Illuminate\Database\Query\Builder::havingBetween
     * @method $this havingBetween(string $column, iterable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereYear
     * @method $this orWhereYear(Expression|string $column, string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkById
     * @method $this chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::whereDate
     * @method $this whereDate(Expression|string $column, string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::decrementEach
     * @method $this decrementEach(array $columns, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntContain
     * @method $this whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::rawValue
     * @method $this rawValue(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::forPageAfterId
     * @method $this forPageAfterId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::forPage
     * @method $this forPage(int $page, int $perPage = 15)
     * @see \Illuminate\Database\Query\Builder::exists
     * @method bool exists()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method $this macroCall(string $method, array $parameters)
     * @see \Illuminate\Database\Concerns\BuildsQueries::first
     * @method $this first(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereColumn
     * @method $this whereColumn(array|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::numericAggregate
     * @method $this numericAggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNotBetween
     * @method $this whereNotBetween(Expression|string $column, iterable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getConnection
     * @method ConnectionInterface getConnection()
     * @see \Illuminate\Database\Query\Builder::mergeBindings
     * @method $this mergeBindings(\Illuminate\Database\Query\Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContain
     * @method $this orWhereJsonDoesntContain(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinSub
     * @method $this leftJoinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::updateFrom
     * @method $this updateFrom(array $values)
     * @see \Illuminate\Database\Query\Builder::crossJoinSub
     * @method $this crossJoinSub(\Closure|Builder|\Illuminate\Database\Query\Builder|string $query, string $as)
     * @see \Illuminate\Database\Query\Builder::limit
     * @method $this limit(int $value)
     * @see \Illuminate\Database\Query\Builder::from
     * @method $this from(\Closure|Builder|\Illuminate\Database\Query\Builder|string $table, null|string $as = null)
     * @see \Illuminate\Database\Query\Builder::whereNotBetweenColumns
     * @method $this whereNotBetweenColumns(Expression|string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::insertGetId
     * @method int insertGetId(array $values, null|string $sequence = null)
     * @see \Illuminate\Database\Query\Builder::whereBetween
     * @method $this whereBetween(Expression|string $column, iterable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Concerns\BuildsQueries::tap
     * @method $this tap(callable $callback)
     * @see \Illuminate\Database\Query\Builder::offset
     * @method $this offset(int $value)
     * @see \Illuminate\Database\Query\Builder::addNestedWhereQuery
     * @method $this addNestedWhereQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::incrementEach
     * @method $this incrementEach(array $columns, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::rightJoin
     * @method $this rightJoin(Expression|string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::leftJoin
     * @method $this leftJoin(Expression|string $table, \Closure|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::insert
     * @method bool insert(array $values)
     * @see \Illuminate\Database\Query\Builder::distinct
     * @method $this distinct()
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunk
     * @method $this chunk(int $count, callable $callback)
     * @see \Illuminate\Database\Query\Builder::reorder
     * @method $this reorder(\Closure|Expression|\Illuminate\Database\Query\Builder|null|string $column = null, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::whereYear
     * @method $this whereYear(Expression|string $column, string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getCountForPagination
     * @method $this getCountForPagination(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::groupByRaw
     * @method $this groupByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::aggregate
     * @method $this aggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerNotInRaw
     * @method $this orWhereIntegerNotInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::implode
     * @method string implode(string $column, string $glue = '')
     * @see \Illuminate\Database\Query\Builder::dump
     * @method \Illuminate\Database\Query\Builder dump()
     * @see \Illuminate\Database\Query\Builder::addWhereExistsQuery
     * @method $this addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method $this macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Query\Builder::whereRaw
     * @method $this whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::toSql
     * @method string toSql()
     * @see \Illuminate\Database\Query\Builder::orHaving
     * @method $this orHaving(\Closure|string $column, float|int|null|string $operator = null, float|int|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::getBindings
     * @method array getBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereTime
     * @method $this orWhereTime(Expression|string $column, string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orHavingNotNull
     * @method $this orHavingNotNull(string $column)
     * @see \Illuminate\Database\Query\Builder::dynamicWhere
     * @method $this dynamicWhere(string $method, array $parameters)
     */
    class _BaseBuilder extends Builder {}

    /**
     * @method \Illuminate\Support\Collection mapWithKeys(callable $callback)
     * @method \Illuminate\Support\Collection partition($key, null|string $operator = null, null $value = null)
     * @method \Illuminate\Support\Collection mapInto($class)
     * @method \Illuminate\Support\Collection mapToGroups(callable $callback)
     * @method \Illuminate\Support\Collection groupBy($groupBy, bool $preserveKeys = false)
     * @method \Illuminate\Support\Collection pluck(string|string[] $value, null|string $key = null)
     * @method \Illuminate\Support\Collection pad(int $size, $value)
     * @method \Illuminate\Support\Collection countBy($countBy = null)
     * @method \Illuminate\Support\Collection flatMap(callable $callback)
     * @method \Illuminate\Support\Collection mapSpread(callable $callback)
     * @method \Illuminate\Support\Collection zip(\Illuminate\Contracts\Support\Arrayable[] $items)
     * @method \Illuminate\Support\Collection map(callable $callback)
     * @method \Illuminate\Support\Collection split(int $numberOfGroups)
     * @method \Illuminate\Support\Collection combine(\Illuminate\Contracts\Support\Arrayable $values)
     * @method \Illuminate\Support\Collection mapToDictionary(callable $callback)
     * @method \Illuminate\Support\Collection keys()
     * @method \Illuminate\Support\Collection transform(callable $callback)
     * @method \Illuminate\Support\Collection collapse()
     */
    class _BaseCollection extends \Illuminate\Database\Eloquent\Collection {}
}

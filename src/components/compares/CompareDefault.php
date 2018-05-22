<?php
namespace deflou\components\compares;
use deflou\components\compares\defaults\DefaultEqual;
use deflou\components\compares\defaults\DefaultGreater;
use deflou\components\compares\defaults\DefaultGreaterOrEqual;
use deflou\components\compares\defaults\DefaultLike;
use deflou\components\compares\defaults\DefaultLower;
use deflou\components\compares\defaults\DefaultLowerOrEqual;
use deflou\components\compares\defaults\DefaultNotEqual;
use deflou\interfaces\ICompare;

/**
 * Class CompareDefault
 *
 * @package deflou\components\compares
 * @author deflou.dev@gmail.com
 */
class CompareDefault extends CompareAbstract
{
    /**
     * @param mixed $first
     * @param mixed $second
     * @param string $clause
     *
     * @return bool|null
     */
    public function compare($first, $second, $clause = '')
    {
        $clauses = [
            '=' => DefaultEqual::class,
            'eq' => DefaultEqual::class,
            '!=' => DefaultNotEqual::class,
            'neq' => DefaultNotEqual::class,
            '>' => DefaultGreater::class,
            'gt' => DefaultGreater::class,
            '>=' => DefaultGreaterOrEqual::class,
            'gte' => DefaultGreaterOrEqual::class,
            '<' => DefaultLower::class,
            'lt' => DefaultLower::class,
            '<=' => DefaultLowerOrEqual::class,
            'lte' => DefaultLowerOrEqual::class,
            'like' => DefaultLike::class
        ];

        if (isset($clauses[$clause])) {
            $compareClass = $clauses[$clause];

            /**
             * @var $compare ICompare
             */
            $compare = new $compareClass();
            return $compare->compare($first, $second, $clause);
        }

        return null;
    }
}

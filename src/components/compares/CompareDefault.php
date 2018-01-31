<?php
namespace deflou\components\compares;

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
            static::GREATER => function ($first, $second) {
                if (is_numeric($first)) {
                    return $first > $second;
                }

                $cmp = strcasecmp($first, $second);

                return $cmp > 0;
            },
            static::LOWER => function ($first, $second) {
                if (is_numeric($first)) {
                    return $first < $second;
                }

                $cmp = strcasecmp($first, $second);

                return $cmp < 0;
            },
            static::EQUAL => function ($first, $second) {

                if (is_numeric($first)) {
                    $result = ($first == $second);
                } else {
                    $cmp = strcmp(strtolower($first), strtolower($second));
                    $result = $cmp ? false : true;
                }

                return $result;
            },
            static::NOT_EQUAL => function ($first, $second) {
                if (is_numeric($first)) {
                    $result = ($first != $second);
                } else {
                    $cmp = strcmp(strtolower($first), strtolower($second));
                    $result = $cmp ? true : false;
                }

                return $result;
            },
            static::LIKE => function ($first, $second) {
                return stripos($first, $second) !== false;
            }
        ];

        if (isset($clauses[$clause])) {
            return $clauses[$clause]($first, $second);
        }

        return null;
    }
}

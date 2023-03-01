<?php //8e2923d04ebb95b5aac8aee29009a51c
/** @noinspection all */

namespace Illuminate\Notifications {

    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method DatabaseNotification|null getOrPut($key, $value)
     * @method DatabaseNotification|$this shift(int $count = 1)
     * @method DatabaseNotification|null firstOrFail($key = null, $operator = null, $value = null)
     * @method DatabaseNotification|$this pop(int $count = 1)
     * @method DatabaseNotification|null pull($key, $default = null)
     * @method DatabaseNotification|null last(callable $callback = null, $default = null)
     * @method DatabaseNotification|$this random($number = null, bool $preserveKeys = false)
     * @method DatabaseNotification|null sole($key = null, $operator = null, $value = null)
     * @method DatabaseNotification|null get($key, $default = null)
     * @method DatabaseNotification|null first(callable $callback = null, $default = null)
     * @method DatabaseNotification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DatabaseNotification|null find($key, $default = null)
     * @method DatabaseNotification[] all()
     */
    class DatabaseNotificationCollection extends _BaseCollection {
        /**
         * @param int $size
         * @return DatabaseNotification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
}

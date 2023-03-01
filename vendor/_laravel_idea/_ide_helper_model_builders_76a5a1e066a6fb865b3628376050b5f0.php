<?php //db65367d84a2538d39330ecd2a1cf894
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Mail;
    use App\Models\Project;
    use App\Models\User;
    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method Mail|null getOrPut($key, $value)
     * @method Mail|$this shift(int $count = 1)
     * @method Mail|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Mail|$this pop(int $count = 1)
     * @method Mail|null pull($key, $default = null)
     * @method Mail|null last(callable $callback = null, $default = null)
     * @method Mail|$this random($number = null, bool $preserveKeys = false)
     * @method Mail|null sole($key = null, $operator = null, $value = null)
     * @method Mail|null get($key, $default = null)
     * @method Mail|null first(callable $callback = null, $default = null)
     * @method Mail|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Mail|null find($key, $default = null)
     * @method Mail[] all()
     */
    class _IH_Mail_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Mail[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Mail_QB whereId($value)
     * @method _IH_Mail_QB whereName($value)
     * @method _IH_Mail_QB whereEmail($value)
     * @method _IH_Mail_QB whereCompany($value)
     * @method _IH_Mail_QB wherePhone($value)
     * @method _IH_Mail_QB whereMessage($value)
     * @method _IH_Mail_QB whereCreatedAt($value)
     * @method _IH_Mail_QB whereUpdatedAt($value)
     * @method Mail baseSole(array|string $columns = ['*'])
     * @method Mail create(array $attributes = [])
     * @method _IH_Mail_C|Mail[] cursor()
     * @method Mail|null|_IH_Mail_C|Mail[] find($id, array|string $columns = ['*'])
     * @method _IH_Mail_C|Mail[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Mail|_IH_Mail_C|Mail[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Mail|_IH_Mail_C|Mail[] findOrFail($id, array|string $columns = ['*'])
     * @method Mail|_IH_Mail_C|Mail[] findOrNew($id, array|string $columns = ['*'])
     * @method Mail first(array|string $columns = ['*'])
     * @method Mail firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Mail firstOrCreate(array $attributes = [], array $values = [])
     * @method Mail firstOrFail(array|string $columns = ['*'])
     * @method Mail firstOrNew(array $attributes = [], array $values = [])
     * @method Mail firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Mail forceCreate(array $attributes)
     * @method _IH_Mail_C|Mail[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Mail_C|Mail[] get(array|string $columns = ['*'])
     * @method Mail getModel()
     * @method Mail[] getModels(array|string $columns = ['*'])
     * @method _IH_Mail_C|Mail[] hydrate(array $items)
     * @method Mail make(array $attributes = [])
     * @method Mail newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Mail[]|_IH_Mail_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Mail[]|_IH_Mail_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Mail sole(array|string $columns = ['*'])
     * @method Mail updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Mail_QB extends _BaseBuilder {}
    
    /**
     * @method Project|null getOrPut($key, $value)
     * @method Project|$this shift(int $count = 1)
     * @method Project|null firstOrFail($key = null, $operator = null, $value = null)
     * @method Project|$this pop(int $count = 1)
     * @method Project|null pull($key, $default = null)
     * @method Project|null last(callable $callback = null, $default = null)
     * @method Project|$this random($number = null, bool $preserveKeys = false)
     * @method Project|null sole($key = null, $operator = null, $value = null)
     * @method Project|null get($key, $default = null)
     * @method Project|null first(callable $callback = null, $default = null)
     * @method Project|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Project|null find($key, $default = null)
     * @method Project[] all()
     */
    class _IH_Project_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Project[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Project_QB whereId($value)
     * @method _IH_Project_QB whereName($value)
     * @method _IH_Project_QB whereDescription($value)
     * @method _IH_Project_QB whereImage($value)
     * @method _IH_Project_QB whereCreatedAt($value)
     * @method _IH_Project_QB whereUpdatedAt($value)
     * @method Project baseSole(array|string $columns = ['*'])
     * @method Project create(array $attributes = [])
     * @method _IH_Project_C|Project[] cursor()
     * @method Project|null|_IH_Project_C|Project[] find($id, array|string $columns = ['*'])
     * @method _IH_Project_C|Project[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Project|_IH_Project_C|Project[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Project|_IH_Project_C|Project[] findOrFail($id, array|string $columns = ['*'])
     * @method Project|_IH_Project_C|Project[] findOrNew($id, array|string $columns = ['*'])
     * @method Project first(array|string $columns = ['*'])
     * @method Project firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Project firstOrCreate(array $attributes = [], array $values = [])
     * @method Project firstOrFail(array|string $columns = ['*'])
     * @method Project firstOrNew(array $attributes = [], array $values = [])
     * @method Project firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Project forceCreate(array $attributes)
     * @method _IH_Project_C|Project[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Project_C|Project[] get(array|string $columns = ['*'])
     * @method Project getModel()
     * @method Project[] getModels(array|string $columns = ['*'])
     * @method _IH_Project_C|Project[] hydrate(array $items)
     * @method Project make(array $attributes = [])
     * @method Project newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Project[]|_IH_Project_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Project[]|_IH_Project_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Project sole(array|string $columns = ['*'])
     * @method Project updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Project_QB extends _BaseBuilder {}
    
    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail($key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, $default = null)
     * @method User|null last(callable $callback = null, $default = null)
     * @method User|$this random($number = null, bool $preserveKeys = false)
     * @method User|null sole($key = null, $operator = null, $value = null)
     * @method User|null get($key, $default = null)
     * @method User|null first(callable $callback = null, $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereJob($value)
     * @method _IH_User_QB whereUserImage($value)
     * @method _IH_User_QB whereYearsOfWork($value)
     * @method _IH_User_QB whereProjectDone($value)
     * @method _IH_User_QB whereColabWithCompany($value)
     * @method _IH_User_QB whereInstagram($value)
     * @method _IH_User_QB whereLinkedin($value)
     * @method _IH_User_QB whereWhatsapp($value)
     * @method _IH_User_QB whereTelegram($value)
     * @method _IH_User_QB wherePhone($value)
     * @method _IH_User_QB whereCv($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB whereTwoFactorSecret($value)
     * @method _IH_User_QB whereTwoFactorRecoveryCodes($value)
     * @method _IH_User_QB whereTwoFactorConfirmedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}
<?php //2a46f46e5c46edc6eac9946785d31ba1
/** @noinspection all */

namespace App\Models {

    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\App\Models\_IH_Mail_C;
    use LaravelIdea\Helper\App\Models\_IH_Mail_QB;
    use LaravelIdea\Helper\App\Models\_IH_Project_C;
    use LaravelIdea\Helper\App\Models\_IH_Project_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;
    
    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property string $company
     * @property string $phone
     * @property string $message
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Mail_QB onWriteConnection()
     * @method _IH_Mail_QB newQuery()
     * @method static _IH_Mail_QB on(null|string $connection = null)
     * @method static _IH_Mail_QB query()
     * @method static _IH_Mail_QB with(array|string $relations)
     * @method _IH_Mail_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Mail_C|Mail[] all()
     * @mixin _IH_Mail_QB
     */
    class Mail extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $description
     * @property string $image
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Project_QB onWriteConnection()
     * @method _IH_Project_QB newQuery()
     * @method static _IH_Project_QB on(null|string $connection = null)
     * @method static _IH_Project_QB query()
     * @method static _IH_Project_QB with(array|string $relations)
     * @method _IH_Project_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Project_C|Project[] all()
     * @mixin _IH_Project_QB
     */
    class Project extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property string|null $job
     * @property string|null $user_image
     * @property int|null $years_of_work
     * @property int|null $project_done
     * @property int|null $colab_with_company
     * @property string|null $instagram
     * @property string|null $linkedin
     * @property string|null $whatsapp
     * @property string|null $telegram
     * @property string|null $phone
     * @property string|null $cv
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $two_factor_secret
     * @property string|null $two_factor_recovery_codes
     * @property Carbon|null $two_factor_confirmed_at
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_PersonalAccessToken_C|PersonalAccessToken[] $tokens
     * @property-read int $tokens_count
     * @method MorphToMany|_IH_PersonalAccessToken_QB tokens()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @mixin _IH_User_QB
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}
}
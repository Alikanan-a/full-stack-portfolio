<?php //240436f1e70faf3a5e66ab41269bbb52
/** @noinspection all */

namespace Illuminate\Foundation\Console {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(array $data)
     * @method static void dispatchSync(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Foundation\Events {

    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch(array $stubs)
     * @method static PendingBroadcast broadcast(array $stubs)
     */
    class PublishingStubs {}
}

namespace Illuminate\Queue {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Laravel\SerializableClosure\SerializableClosure;

    /**
     * @method static PendingDispatch dispatch(SerializableClosure $closure)
     * @method static void dispatchSync(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}

namespace Laravel\Fortify\Events {

    use App\Models\User;
    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class RecoveryCodesGenerated {}
}

<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\Subscriber;

use CachetHQ\Cachet\Bus\Commands\Subscriber\UpdateSubscriberSlackSubscriptionCommand;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\Subscriber;

/**
 * This is the subscribe subscriber command handler.
 *
 * @author Joseph Cohen <joe@alt-three.com>
 */
class UpdateSubscriberSlackSubscriptionCommandHandler
{
    /**
     * Handle the subscribe subscriber command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\Subscriber\UpdateSubscriberSlackSubscriptionCommand $command
     *
     * @return \CachetHQ\Cachet\Models\Subscriber
     */
    public function handle(UpdateSubscriberSlackSubscriptionCommand $command)
    {
        $subscriber = $command->subscriber;
        $slack_url = $command->slack_url;

        $subscriber->slack_webhook_url = $slack_url;

        $subscriber->save();

        return $subscriber;
    }
}

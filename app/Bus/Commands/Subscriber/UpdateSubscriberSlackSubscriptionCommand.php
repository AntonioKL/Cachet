<?php
/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace CachetHQ\Cachet\Bus\Commands\Subscriber;
use CachetHQ\Cachet\Models\Subscriber;
/**
 * This is the subscribe subscriber command.
 *
 * @author Joseph Cohen <joe@alt-three.com>
 */
final class UpdateSubscriberSlackSubscriptionCommand
{
    /**
     * The subscriber email.
     *
     * @var \CachetHQ\Cachet\Models\Subscriber
     */
    public $subscriber;
    /**
     * The subscriptions that we want to add.
     *
     * @var url|null
     */
    public $slack_url;
    /**
     * Create a new subscribe subscriber command instance.
     *
     * @param \CachetHQ\Cachet\Models\Subscriber $subscriber
     * @param null|array                         $subscriptions
     *
     * @return void
     */
    public function __construct($subscriber, $slack_url = null)
    {
        $this->subscriber = $subscriber;
        $this->slack_url = $slack_url;
    }
}

<?php

namespace Webkul\Notification\Listeners;

use Webkul\Notification\Events\NotificationEvent;

class SendNotificationListener
{
    /**
     * Handle the event.
     *
     * @return void
     */
    public function sendNotification($event) 
    {
        $metaData = json_decode($event->meta);
        NotificationEvent::dispatch([
            'type'         => $metaData->type,
            'route'        => 'admin.settings.data_transfer.tracker.view',
            'route_params' => ['batch_id' => $event->id],
            'title'        => ucfirst($metaData->type),
            'description'  => ucfirst($metaData->type).' "'.$metaData->code.'" successfully completed.',
            'user_ids'     => array_unique([$event->user_id]),
            'mailable'     => false,
        ]);
    }
}

<?php
namespace App\Routing\Filter;

use Cake\Event\Event;
use Cake\Routing\DispatcherFilter;

class HelloWorldFilter extends DispatcherFilter
{

    /**
     * Bail early
     *
     * @param Event $event
     * @return Cake\Network\Response
     */
    public function beforeDispatch(Event $event)
    {
        if ($event->data['request']->url !== 'hello_dispatch/') {
            return $event;
        }
        $response = $event->data['response'];
        $response->body('Hello World!');
        return $response;
    }
}

<?php /* yxorP */

use yxorP\http\ProxyEvent;

class TwitterPlugin extends AbstractPlugin
{
    protected $url_pattern = 'twitter.com';

    public function onCompleted(ProxyEvent $event)
    {

        $response = $event['response'];
        $content = $response->getContent();

        $content = Html::remove_scripts($content);

        $response->setContent($content);
    }
}




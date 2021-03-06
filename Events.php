<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\sharebetween;

use Yii;
use yii\base\BaseObject;

class Events extends BaseObject
{

    //    public static function onWallEntryControlsInit($event)
    //    {
    //        $stackWidget = $event->sender;
    //        $content = $event->sender->object;

    //        $stackWidget->addWidget(widgets\ShareLink::class, ['content' => $content]);
    //    }

    public static function onContentDelete($event)
    {
        $shares = models\Share::findAll(['content_id' => $event->sender->content->id]);
        foreach ($shares as $share) {
            $share->delete();
        }
    }

    public static function onWallEntryLinksInit($event)
    {
        $stackWidget = $event->sender;
        $content = $event->sender->object;

        $stackWidget->addWidget(widgets\ShareLink::class, ['content' => $content], ['sortOrder' => 11]);
    }
}

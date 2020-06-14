<?php

//use humhub\modules\content\widgets\WallEntryControls;
use humhub\modules\content\components\ContentActiveRecord;
use humhub\modules\content\widgets\WallEntryLinks;
use humhub\modules\sharebetween\Module;
use humhub\modules\sharebetween\Events;

return [
    'id' => 'sharebetween',
    'class' => Module::class,
    'namespace' => 'humhub\modules\sharebetween',
    'events' => [
        ['class' => ContentActiveRecord::class, 'event' => ContentActiveRecord::EVENT_BEFORE_DELETE, 'callback' => [Events::class, 'onContentDelete']],
//        ['class' => WallEntryControls::class, 'event' => WallEntryControls::EVENT_INIT, 'callback' => [Events::class, 'onWallEntryControlsInit']],
    	['class' => WallEntryLinks::class, 'event' => WallEntryLinks::EVENT_INIT, 'callback' => [Events::class, 'onWallEntryLinksInit']],
     ],
];

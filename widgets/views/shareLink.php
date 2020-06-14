<?php

/* @var $this humhub\modules\ui\view\components\View */

use yii\helpers\Url;
?>

<?php if (!Yii::$app->user->isGuest) : ?>
    <span id="shareLinkContainer_<?= $id ?>">
        <a href="<?= Url::to(['/sharebetween/share', 'id' => $id]); ?>" data-target="#globalModal">
            <?= Yii::t('SharebetweenModule.base', 'Share'); ?>
        </a>
    </span>
<?php endif; ?>

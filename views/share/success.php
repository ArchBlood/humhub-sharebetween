<div class="modal-dialog modal-dialog-extra-small animated pulse" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">
                <?= Yii::t('SharebetweenModule.base', 'Shared!'); ?>
            </h4>
        </div>
        <div class="modal-body text-center">
            <?= Yii::t('SharebetweenModule.base', 'Post has been shared successfully'); ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary"
                    data-dismiss="modal"><?= Yii::t('SharebetweenModule.base', 'Ok'); ?></button>
        </div>
    </div>
</div>

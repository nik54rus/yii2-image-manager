<div class="thumbnail">
	<?php if($model->isImage){?>
		<img src="<?=\Yii::$app->imagemanager->getImagePath($model->id, 300, 300)?>" alt="<?=$model->fileName?>">
		<div class="filename"><?=$model->fileName?></div>
	<?php }else{?>
		<img src="<?=$model->fileIcon; ?>" alt="<?=$model->fileName?>">
		<div class="filename"><?=$model->fileName?></div>
	<?php } ?>
</div>

<?php
/* @var $this yii\web\View */
$this->title = 'spartan pos';
?>
<?php yii\web\View::registerJsFile('/POS/jsPDF/jspdf.js', ['position' => \yii\web\View::POS_HEAD]) ?>
<?php yii\web\View::registerJsFile('/POS/jsPDF/jspdf.plugin.standard_fonts_metrics.js', ['position' => \yii\web\View::POS_HEAD]) ?>
<?php yii\web\View::registerJsFile('/POS/jsPDF/jspdf.plugin.split_text_to_size.js', ['position' => \yii\web\View::POS_HEAD]) ?>
<?php yii\web\View::registerJsFile('/POS/jsPDF/jspdf.plugin.from_html.js', ['position' => \yii\web\View::POS_HEAD]) ?>
<?php yii\web\View::registerJsFile('/POS/jsPDF/libs/Blob.js/Blob.js', ['position' => \yii\web\View::POS_HEAD]) ?>
<?php yii\web\View::registerJsFile('/POS/jsPDF/libs/FileSaver.js/FileSaver.js', ['position' => \yii\web\View::POS_HEAD]) ?>
<?php yii\web\View::registerJsFile('/POS/jsPDF/jspdf.plugin.cell.js', ['position' => \yii\web\View::POS_HEAD]) ?>
<?php yii\web\View::registerJsFile('/POS/jsPDF/libs/Deflate/adler32cs.js', ['position' => \yii\web\View::POS_HEAD]) ?>
<?php yii\web\View::registerJsFile('/POS/jsPDF/libs/Deflate/deflate.js', ['position' => \yii\web\View::POS_HEAD]) ?>

<?php yii\web\View::registerJsFile('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', ['position' => \yii\web\View::POS_HEAD]) ?>

<?php yii\web\View::registerJsFile('/POS/DateTimePicker/dist/DateTimePicker.js', ['position' => \yii\web\View::POS_HEAD]) ?>

<?php yii\web\View::registerJsFile('/POS/frontend/enyo/tools/less.js', ['position' => \yii\web\View::POS_HEAD]) ?>
<?php yii\web\View::registerJsFile('/POS/frontend/enyo/enyo.js', ['position' => \yii\web\View::POS_HEAD]) ?>
<?php yii\web\View::registerJsFile('/POS/frontend/package.js', ['position' => \yii\web\View::POS_HEAD]) ?>

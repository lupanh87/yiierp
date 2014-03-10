

<?php 
	foreach ($books as $book) {
?>
<p style="color:red"><?php echo $book->name; ?></p>
<p><span class="icon-tags"></span><?php echo $book->tacgia->email; ?></p>
<?php } ?>

<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array( // configurations per alert type
            'warning'=>array('block'=>true, 'fade'=>true), // success, info, warning, error or danger
        ),
    )); ?>
<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array( // configurations per alert type
            'info'=>array('block'=>true, 'fade'=>true), // success, info, warning, error or danger
        ),
    )); ?>
<?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array( // configurations per alert type
            'error'=>array('block'=>true, 'fade'=>true), // success, info, warning, error or danger
        ),
    )); ?>
<?php 
$this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'id', 'header'=>'#'),
        array('name'=>'name', 'header'=>'Name'),
        array('name'=>'author', 'header'=>'Author'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>
<div style="width:770px;">
<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'http://placehold.it/770x400&text=First+thumbnail', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://placehold.it/770x400&text=Second+thumbnail', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://placehold.it/770x400&text=Third+thumbnail', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
    ),
)); ?>
</div>
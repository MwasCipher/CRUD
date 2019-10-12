<?php include_once('header.php'); ?>
<div class="container">

    <?php echo form_open('welcome/change', ['class' => 'form_horizontal']); ?>

    <fieldset>
        <legend>Create Post</legend>

        <div class="form-group">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-5">

                <?php echo form_input(['name' => 'title', 'placeholder' => 'Title',
                    'class' => 'form-control', 'value'=> set_value('title',$post->title)]); ?>

            </div>

            <div class="col-md-2">

                <?php echo form_error('title', '<div class=text-danger>', '</div>'); ?>

            </div>

        </div>


        <div class="form-group">
            <label class="col-md-2 control-label"> Description </label>

            <div class="col-md-10">

                <?php echo form_textarea(['name' => 'description', 'placeholder' => 'Description',
                    'class' => 'form-control', 'value'=> set_value('description', $post->description )]) ?>

            </div>

            <div class="col-md-2">

                <?php echo form_error('description', '<div class=text-danger>', '</div>'); ?>

            </div>

        </div>


        <?php echo form_submit(['name' => 'update', 'class' => 'btn btn-primary', 'value' => 'Update']); ?>
        <?php echo anchor('welcome', 'Cancel', ['class' => 'btn btn-primary']); ?>

    </fieldset>

    <?php echo form_close(); ?>


</div>

<?php include_once('footer.php'); ?>

<?php include_once('header.php'); ?>
<div class="container">

    <?php echo form_open('welcome/save', ['class' => 'form_horizontal']); ?>

    <fieldset>
        <legend>Create Post</legend>

        <div class="form-group">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-5">

                <!--                    <input type="text" class="form-control" id="title" placeholder="Title">-->
                <?php echo form_input(['name' => 'title', 'placeholder' => 'Title', 'class' => 'form-control']) ?>

            </div>

            <div class="col-md-2">

                <?php echo form_error('title', '<div class=text-danger>', '</div>'); ?>

            </div>

        </div>


        <div class="form-group">
            <label class="col-md-2 control-label"> Description </label>

            <div class="col-md-10">

                <?php echo form_textarea(['name' => 'description', 'placeholder' => 'Description', 'class' => 'form-control']) ?>

            </div>

            <div class="col-md-2">

                <?php echo form_error('description', '<div class=text-danger>', '</div>'); ?>

            </div>

        </div>


        <?php echo form_submit(['name' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Submit']); ?>
        <?php echo anchor('welcome', 'Back', ['class' => 'btn btn-primary']); ?>

    </fieldset>

    <?php echo form_close(); ?>


</div>

<?php include_once('footer.php'); ?>

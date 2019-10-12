<?php include_once('header.php'); ?>

    <div class="container">
        <h3>View All Posts</h3>

        <?php if ($msg = $this->session->flashdata('msg')): ?>

            <?php echo $msg; ?>

        <?php endif; ?>

        <?php

        echo anchor('welcome/create', 'ADD POST', ['class' => 'btn btn-primary']); ?>


        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date Created</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            <tbody>

            <?php
            if (count($posts) > 0): ?>

                <?php foreach ($posts as $post): ?>

                    <tr class="table-active">
                        <th scope="row"><?php echo $post->title; ?></th>
                        <td><?php echo $post->description; ?></td>
                        <td><?php echo $post->date_created; ?></td>
                        <td>
                            <?php echo anchor("welcome/view/{$post->id}", 'VIEW', ['class' => 'badge badge-primary']); ?>
                            <?php echo anchor("welcome/update/{$post->id}", 'UPDATE', ['class' => 'badge badge-success']); ?>
                            <?php echo anchor("welcome/delete/{$post->id}", 'DELETE', ['class' => 'badge badge-danger']); ?>

                        </td>
                    </tr>

                <?php endforeach; ?>

            <?php else: ?>

                <tr>
                    <td>No Records Found!!!!</td>
                </tr>

            <?php endif; ?>

            </tbody>
        </table>
    </div>

<?php include_once('footer.php'); ?>
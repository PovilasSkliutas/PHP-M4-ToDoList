<?php

include 'header.view.php';

 ?>


        <h3>To DO list for next month</h3>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">To do list</li>
                    <?php foreach ($mas as $key=>$val): ?>

                    <li class="list-group-item">
                        <span class="float-left
                            <?php echo $val['done']?>
                            <?php if ($val['deadline'] <= mktime(0,0,0,date('m'),date('d'),date('Y'))): ?>
                                <?php echo "urgent" ?>
                            <?php endif; ?>
                            ">
                            <?php echo $val['title'] ?>
                        </span>
                        <a href="doneTask.php?id=<?php echo $key ?>" class="btn btn-primary float-right ml-2">Done</a>
                        <a href="editeTask.php?id=<?php echo $key ?>" class="btn btn-primary float-right ml-2">Edit</a>
                        <a href="deleteTask.php?id=<?php echo $key ?>" class="btn btn-primary float-right ml-2">Delete</a>
                    </li>
                <?php endforeach;?>
                </ul>
                <hr>
                <a href="view/addTask.view.php" class="btn btn-primary">Pridėti</a>
            </div>
        </div>

<?php

include "footer.view.php";

 ?>

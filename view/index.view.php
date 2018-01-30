<?php

include 'header.view.php';

 ?>


        <h1>To DO list for next month</h1>
        <div class="row">
            <?php if(isset($_SESSION['mesage'])): ?>
                <div class="col-md-6 offset-md-3 alert alert-info" role="alert">
                    <?php echo $_SESSION['mesage'];  ?>
                </div>
                <?php unset($_SESSION['mesage']); ?>
            <?php endif?>
            <div class="col-md-6 offset-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">To do list</li>
                    <?php for ($i=$from; $i <= $till ; $i++): ?>

                    <li class="list-group-item">
                        <span class="float-left
                            <?php echo $mas[$i]['done']?>
                            <?php if ($mas[$i]['deadline'] <= mktime(0,0,0,date('m'),date('d'),date('Y'))): ?>
                                <?php echo "urgent" ?>
                            <?php endif; ?>
                            ">
                            <?php echo htmlspecialchars($mas[$i]['title']) ?>
                        </span>
                        <a href="deleteTask.php?id=<?php echo $i ?>" class="btn btn-danger btn-sm float-right ml-2">Delete</a>
                        <a href="editeTask.php?id=<?php echo $i ?>" class="btn btn-info btn-sm float-right ml-2">Edit</a>
                        <a href="doneTask.php?id=<?php echo $i ?>" class="btn btn-secondary btn-sm float-right ml-2">Done</a>
                    </li>
                <?php endfor;?>
                </ul>
                <hr>
                <a href="view/addTask.view.php" class="btn btn-primary">Pridėti</a>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for($i=1; $i<=$pageCount; $i++): ?>
                        <li class="page-item"><a class="page-link" href="index.php?psl=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </div>

<?php

include "footer.view.php";

 ?>

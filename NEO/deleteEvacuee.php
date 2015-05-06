<!DOCTYPE html>
<html lang="en">

<body>
<div>
    <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left">
            <?php require "taskPanel.php"?>

            <div class="col-sm-9 col-md-10 main">
                <h1>Manage</h1>
                <hr>
                <h2 class="sub-header">Evacuees</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                 <th>ID#</th>
                                <th>Given Name</th>
                                <th>Surname</th>
                                <th>Date of Birth</th>
                                <th>Sex</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; Copyright  by ProjectNEO</p>
    </footer>
</div>
<?php require "footer.php"; ?>
</body>
</html>

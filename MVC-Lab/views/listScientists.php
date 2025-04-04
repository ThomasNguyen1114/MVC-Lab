<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | List Scientists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="scienceController.php" method="GET">
                    <button class="btn btn-primary" type="submit" name="page" value="add">Add Scientist</button>
                    <button class="btn btn-primary" type="submit" name="page" value="delete">Delete Scientist</button>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Scientist ID</th>
                                <th>Name</th>
                                <th>Time Period</th>
                                <th>Nationality</th>
                                <th>Contribution</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($scientists as $scientist) {
                                echo "<tr>
                                    <td>{$scientist->getID()}</td>
                                    <td>{$scientist->getName()}</td>
                                    <td>{$scientist->getTimePeriod()}</td>
                                    <td>{$scientist->getNationality()}</td>
                                    <td>{$scientist->getContribution()}</td>
                                </tr>";
                            }
                        ?>
                        </tbody>
                    </table>   
                </form>    
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>

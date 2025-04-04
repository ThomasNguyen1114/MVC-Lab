<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Confirm Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Delete Scientist</h5>
                        <p class="card-text">Are you sure you want to delete this scientist?</p>
                        <form action="scienceController.php" method="POST">
                            <input type="hidden" name="page" value="delete">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-danger" type="submit" name="submit" value="CONFIRM">Confirm</button>
                                <button class="btn btn-secondary" type="submit" name="submit" value="CANCEL">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
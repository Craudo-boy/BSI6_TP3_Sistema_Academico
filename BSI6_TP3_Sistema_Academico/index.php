<?php session_start(); ?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Index</title>

    <?php
    if (isset($_REQUEST["type"])) {
        switch ($_REQUEST["type"]) {
            case "stud":
                $_SESSION["stud"] = [];
                break;
            case "teach":
                $_SESSION["teach"] = [];
                break;
            default:
                break;
        }
    }
    ?>

</head>

<body>
    <div class="container">

        <div class="d-flex justify-content-center">

            <div class="bg-light p-3">

                <form method="post" action="teach_validate.php">

                    <input type="hidden" name="type" value="teach">

                    <div class="form-group">
                        <input class="form-control" name="mat_teach" placeholder="Matrícula Professor">
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="pass_teach" placeholder="Senha">
                    </div>

                    <button class="btn btn-primary" type="submit">Login</button>

                </form>

            </div>
            <div class="bg-light p-3">

                <form method="post" action="stud_validate.php">

                    <input type="hidden" name="type" value="stud">

                    <div class="form-group">
                        <input class="form-control" name="mat_stud" placeholder="Matrícula Aluno">
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="pass_stud" placeholder="Senha">
                    </div>

                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>
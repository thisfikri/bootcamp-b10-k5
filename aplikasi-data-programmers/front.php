

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap-4.0.0/css/bootstrap.min.css">
    <title>Aplikasi Data Programmers</title>
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <style>
        html {
            font-size: 0.9rem;
        }

        @include media-breakpoint-up(sm) {
            html {
                font-size: 1.1rem;
            }
        }

        @include media-breakpoint-up(md) {
            html {
                font-size: 1.3rem;
            }
        }

        @include media-breakpoint-up(lg) {
            html {
                font-size: 1.5rem;
            }
        }

        .nav-link {
            color: #343a40;
        }

        .nav-link:hover {
            color: #343a40c2;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: #343a40;
        }

        .table {
            width: 60%;
            margin: 7px auto;
        }
        .table th {
            text-align: center;
            background-color: #424242;
            color: #ffffff;
        }
        .table td {
            width: 60%; 
        }
    </style>
</head>
<body>
    <header class="border-bottom bg-white container-fluid">
        <h1 class="display-4 pt-1" style="font-size: 3.1rem"><i class="fa fa-user-circle"></i> Aplikasi Data Programmers <small
            class="text-muted">1.0</small></h1>
    </header>

    <form action="javascript:void(0)" method="post" class="p-3 clearfix anp-form">
        <label for="add_new_programmer" class="float-left mr-1 p-1">Tambah Programmer Baru:</label>
        <input type="text" name="add_new_programmer" required="true" placeholder="Masukan nama programmer" class="p-1 float-left">
        <button type="submit" name="anp-btn" class="btn btn-success float-left ml-1 font-weight-bold" id="anpBtn"><i class="fa fa-plus-circle"></i> Tambah</button>
    </form>
    <div class="container-fluid border-top">
        <table class="table table-striped table-bordered table-condensed">
            <tr>
                <th colspan="2" class="success"><i class="fa fa-list"></i> Daftar Programmer</th>
            </tr>
            <?php
            $i = 1;
            while($row = $result1->fetch_assoc()) {
                $query2 = "SELECT * FROM skills WHERE user_id = '". $row['id'] ."'";
                $result2 = $mysqli->query($query2);
                $row2 = $result2->fetch_assoc();
            ?>
            <tr class="item<?php echo $i ?>">
                <td><?php echo $row['name']; ?></td>
                <td rowspan="2">
                    <input type="text" name="add_skills" placeholder="tambah skill" class="p-1 float-left mt-3">
                    <button type="submit" name="add_skill_btn" data-username="<?php echo $row['name'];?>" class="btn btn-success float-left ml-1 font-weight-bold mt-3 addSkillBtn"><i class="fa fa-plus-circle"></i> Tambah</button>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo $row2['name'];
                    ?>
                </td>
            </tr>
            <?php ++$i; }?>
        </table>
    </div>
    <script src="assets/lib/jquery-3.3.1.min.js"></script>
    <script src="assets/js/main-function.js"></script>
</body>
</html>
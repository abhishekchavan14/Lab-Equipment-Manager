<!DOCTYPE html>
<html>
<?php
require_once "config.php";
$sql_brand = "SELECT distinct(brand_name) as brand from comp;";
$sql_ram = "SELECT distinct(ram) as ram FROM comp;";
$sql_processor = "SELECT distinct(processor) as processor FROM comp;";
$sql_storage = "SELECT distinct(storage) as storage FROM comp;";
$result_brand = mysqli_query($db, $sql_brand);
$result_ram = mysqli_query($db, $sql_ram);
$result_processor = mysqli_query($db, $sql_processor);
$result_storage = mysqli_query($db, $sql_storage);
?>

<head>
    <title>Search Hardware</title>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" media='screen' href="style/disp.css">
    <link rel="stylesheet" media="print" href="style/print.css">
    <link rel="shortcut icon" href="img/Favicon/search.ico" type="image/x-icon">
    <style>
        a {
            color: black;
            font-weight: bold;
        }

        a:hover {
            font-size: 20px;
            cursor: pointer;
        }

        * {
            box-sizing: border-box;
        }

        /* Style the search field */
        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            border-radius: 5px;
            width: 20%;
            background: #f1f1f1;
            float: none;
        }

        /* Style the submit button */
        form.example button {
            width: 5%;
            padding: 10px;
            background: black;
            color: white;
            font-size: 17px;
            border: 1px;
            border-radius: 5px;
            border-left: none;
            /* Prevent double borders */
            cursor: pointer;
            float: none;
        }

        form.example button:hover {
            background: black;
        }

        /* Clear floats */
        form.example::after {
            content: "";
            clear: both;
            display: table;
        }

        select {
            appearance: none;
            outline: 0;
            background: black;
            height: 35px;
            width: 300px;
            font-family: "Poppins", sans-serif;
            font-size: 17px;
            text-align: center;
            color: white;
            cursor: pointer;
            border: 1px black;
            border-radius: 5px;
            -webkit-appearance: none;
            -moz-appearance: none;

            background-image: url("data:image/svg+xml;utf8,<svg fill='white' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
            background-repeat: no-repeat;
            background-position-x: 100%;
            background-position-y: 5px;
        }

        .select {
            position: relative;
            display: block;
            width: 15em;
            height: 2em;
            line-height: 3;
            overflow: hidden;
            border-radius: .25em;
            padding-bottom: 10px;
        }

        .dataTables_filter,
        .dataTables_info {
            display: none;
        }
    </style>
</head>

<body>
    <ul style="display: flex; list-style: none;">
        <li><a href="dash.php"><img src="img/sggsiet.png" alt="Logo" width="125" height="125" style="border-radius: 5px;"></a>
        </li>
        <li style="flex-grow: 4;">
            <center>
                <h1>Department of Computer Science Engineering, <br> SGGSIE&T </h1>
        </li>
    </ul>
    <center>
        <script src="https://kit.fontawesome.com/fbf3c1b0e1.js" crossorigin="anonymous"></script>

        <!-- The form -->
        <form class="example" action="" method="post">
            <?php
            if (mysqli_num_rows($result_brand) > 0) {
                $i = 0;
                echo "<select name='brand' id='brand'>";
                echo "<option selected value='none'>Brand</option>";
                while ($row_brand = mysqli_fetch_assoc($result_brand)) {
                    $brand_arr[$i] = $row_brand['brand'];
                    echo "<option value=" . $i . ">" . $row_brand['brand'] . "</option>";
                    $i++;
                }
                echo "</select> ";
            }
            if (mysqli_num_rows($result_ram) > 0) {
                $i = 0;
                echo "<select name='ram' id='ram'>";
                echo "<option selected value='none'>RAM</option>";
                while ($row_ram = mysqli_fetch_assoc($result_ram)) {
                    $ram_arr[$i] = $row_ram['ram'];
                    echo "<option value=" . $i . ">" . $row_ram['ram'] . "</option>";
                    $i++;
                }
                echo "</select> ";
            }
            if (mysqli_num_rows($result_processor) > 0) {
                $i = 0;
                echo "<select name='processor' id='processor'>";
                echo "<option selected value='none'>Processor</option>";
                while ($row_processor = mysqli_fetch_assoc($result_processor)) {
                    $process_arr[$i] = $row_processor['processor'];
                    echo "<option value=" . $i . ">" . $row_processor['processor'] . "</option>";
                    $i++;
                }
                echo "</select> ";
            }
            if (mysqli_num_rows($result_storage) > 0) {
                $i - 0;
                echo "<select name='storage' id='storage'>";
                echo "<option selected value='none'>Storage</option>";
                while ($row_storage = mysqli_fetch_assoc($result_storage)) {
                    $storage_arr[$i] = $row_storage['storage'];
                    echo "<option value=" . $i . ">" . $row_storage['storage'] . "</option>";
                    $i++;
                }
                echo "</select> ";
            }
            ?>
            <button type="submit" name='insert'><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
            <button formaction="dash.php">Back</button>
        </form><br>
        <?php
        if (isset($_POST['insert'])) {
            if ($_POST['ram'] == 'none') {
                $ram = '%%';
            } else {
                $ram = $ram_arr[$_POST['ram']];
            }
            if ($_POST['processor'] == 'none') {
                $processor = '%%';
            } else {
                $processor = $process_arr[$_POST['processor']];
            }
            if ($_POST['storage'] == 'none') {
                $storage = '%%';
            } else {
                $storage = $storage_arr[$_POST['storage']];
            }
            if ($_POST['brand'] == 'none') {
                $brand = '%%';
            } else {
                $brand = $brand_arr[$_POST['brand']];
            }
            $sql = "SELECT * FROM comp2 WHERE ram LIKE '$ram' and processor like '$processor' and storage like '$storage' and brand_name like '$brand';";
            $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {

                echo "<div class='disp'>
              <div style='font-weight:bold'>Toggle column:</div><a class='toggle-vis' data-column='0'>Brand Name</a> - <a class='toggle-vis' data-column='1'>Processor</a>  - <a class='toggle-vis' data-column='2'>GPU</a> - <a class='toggle-vis' data-column='3'>Ram</a> - <a class='toggle-vis' data-column='4'>Storage</a> - <a class='toggle-vis' data-column='5'>Lab Name</a> - <a class='toggle-vis' data-column='6'>Quantity</a>
          </div>";
                echo "<br><table style='width:100%' id='example'>
                  <thead>
                  <tr>
                      <th>Brand Name</th>
                      <th>Processor</th>
                      <th>Graphics Card</th>
                      <th>Ram</th>
                      <th>Storage</th>
                      <th>Lab Name</th>
                      <th>Quantity</th> 
                  </tr>
                  </thead><tbody>";
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<tr><td>" . $row["brand_name"] . "</td><td>" . $row["processor"] . "</td><td>" . $row["graphics_card"] . "</td><td>"
                        . $row["ram"] . "</td><td>" . $row['storage'] . "</td><td>" . $row["lab_name"] . "</td><td>" . $row['quantity'] . "</td></tr>";
                }
                echo "</tbody></table><br>";
                echo "<br>
                <button onclick=\"ExportToExcel1('xlsx')\" style='width: 15%; padding: 10px; background: black;
                    color: white;
                    font-size: 17px;
                    border: 1px ;
                    border-radius: 5px;
                    border-left: none;'>Export table to excel</button>
                    <br><br>
                    <center><button onclick='window.print()' style='width: 5%; padding: 10px; background: black;
                color: white;
                font-size: 17px;
                border: 1px ;
                border-radius: 5px;
                border-left: none;'>Print</button></center><br>";

            } else {
                echo "NO SUCH SYSTEM!!!!";
                echo mysqli_error($db);
            }



        }
        ?>
    </center>
    <script>
        function ExportToExcel1(type, fn, dl) {
            var elt = document.getElementById('example');
            var wb = XLSX.utils.table_to_book(elt, {
                sheet: "sheet1"
            });
            return dl ?
                XLSX.write(wb, {
                    bookType: type,
                    bookSST: true,
                    type: 'base64'
                }) :
                XLSX.writeFile(wb, fn || ('MySheetName.' + (type || 'xlsx')));
        }
        $(document).ready(function () {
            var table = $('#example').DataTable({

                "paging": false
            });

            $('a.toggle-vis').on('click', function (e) {
                e.preventDefault();

                // Get the column API object
                var column = table.column($(this).attr('data-column'));

                // Toggle the visibility
                column.visible(!column.visible());
            });
        });
    </script>
</body>

</html>
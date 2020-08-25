<?php
$title = ' ERMS | SLGTI(page Title)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
    include_once('../config.php');
    ?>
</head>

<body>
    <main class='page-content pt-2'>
        <?php include_once('nav.php');
        ?>
        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-5'>
            <!-- #1 Insert Your Content-->

            <div class="container">

                <!-- 1st row start -->
                    <div class="row">
                        <div class="col-sm">
                            <div class="border border-primary rounded text-center">
                            <h2>Student's Attendence | SLGTI</h2>
                            </div>
                        </div>
                    </div>
                    <br>
                <!-- 1st row end -->

                <form method="POST" action="">
                    <div class="row">
                        <div class='col-7'>
                            <div class='form-group col-md'>
                                <ul class='nav nav-tabs'>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='./attendance_all.php'>All Moduels</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link active' href='./attendance.php'>Selected Moduel</a>
                                    </li>
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            MODULE
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">MO-01</a>
                                            <a class="dropdown-item" href="#">MO-02</a>
                                            <a class="dropdown-item" href="#">MO-03</a>
                                            <a class="dropdown-item" href="#">MO-04</a>
                                            <a class="dropdown-item" href="#">MO-05</a>
                                            <a class="dropdown-item" href="#">MO-06</a>
                                            <a class="dropdown-item" href="#">MO-07</a>
                                            <a class="dropdown-item" href="#">MO-08</a>
                                            </div>
                                        </div>
                                        </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
                
                <div class="row">
                    <div class="form-group col-md-12 table-responsive">
                    <table class='table align-middle '>
                        <thead class='thead-light'>
                            <tr>
                                <th scope='col'>DATE</th>
                                <th scope='col'>TIME</th>
                                <th scope='col'>STATUS</th>
                            </tr>
                            <?php
                            $sql = " select count(status) as take_session,module,all_session from attendance where student_id='2018ICTBIT01' group by module";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                 ?>
                            
                            <tr>
                                <td scope='col'><?php echo $row['module'];?></td>
                                <td scope='col'><?php echo $row['module'];?></td>
                                <td scope='col'><?php echo $row['module'];?></td>
                                <?php
                                            }
                                ?>
                            </tr>
                                <table>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right">Points over taken sessions:</td>
                                        <td>10 / 10</td>
                                    </tr> 
                                    <tr>
                                        <td style="text-align: right">Percentage over taken sessions:</td>
                                        <td>100.0%</td>
                                    </tr> 
                                </table>
                        </thead>
                    <tbody>
                    
                    </tbody>
                </table>
                    </div>
                </div>

            <!-- #1 Insert Your Content" -->
        </div>
    </main>

    <?php include_once("../script.php");
    ?>
</body>
</html>         

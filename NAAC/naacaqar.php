<!DOCTYPE html>
<html lang="en">

<head>
    <title>NAAC and AQAR | DMCE accredition</title>
    <link rel="icon" type="image/x-icon" href="../images/logo1.png" />
</head>

<body>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="../css/nav.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/footer.css">

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <meta charset="utf-8">
        <script src="../js/main.js"></script>
        <link rel="stylesheet" href="../css/board-of-governers.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
        <meta charset="utf-8">

        <!--fade-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" integrity="sha512-RWhcC19d8A3vE7kpXq6Ze4GcPfGe3DQWuenhXAbcGiZOaqGojLtWwit1eeM9jLGHFv8hnwpX3blJKGjTsf2HxQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--NAVBAR-->
    <?php

    include_once '../dmce/nav.php'
    ?>


    <!-------Breadcrumbs-------->
    <!-- <div style="padding: 10px;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: white;">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Accredition</a></li>
          <li class="breadcrumb-item active" aria-current="page">NAAC and AQAR</li>
        </ol>
      </nav>
    </div> -->

    <!--breadcrumbs end-->




    <section class="content-container">
        <header class="section-header">
            <h2 data-aos="fade-right">NAAC and AQAR</h2>
        </header>
        <div data-aos="fade-up" class="container">
            <ul class="nav-tabs nav nav-justified">
                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                    <a style="  color: rgb(42, 42, 61);" href="#ns" class="nav-link active" data-toggle="tab">NAAC
                        <br>SSR</a>
                </li>
                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                    <a style="  color: rgb(42, 42, 61);" href="#na" class="nav-link" data-toggle="tab">NAAC <br>
                        AQAR</a>
                </li>
                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                    <a style="  color: rgb(42, 42, 61);" href="#mom" class="nav-link" data-toggle="tab">AQAR 2020-21 MOM & Action Taken Report
                    </a>
                </li>
                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                    <a style="  color: rgb(42, 42, 61);" href="#staff" class="nav-link" data-toggle="tab">DMCE STAFF DETAILS OCTOBER 2022
                    </a>
                </li>
                <!-- <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                    <a style="  color: rgb(42, 42, 61);" href="#academic-calendar" class="nav-link" data-toggle="tab">
                        Academic Calendar</a>
                </li> -->
            </ul>

            <!-- NAAC TABS -->
            <div class="container-fluid naac-extra-tab my-3 mt-4 py-3 pt-4">
                <a href="#naac1" data-toggle="tab">NAAC</a>
                <a href="#naac2" data-toggle="tab">IIQA</a>
                <a href="#ssr" data-toggle="tab">SSR</a>
                <a href="#criterion1" data-toggle="tab">CRITERION 1</a>
                <a href="#criterion2" data-toggle="tab">CRITERION 2</a>
                <a href="#criterion3" data-toggle="tab">CRITERION 3</a>
                <a href="#criterion4" data-toggle="tab">CRITERION 4</a>
                <a href="#criterion5" data-toggle="tab">CRITERION 5</a>
                <a href="#criterion6" data-toggle="tab">CRITERION 6</a>
                <a href="#criterion7" data-toggle="tab">CRITERION 7</a>
                <a href="#extended" data-toggle="tab">EXTENDED PROFILE</a>
                <a href="#dvv" data-toggle="tab">DVV CLARIFICATION</a>
                <a href="#best-practice" data-toggle="tab">BEST PRACTICES</a>
                <a href="#hrpolicy" data-toggle="tab">HR POLICY MANUAL</a>
                <a href="#awards" data-toggle="tab">AWARDS AND RECOGNITION</a>
                <a href="#environmental-activities" data-toggle="tab">ENVIRONMENTAL ACTIVITIES</a>
                <a href="#stake" data-toggle="tab">STAKE HOLDERS FEEDBACK</a>
                <a href="#institution-distinctiveness" data-toggle="tab">INSTITUTIONAL DISTINCTIVENESS</a>
                <a href="#disabled-friendly-campus" data-toggle="tab">DISABLED FRIENDLY CAMPUS</a>
                <a href="#capacity-building" data-toggle="tab">CAPACITY BUILDING AND SKILL ENHANCEMENT</a>
                <a href="#" data-toggle="tab">INTERNAL AND EXTERNAL AUDIT</a>
                <a href="#" data-toggle="tab">VALUE ADDED COURSE</a>
            </div>
            <!-- NAAC TABS -->





            <div class="tab-content cotainer">
                <div class="tab-pane active" id="ns">
                    <br>
                    <embed src="https://drive.google.com/file/d/1Hye_AJHDY4wRE42vDGLufSqdTTaeCgSN/preview?usp=sharing" width="100%" height="1000px" />
                    <br>
                </div>
                <div class="tab-pane" id="seven">
                    <div class="listtabs">
                        <div><a data-toggle="tab" href="#seven">2017-18</a> </div>
                        <div><a data-toggle="tab" href="#eight">2018-19</a> </div>
                        <div><a data-toggle="tab" href="#nine">2019-20</a> </div>
                        <div><a data-toggle="tab" href="#twenty">2020-21</a> </div>
                    </div>
                    <br>
                    <embed src="https://drive.google.com/file/d/1ML1MiZ_bniBqSHgLxkBGl-6J13TKdvdW/preview?usp=sharing" width="100%" height="1000px" />
                    <br>
                </div>
                <div class="tab-pane" id="eight">
                    <div class="listtabs">
                        <div><a data-toggle="tab" href="#seven">2017-18</a> </div>
                        <div><a data-toggle="tab" href="#eight">2018-19</a> </div>
                        <div><a data-toggle="tab" href="#nine">2019-20</a> </div>
                        <div><a data-toggle="tab" href="#twenty">2020-21</a> </div>
                    </div>
                    <br>
                    <embed src="https://drive.google.com/file/d/1mo_0_Tqq-1phqQlTPvHp-kb02yp9XoiB/preview?usp=sharing" width="100%" height="1000px" />
                    <br>
                </div>

                <div class="tab-pane " id="nine">
                    <div class="listtabs">
                        <div><a data-toggle="tab" href="#seven">2017-18</a> </div>
                        <div><a data-toggle="tab" href="#eight">2018-19</a> </div>
                        <div><a data-toggle="tab" href="#nine">2019-20</a> </div>
                        <div><a data-toggle="tab" href="#twenty">2020-21</a> </div>
                    </div>
                    <br>
                    <embed src="https://drive.google.com/file/d/1OA5KGUdRnBT1OcW1rFWR-_hgMtpoF2Eo/preview?usp=sharing" width="100%" height="1000px" />
                    <br>
                </div>

                <div class="tab-pane" id="twenty">
                    <div class="listtabs">
                        <div><a data-toggle="tab" href="#seven">2017-18</a> </div>
                        <div><a data-toggle="tab" href="#eight">2018-19</a> </div>
                        <div><a data-toggle="tab" href="#nine">2019-20</a> </div>
                        <div><a data-toggle="tab" href="#twenty">2020-21</a> </div>
                    </div>
                    <br>
                    <embed src="https://drive.google.com/file/d/1dd6kqeg1pOjfcPqKSmiuUYm1p9qtjslN/preview?usp=sharing" width="100%" height="1000px" />
                    <br>
                </div>

                <div class="tab-pane" id="extended">
                    <h3>EXTENDED <span class="red">PROFILE</span></h3>
                    <ul class=>
                        <li><a href="https://drive.google.com/file/d/1nVyItFy-rwrwo4hGzt6IJbiZ46BKSyGk/view?usp=share_link" target="_blank" rel="noopener noreferrer">1.1 Number of students year wise during the last five years - <span class="red">View</span></a></li>
                        <li><a href="http://" target="_blank" rel="noopener noreferrer">2.1. Number of full time teachers during the last five years - <span class="red">View</span></a></li>
                        <li><a href="http://" target="_blank" rel="noopener noreferrer">3.1 Expenditure excluding salary component year wise during the last five years - <span class="red">View</span></a></li>
                    </ul>
                </div>

                <div class="tab-pane" id="na">
                    <br>
                    <div class="listtabs">
                        <div><a data-toggle="tab" href="#seven">2017-18</a> </div>
                        <div><a data-toggle="tab" href="#eight">2018-19</a> </div>
                        <div><a data-toggle="tab" href="#nine">2019-20</a> </div>
                        <div><a data-toggle="tab" href="#twenty">2020-21</a> </div>
                    </div>
                    <embed src="https://drive.google.com/file/d/1DfEhwwAL14s0ROzR-DLTlaH2bph37qsk/preview?usp=sharing" width="100%" height="1000px" />
                    <br>
                </div>

                <div class="tab-pane" id="mom">
                    <br>
                    <embed src="https://drive.google.com/file/d/13DPZl-wo2behStlc4AJEtHqSelSCNJyt/preview?usp=sharing" width="100%" height="1000px" />
                    <br>
                </div>

                <div class="tab-pane table-content" id="ssr">
                    <?php include_once './tabs/ssr.php'; ?>
                </div>

                <div class="tab-pane table-content" id="criterion1">
                    <?php include_once './tabs/criterion1.php'; ?>
                </div>

                <div class="tab-pane table-content" id="criterion2">
                    <?php include_once './tabs/criterion2.php'; ?>
                </div>

                <div class="tab-pane table-content" id="criterion3">
                    <?php include_once './tabs/criterion3.php'; ?>
                </div>

                <div class="tab-pane table-content" id="criterion4">
                    <?php include_once './tabs/criterion4.php'; ?>
                </div>

                <div class="tab-pane table-content" id="criterion5">
                    <?php include_once './tabs/criterion5.php'; ?>
                </div>

                <div class="tab-pane table-content" id="criterion6">
                    <?php include_once './tabs/criterion6.php'; ?>
                </div>

                <div class="tab-pane table-content" id="criterion7">
                    <?php include_once './tabs/criterion7.php'; ?>
                </div>
                <div class="tab-pane table-content" id="awards">
                    <?php include_once './tabs/awards.php'; ?>
                </div>

                <div class="tab-pane" id="naac1">
                    <?php include_once './tabs/naac1.php'; ?>
                </div>

                <div class="tab-pane" id="naac2">
                    <?php include_once './tabs/naac2.php'; ?>
                </div>

                <div class="tab-pane table-content" id="best-practice">
                    <?php include_once './tabs/best-practice.php'; ?>
                </div>

                <div class="tab-pane table-content" id="capacity-building">
                    <?php include_once './tabs/capacity-building.php'; ?>
                </div>

                <div class="tab-pane" id="disabled-friendly-campus">
                    <?php include_once './tabs/disabled-friendly-campus.php' ?>
                </div>

                <div class="tab-pane" id="environmental-activities">
                    <?php include_once './tabs/environmental-activities.php' ?>
                </div>

                <div class="tab-pane" id="institution-distinctiveness">
                    <?php include_once './tabs/institution-distinctiveness.php' ?>
                </div>

                <div class="table-content tab-pane" id="stake">
                    <?php include_once './tabs/stake.php'; ?>
                </div>
                <div class="tab-pane" id="analysis">
                    <?php include_once './tabs/analysis.php'; ?>
                </div>
                <div class="table-content tab-pane" id="hrpolicy">
                    <?php include_once './tab/hr-policy-manual.php'; ?>
                </div>
                <div class="table-content tab-pane" id="dvv">
                    <?php include_once './tab/dvv-clarification.php'; ?>
                </div>
            </div>
            <div class="tab-pane" id="staff">
                <br>
                <div data-aos="fade-up" class="container">

                    <ul class="nav-tabs nav nav-justified">
                        <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                            <a style="  color: rgb(42, 42, 61);" href="#o1" class="nav-link active" data-toggle="tab">
                                Teaching Staff</a>
                        </li>
                        <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                            <a style="  color: rgb(42, 42, 61);" href="#e1" class="nav-link" data-toggle="tab">
                                Non Teaching Staff</a>
                        </li>
                    </ul>
                    <div class="tab-content cotainer">
                        <div class="tab-pane active" id="o1">
                            <br>
                            <embed src="https://drive.google.com/file/d/1sVuDfx3n7iBMB6VJ6CfC0_Z9FOnkfjOG/preview?usp=share_link" width="100%" height="1000px" />
                            <br>
                        </div>
                        <div class="tab-pane" id="e1">
                            <br>
                            <embed src="https://drive.google.com/file/d/1ZSch9r8Kkp_QiYx4Iz7lUyjYepvISZJo/preview?usp=sharing" width="100%" height="1000px" />
                            <br>
                        </div>
                    </div>
                    <br>
                </div>

                <!-- <div class="tab-pane" id="academic-calendar">
                    <br>
                    <embed src="https://drive.google.com/file/d/1y-4bFjGw0zfOAnUae8yb2KvImmW9ljuc/preview?usp=sharing" width="100%" height="1000px" />
                    <br>
                </div>

            </div> -->

            </div>



            <!-- TimeTable -->
            <header class="section-header">
                <h2 data-aos="fade-right" style="margin-top: 10rem;">Time Table (2020-21)</h2>
            </header>
            <br><br>

            <div data-aos="fade-up" class="container">

                <ul class="nav-tabs nav nav-justified">

                    <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                        <a style="  color: rgb(42, 42, 61);" href="#civiltt" class="nav-link active" data-toggle="tab">
                            Civil Engineering</a>
                    </li>
                    <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                        <a style="  color: rgb(42, 42, 61);" href="#civilsstt" class="nav-link" data-toggle="tab">
                            Civil Engineering <br>(Second Shift)</a>
                    </li>
                    <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                        <a style="  color: rgb(42, 42, 61);" href="#compstt" class="nav-link" data-toggle="tab">
                            Computer Engineering</a>
                    </li>
                    <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                        <a style="  color: rgb(42, 42, 61);" href="#elextt" class="nav-link" data-toggle="tab">
                            Electronics Engineering</a>
                    </li>
                    <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                        <a style="  color: rgb(42, 42, 61);" href="#mechtt" class="nav-link" data-toggle="tab">
                            Mechanical Engineering</a>
                    </li>
                    <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                        <a style="  color: rgb(42, 42, 61);" href="#chemtt" class="nav-link" data-toggle="tab">
                            Chemical Engineering</a>
                    </li>
                    <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                        <a style="  color: rgb(42, 42, 61);" href="#ittt" class="nav-link" data-toggle="tab">
                            Information Technology</a>
                    </li>
                </ul>

                <div class="tab-content cotainer" style="margin-bottom: 50px">
                    <div class="tab-pane active" id="civiltt">
                        <br>
                        <div data-aos="fade-up" class="container">

                            <ul class="nav-tabs nav nav-justified">
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#o1" class="nav-link active" data-toggle="tab">
                                        Odd Semester</a>
                                </li>
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#e1" class="nav-link" data-toggle="tab">
                                        Even Semester</a>
                                </li>
                            </ul>
                            <div class="tab-content cotainer">
                                <div class="tab-pane active" id="o1">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1GwmZip0w3QrtOBoLFPyD-uFLnMH0texn/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                                <div class="tab-pane" id="e1">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1s1PU37Jrp34XlBkkB40E1lH3BtdHw0Um/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="tab-pane" id="civilsstt">
                        <br>
                        <div data-aos="fade-up" class="container">

                            <ul class="nav-tabs nav nav-justified">
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#o2" class="nav-link active" data-toggle="tab">
                                        Odd Semester</a>
                                </li>
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#e2" class="nav-link" data-toggle="tab">
                                        Even Semester</a>
                                </li>
                            </ul>
                            <div class="tab-content cotainer">
                                <div class="tab-pane active" id="o2">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1hGYJ-_u2ZGWU238qGBppxNRNrmWnBbdb/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                                <div class="tab-pane" id="e2">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1XoLRyvqG3K6_VNblBNvcROluG1vrkZtB/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>
                    <div class="tab-pane" id="compstt">
                        <br>
                        <div data-aos="fade-up" class="container">

                            <ul class="nav-tabs nav nav-justified">
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#o3" class="nav-link active" data-toggle="tab">
                                        Odd Semester</a>
                                </li>
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#e3" class="nav-link" data-toggle="tab">
                                        Even Semester</a>
                                </li>
                            </ul>
                            <div class="tab-content cotainer">
                                <div class="tab-pane active" id="o3">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1B-hpf9M9YBKHA5COQVXfX5HkayGLFUo1/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                                <div class="tab-pane" id="e3">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1-i2aDQyayMjB61CQp2hG9yonMqUuXlpA/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>
                    <div class="tab-pane" id="elextt">
                        <br>
                        <div data-aos="fade-up" class="container">

                            <ul class="nav-tabs nav nav-justified">
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#o4" class="nav-link active" data-toggle="tab">
                                        Odd Semester</a>
                                </li>
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#e4" class="nav-link" data-toggle="tab">
                                        Even Semester</a>
                                </li>
                            </ul>
                            <div class="tab-content cotainer">
                                <div class="tab-pane active" id="o4">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1DGEZJa3vhcKDwFARhIQYy4rvGYLpeD1Q/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                                <div class="tab-pane" id="e4">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1zlO2VASFHA_098dGfunvdmJ9t6FXiYv6/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>
                    <div class="tab-pane" id="mechtt">
                        <br>
                        <div data-aos="fade-up" class="container">

                            <ul class="nav-tabs nav nav-justified">
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#o5" class="nav-link active" data-toggle="tab">
                                        Odd Semester</a>
                                </li>
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#e5" class="nav-link" data-toggle="tab">
                                        Even Semester</a>
                                </li>
                            </ul>
                            <div class="tab-content cotainer">
                                <div class="tab-pane active" id="o5">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1OCUYOBsHkAT3UgvjCMqEQvsYwUIbKgnh/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                                <div class="tab-pane" id="e5">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1FRB5vO5sE_j83VgMf7v0ir9QXnTAZxd9/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>
                    <div class="tab-pane" id="chemtt">
                        <br>
                        <div data-aos="fade-up" class="container">

                            <ul class="nav-tabs nav nav-justified">
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#o6" class="nav-link active" data-toggle="tab">
                                        Odd Semester</a>
                                </li>
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#e6" class="nav-link" data-toggle="tab">
                                        Even Semester</a>
                                </li>
                            </ul>
                            <div class="tab-content cotainer">
                                <div class="tab-pane active" id="o6">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1g89TIyvXyKGGhKeeqP2FY75pDDIFJIH2/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                                <div class="tab-pane" id="e6">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1DDo0SbpnwYnviYZIe0k52Gb8eriltdBz/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>
                    <div class="tab-pane" id="ittt">
                        <br>
                        <div data-aos="fade-up" class="container">

                            <ul class="nav-tabs nav nav-justified">
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#o7" class="nav-link active" data-toggle="tab">
                                        Odd Semester</a>
                                </li>
                                <li class="nav-item" style="background-color: rgb(240, 239, 239); border: solid 2px white ;">
                                    <a style="  color: rgb(42, 42, 61);" href="#e7" class="nav-link" data-toggle="tab">
                                        Even Semester</a>
                                </li>
                            </ul>
                            <div class="tab-content cotainer">
                                <div class="tab-pane active" id="o7">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1yTZiEtNyk5XfpS9VGQTkEsJA2PsIu5na/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                                <div class="tab-pane" id="e7">
                                    <br>
                                    <embed src="https://drive.google.com/file/d/1Hc2WEpfowwvbLWEkGal7SN-BhiwzTPp4/preview?usp=sharing" width="100%" height="1000px" />
                                    <br>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>

                </div>

                <!-- 
            <div class="tab-content cotainer">
                <div class="tab-pane active" id="ns">
                    <br>
                    <embed src="https://drive.google.com/file/d/1Hye_AJHDY4wRE42vDGLufSqdTTaeCgSN/preview?usp=sharing"
                        width="100%" height="1000px" />
                    <br>
                </div>

                <div class="tab-pane" id="na">
                    <br>
                    <embed src="https://drive.google.com/file/d/1I24j8CtOzcc53yCzqQocoR59pqrVHqiy/preview?usp=sharing"
                        width="100%" height="1000px" />
                    <br>
                </div>

            </div> -->
                <!-- <embed src="https://drive.google.com/file/d/1Hye_AJHDY4wRE42vDGLufSqdTTaeCgSN/preview?usp=sharing"
                        width="100%" height="1000px" /> -->

                <!-- <div class="tab-pane" id="na">
                    <br>
                    <embed src="https://drive.google.com/file/d/1I24j8CtOzcc53yCzqQocoR59pqrVHqiy/preview?usp=sharing"
                        width="100%" height="1000px" />
                    <br>
                </div> -->

                <!-- /TimeTable -->
    </section>

    <!--page style 2 end-->

    <!--FOOTER-->
    <?php
    include_once '../dmce/footer.php'
    ?>

    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" SameSite=None Secure>
    </script>
    <!--fade-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script defer src="../dmce/script.js" SameSite=Strict></script>
    <style>
        .owl-centered .owl-wrapper {
            display: table !important;
        }

        .owl-centered .owl-item {
            display: table-cell;
            float: none;
            vertical-align: middle;
        }

        .owl-centered .owl-item>div {
            text-align: center;
        }
    </style>

    <script>
        $(document).ready(function() {
            $("#disabled-friendly-campus-photos").owlCarousel({
                items: 3, //items to be shown,
                itemsDesktop: [1199, 2],
                itemsDesktopSmall: [980, 1],
                itemsTablet: [300, 1],
                pagination: true,
                autoPlay: true,
                loop: true,
                center: true,
                nav: true,
                lazyLoad: true,
            });
        })
    </script>
    <!-- Tabs script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
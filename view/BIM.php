<?php
include "header.php"
?>



<!-- Page Content -->


<div class="container">
    <div class="row justify-content-center">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <!-- Preview Image -->
            <div class="bimimage">

            </div>





            <section id="bimdescription">
                <div class=bimdescription-inner>
                    <?php
                    $subject = get_course();
                    if ($subject) {
                        while ($row = $subject->fetch_assoc()) {
                            echo "
                                                         <h2> Introduction </h2>        <p>" . $row["c_description"] . "</p>";
                        }
                    }

                    ?>

                </div>


            </section>
            <section class="bimcourse">
                <!--.................table..........-->
                <table class="table table-hover">


                    <!--first semester course table-->
                    <h2 class=" text-white" style="text-align:center; background-color:#0B2647 ">COURSE TITLE</h2> <br>
                    <h2 style="text-align: center;" class="colorsemester"> FIRST SEMESTER</h2>

                    <table class="table  table-hover table-striped table-boarder table-condensed ">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th> Course Code</th>
                                <th>Course Title</th>
                                <th> Credit <br> Hrs.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ENG 201</td>
                                <td> <a style="color:black" href="#"> English - I </a></td>
                                <td>3</td>

                            </tr>
                            <td>2</td>
                            <td> IT 211 </td>
                            <td> <a style="color:black" href="#"> Computer Information System </a> </td>
                            <td>3</td>

                            </tr>
                            <td>3</td>
                            <td> IT 212 </td>
                            <td> <a style="color:black" href="#">Digital Logic Design </a> </td>
                            <td>3</td>

                            </tr>
                            <td>4</td>
                            <td>MTH 201</td>
                            <td> <a style="color:black" href="#"> Mathematics I </a> </td>
                            <td>3</td>

                            </tr>
                            <td>5</td>
                            <td>MGT 201</td>
                            <td> <a style="color:black" href="#"> Principles of Management </a> </td>
                            <td>3</td>

                            </tr>
                            <td>6</td>
                            <td></td>
                            <td>Total</td>
                            <td>15</td>

                            </tr>
                        </tbody>
                    </table>













                    <!--second semester course table-->
                    <h2 style="text-align: center;" class="colorsemester"> FIRST SEMESTER</h2>
                    <div class="container">
                        <table class="table  table-hover table-striped table-boarder table-condensed ">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th> Course Code</th>
                                    <th>Course Title</th>
                                    <th> Credit <br> Hrs.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ENG 201</td>
                                    <td> <a style="color:black" href="#"> English - I </a></td>
                                    <td>3</td>

                                </tr>
                                <td>2</td>
                                <td> IT 211 </td>
                                <td> <a style="color:black" href="#"> Computer Information System </a> </td>
                                <td>3</td>

                                </tr>
                                <td>3</td>
                                <td> IT 212 </td>
                                <td> <a style="color:black" href="#">Digital Logic Design </a> </td>
                                <td>3</td>

                                </tr>
                                <td>4</td>
                                <td>MTH 201</td>
                                <td> <a style="color:black" href="#"> Mathematics I </a> </td>
                                <td>3</td>

                                </tr>
                                <td>5</td>
                                <td>MGT 201</td>
                                <td> <a style="color:black" href="#"> Principles of Management </a> </td>
                                <td>3</td>

                                </tr>
                                <td>6</td>
                                <td></td>
                                <td>Total</td>
                                <td>15</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>





                </table>


        </div>
    </div>
</div>
</div>
<?php
include 'footer.php' ?>
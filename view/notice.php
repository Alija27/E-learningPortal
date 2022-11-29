<?PHP
include 'header.php';
?>
<div class="containerbanner">
    <span>
        <h1 class="text-center py-5" style="color:black"> <i> NOTICE </i> </h1>
    </span>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <br>
            <?php
            $notice = view_notice();
            if ($notice) {
                while ($row = $notice->fetch_assoc()) {
                    echo "<div class='card mb-3'><div class='card-body'><h5 class='card-title'>"
                        . $row['heading'] . "</h5><hr><p class='card-text'>"
                        . $row['notice'] . "</p><p class='card-text'><small class='text-muted'>"
                        . $row['create_date'] . "</small></p>
                </div>
            </div>";
                }
            }
            ?>

        </div>
    </div>
</div>
<?PHP
include 'footer.php';
?>
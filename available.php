<?php
    include "profile/connect.php";

    parse_str($_POST['val'], $formdata);
    $date = $formdata['date'];

    $sql = "SELECT * FROM events WHERE event_date = '$date'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0)
    {
?>
        <span class="alert alert-danger" id="alertcheckk">
            <strong>Error!</strong> Booking is not available for this date
        </span>
<?php
    }
    else
    {
?>
        <span class="alert alert-success" id="alertcheckk">
            <strong>Success!</strong> Booking is available for this date
        </span>
<?php
    }
    
    mysqli_close($conn);
?>
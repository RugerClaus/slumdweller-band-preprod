<section class="tourDates">
    <h1>Tour Dates</h1>
    <?php 
        while($row = $tour_dates->fetch_assoc()) {
    ?>


    <table>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['location'] ?></td>
            <td><?php echo $row['date'] ?></td>
            <td>
                <form action="backend/deleteTourDate.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <button type="submit" class="btn" name="delete">Delete</button>
                </form>
            </td>
        </tr>
    </table>

    <?php } ?>
</section>
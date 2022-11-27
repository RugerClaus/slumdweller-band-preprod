<section class="tourDates">
    <h1>Tour Dates</h1>
    <?php 
        while($row = $tour_dates->fetch_assoc()){
    ?>


    <table>
        <tr>
            <td><?php echo $row['location'] ?></td>
            <td><?php echo $row['date'] ?></td>
        </tr>
    </table>

    <?php } ?>
</section>
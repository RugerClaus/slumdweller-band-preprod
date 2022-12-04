<section class="tour">
    <h1>Tour Dates</h1>
    <div class="tour_dates">
    <?php while($row = $tour_dates->fetch_assoc()){ ?>

    <h3><?php echo $row['location'] . " -- " . $row['date'] ?></h3>
    <?php } ?>
    </div>
</section>
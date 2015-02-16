
<h3 class="floor">Ground Floor</h3>

	<table cellpadding="0" cellspacing="0" border="0">

<?php
	while($row = mysql_fetch_array($ground_rooms)) {
		$room_id = $row['id'];
		$name = $row['name']; 
		$photo = $row['photo'];
		$location = $row['location'];
		$room_description = $row['description'];
		$beds = $row['beds']; 
		$extra_beds = $row['extra_beds']; 
		$price = $row['price']; 

		$booked_rooms = mysql_query("SELECT * FROM room_booking WHERE wedding_id = '$id' && room_id = '$room_id'");
		$num_booked_rooms = mysql_num_rows($booked_rooms);
		
?>
		<tr class="<?php if ($num_booked_rooms == '1') { echo 'booked'; } ?>" >
			<td><a class="fancybox" title="<?php echo $room_description; ?>" href="images/bedrooms/<?php echo $photo; ?>"><img src="images/bedrooms/<?php echo $photo; ?>" width="150" /></a></td>
			<td>
				<h3><?php echo $name; ?></h3>
				<p><strong><?php echo $location; ?></strong></p>
				<p><?php echo $room_description; ?></p>
				<?php if ($extra_beds !='') {
					echo "<p class='extra'>* ".$extra_beds."</p>";
				 } ?>

			</td>
			<td class="beds"><?php echo $beds; ?></td>
			<td class="price">&pound;<?php echo $price; ?></td>
			<td class="book">
				<?php if ($num_booked_rooms == '1') { ?>
					<span class="booked">Booked</span>
				<?php } else { ?>
					<a href="controls/book-room.php?id=<?php echo $room_id; ?>&date=<?php echo $date; ?>" class="fancybox button">Book</a>
				<?php } ?>
			</td>
		</tr>
<?php } ?>
	</table>





<h3 class="floor">First Floor <a href="floor-plans/first_floor.pdf" target="_blank">View floor plan</a></h3>
	<table cellpadding="0" cellspacing="0" border="0">
<?php
	while($row = mysql_fetch_array($first_rooms)) {
		$room_id = $row['id'];
		$name = $row['name']; 
		$location = $row['location'];
		$photo = $row['photo'];
		$room_description = $row['description'];
		$beds = $row['beds']; 
		$extra_beds = $row['extra_beds']; 
		$price = $row['price']; 

		$booked_rooms = mysql_query("SELECT * FROM room_booking WHERE wedding_id = '$id' && room_id = '$room_id'");
		$num_booked_rooms = mysql_num_rows($booked_rooms);

?>
		<tr class="<?php if ($num_booked_rooms == '1') { echo 'booked'; } ?>" >
			<td><a class="fancybox" title="<?php echo $room_description; ?>" href="images/bedrooms/<?php echo $photo; ?>"><img src="images/bedrooms/<?php echo $photo; ?>" width="150" /></a></td>
			<td>
				<h3><?php echo $name; ?></h3>
				<p><strong><?php echo $location; ?></strong></p>
				<p><?php echo $room_description; ?></p>
				<?php if ($extra_beds !='') {
					echo "<p class='extra'>* ".$extra_beds."</p>";
				 } ?>
			</td>
			<td class="beds"><?php echo $beds; ?></td>
			<td class="price">&pound;<?php echo $price; ?></td>
			<td class="book">
				<?php if ($num_booked_rooms == '1') { ?>
					<span class="booked">Booked</span>
				<?php } else { ?>
					<a href="controls/book-room.php?id=<?php echo $room_id; ?>&date=<?php echo $date; ?>" class="fancybox button">Book</a>
				<?php } ?>
			</td>
		</tr>
<?php } ?>
	</table>





<h3 class="floor">Second Floor <a href="floor-plans/second_floor.pdf" target="_blank">View floor plan</a></h3>
	<table cellpadding="0" cellspacing="0" border="0">
<?php
	while($row = mysql_fetch_array($second_rooms)) {
		$room_id = $row['id'];
		$name = $row['name'];
		$location = $row['location'];  
		$photo = $row['photo'];
		$room_description = $row['description'];
		$beds = $row['beds']; 
		$extra_beds = $row['extra_beds']; 
		$price = $row['price']; 

		$booked_rooms = mysql_query("SELECT * FROM room_booking WHERE wedding_id = '$id' && room_id = '$room_id'");
		$num_booked_rooms = mysql_num_rows($booked_rooms);
		
?>
		<tr class="<?php if ($num_booked_rooms == '1') { echo 'booked'; } ?>" >
			<td><a class="fancybox" title="<?php echo $room_description; ?>" href="images/bedrooms/<?php echo $photo; ?>"><img src="images/bedrooms/<?php echo $photo; ?>" width="150" /></a></td>
			<td>
				<h3><?php echo $name; ?></h3>
				<p><strong><?php echo $location; ?></strong></p>
				<p><?php echo $room_description; ?></p>
				<?php if ($extra_beds !='') {
					echo "<p class='extra'>* ".$extra_beds."</p>";
				 } ?>
			</td>
			<td class="beds"><?php echo $beds; ?></td>
			<td class="price">&pound;<?php echo $price; ?></td>
			<td class="book">
				<?php if ($num_booked_rooms == '1') { ?>
					<span class="booked">Booked</span>
				<?php } else { ?>
					<a href="controls/book-room.php?id=<?php echo $room_id; ?>&date=<?php echo $date; ?>" class="fancybox button">Book</a>
				<?php } ?>
			</td>
		</tr>
<?php } ?>
	</table>



<h3 class="floor">Courtyard <a href="floor-plans/courtyard.pdf" target="_blank">View floor plan</a></h3>
	<table cellpadding="0" cellspacing="0" border="0">
<?php
	while($row = mysql_fetch_array($courtyard_rooms)) {
		$room_id = $row['id'];
		$name = $row['name'];
		$location = $row['location'];  
		$photo = $row['photo'];
		$room_description = $row['description'];
		$beds = $row['beds']; 
		$extra_beds = $row['extra_beds']; 
		$price = $row['price']; 

		$booked_rooms = mysql_query("SELECT * FROM room_booking WHERE wedding_id = '$id' && room_id = '$room_id'");
		$num_booked_rooms = mysql_num_rows($booked_rooms);
		
?>
		<tr class="<?php if ($num_booked_rooms == '1') { echo 'booked'; } ?>" >
			<td><a class="fancybox" title="<?php echo $room_description; ?>" href="images/bedrooms/<?php echo $photo; ?>"><img src="images/bedrooms/<?php echo $photo; ?>" width="150" /></a></td>
			<td>
				<h3><?php echo $name; ?></h3>
				<p><strong><?php echo $location; ?></strong></p>
				<p><?php echo $room_description; ?></p>
				<?php if ($extra_beds !='') {
					echo "<p class='extra'>* ".$extra_beds."</p>";
				 } ?>
			</td>
			<td class="beds"><?php echo $beds; ?></td>
			<td class="price">&pound;<?php echo $price; ?></td>
			<td class="book">
				<?php if ($num_booked_rooms == '1') { ?>
					<span class="booked">Booked</span>
				<?php } else { ?>
					<a href="controls/book-room.php?id=<?php echo $room_id; ?>&date=<?php echo $date; ?>" class="fancybox button">Book</a>
				<?php } ?>
			</td>
		</tr>
<?php } ?>
	</table>
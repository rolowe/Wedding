<?php include "../config/config.php"; ?>

<?php

  $id = $_GET['id'];
  $date = $_GET['date'];

  $book_info = mysql_query("SELECT * FROM rooms WHERE id = '$id'");
  while($row = mysql_fetch_array($book_info)) {
    $name = $row['name']; 
    $photo = $row['photo'];
    $floor = $row['floor'];
    $location = $row['location'];
    $room_description = $row['description'];
    $beds = $row['beds']; 
    $extra_beds = $row['extra_beds']; 
    $price = $row['price'];  
  }

?>

<div id="book-room">

<table cellpadding="0" cellspacing="0" border="0">
<tr>

  <td>
    <img src="images/bedrooms/<?php echo $photo; ?>" width="300" />
    <ul>
      <li><h3 class="">Price: &pound;<?php echo $price; ?></h3></li>
      <?php 
        if ($floor =='G') { echo "<li><strong>Ground Floor</strong></li>"; } 
        if ($floor =='1') { echo "<li><strong>First Floor</strong></li>"; } 
        if ($floor =='2') { echo "<li><strong>Second Floor</strong></li>"; } 
      ?>
      <?php if ($location != '') { echo "<li><p>".$location."</p></li>"; } ?>
      <?php if ($extra_beds !='') {
        echo "<li><p>* ".$extra_beds."</p></li>";
       } ?>
   </ul>
  </td>

  <td>

    <h2><?php echo $name; ?> - <?php echo $beds; ?></h2>
    <h3><?php echo $date; ?></h3>
    <p><?php echo $room_description; ?></p>
    

    <form method="POST" id="book-room" action="functions/add-booking.php">
    	<input type="hidden" name="wedding_id" id="wedding_id" value="1" />
      <input type="hidden" name="room_id" id="room_id" value="<?php echo $id; ?>" />

      <input type="hidden" name="room" id="room" value="<?php echo $name; ?>" />
      <input type="hidden" name="date" id="date" value="<?php echo $date; ?>" />
      <input type="hidden" name="price" id="price" value="<?php echo $price; ?>" />

    	<p><label for="names">Names:</label> <input type="text" name="names" id="names" /></p>
      <p><label for="email">Email:</label> <input type="text" name="email" id="email" /></p>
      <p><label for="phone">Phone:</label> <input type="text" name="phone" id="phone" /></p>
      <p><label for="payment_method">Payment method:</label>
        <select name="payment_method">
          <option value="Bank Transfer">Bank Transfer</option>
          <option value="Cheque">Send us a cheque</option>
        </select>
      </p>

      <?php if ($extra_beds != '') { ?>
        <p><label for="names">Extra beds:</label> <input type="text" name="extra_beds" id="extra_beds" /></p>
      <?php } else { ?>
        <input type="hidden" name="extra_beds" id="extra_beds" value="" />
      <?php } ?>

      <input type="submit" class="button" value="BOOK" />
    </form>

  </td>
</tr>
</table>

</div>


<script>
  $("form#book-room").validate({
      rules: {
        names: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        phone: {
          required: true,
          number: true,
          minlength: 4
        }
      },
      messages: {
        names: {
          required: "Please enter all the names of the people staying in this room"
        },
        email: {
          required: "Please enter a valid email address"
        },
        phone: {
          required: "Please enter a valid contact telephone number"
        }
      }
    });
</script>

<form  method="post">
  <input type="text" name="st1"><br>
  <select class="" name="pt">
    <option  selected value="+">+</option>
    <option  selected value="-">-</option>
    <option  selected value="x">x</option>
    <option  selected value=":">:</option>
  </select>
  <input type="text" name="st2"><br>
  <input type="text" name="kq" value="<?php if(isset($kq)){echo $kq;} ?>"><br>
  <?php echo csrf_field(); ?>
  <input type="submit" name="submit" value="Tính"><br>
</form>

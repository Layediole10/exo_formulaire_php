<?php
?>

    <form action="./recup_info.php" method="post" enctype="multipart/form-data">
        <!-- full name -->
        <!-- <label for="terms">Full name<sup style="color:red;">*</sup>:</label><br>
        <input type="text" name="username" style="margin-bottom: 10px;" required="required"><br> -->

        <!-- email address -->
        <!-- Email address<sup style="color:red;">*</sup>:<br> <input type="email" name="email" style="margin-bottom: 10px;" required="required"><br> -->

        <!-- select -->
        <!-- Select Tour Package<sup style="color:red;">*</sup>:<br><select name="choix" required="required">
            
            <option value="back-end">Back-end</option>
            <option value="front-end">Front-end</option>
            <option value="mobile">Mobile</option>
            <option value="big-data">Big-data</option>
        </select><br><br> -->

        <!-- arrival date -->
        Arrival date<sup style="color:red;">*</sup>: <br><input type="date" name="date[]" style="margin-bottom: 10px;" required="required"><br><br>
        departure date<sup style="color:red;">*</sup>: <br><input type="date" name="date[]" style="margin-bottom: 10px;" required="required"><br><br>

        <!-- number of persons -->
        <!-- Number of persons<sup style="color:red;">*</sup>:<br> <input type="number" name="number" style="margin-bottom: 10px;" required="required"><br><br> -->

        <!-- wishes -->
       <!-- What would you want to avail?<sup style="color:red;">*</sup>:<br>
        <label for="terms">a</label> 
        <input type="checkbox" name="choice[]" value="a">
        <label for="terms">b</label> 
        <input type="checkbox" name="choice[]" value="b">
        <label for="terms">c</label>
        <input type="checkbox" name="choice[]" value="c"><br><br> -->

        
        <!-- promo code -->
        <!-- <label for="code_promo">Discout coupon code:</label><br>
        <input type="text" name="code_promo"><br><br> -->

        <!-- Celibataire:<input type="checkbox" name="situation[]" value="celibataire"><br>
        Marié:<input type="checkbox" name="situation[]" value="Marie"><br><br> -->

        <!-- Terms and conditions<sup style="color:red;">*</sup>:<br>
        <label for="terms">agree</label> 
        <input type="radio" name="terms" value="agree"><br>
        <label for="terms">disagree</label>
        <input type="radio" name="terms" value="desagree"><br><br> -->


        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000"> -->
        <!-- <input type="file" name="cv"><br><br> -->


        <input type="submit" name="submit" value="Submit" style="margin-top: 10px">
    </form>

<?php

?>
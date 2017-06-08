<?php
/*
$exp = $_GET['exp'];
echo "The param is $exp";
*/

function process_parameters(){
	global $bad_chars;

	$params = array();

	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['fname'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['mname'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['lname'])));

	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['m'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['d'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['y'])));

	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['address'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['address2'])));	
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['city'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['state'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['zipcode'])));

	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['phonestart'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['phonemid'])));			
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['phoneend'])));

	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['email'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['gender'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['exp'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['category'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_POST['medical'])));
	$params[] = htmlspecialchars(trim(str_replace($bad_chars, "", $_FILES['file']['name'])));

	return $params;
}

function validate_data($params){
	$msg = "";
	if(strlen($params[0]) == 0 || empty($params[0])){
		$msg .= "Please enter your first name<br />";
	} elseif(!preg_match("/^[a-zA-Z ]*$/",$params[0])){
		$msg .= "Only letters and white space allowed for first name.<br />";
	}

	if(strlen($params[2]) == 0 || empty($params[2])){
		$msg .= "Please enter your last name<br /";
	}

	if(empty($params[3])){
		$msg .= "Please enter your birth month<br /";
	}

	if(empty($params[4])){
		$msg .= "Please enter your birth day<br /";
	}

	if(empty($params[5])){
		$msg .= "Please enter your birth year<br /";
	}

	if(empty($params[6])){
		$msg .= "Please enter your address<br /";
	} //elseif (!preg_match("/^[a-zA-Z ]*$/",$params[6]) {
		//$msg .= "Only letters & white space allowed for address.<br /";
	//}

	// don't forget the address slot 2 validation
	// don't forget the address slot 2 validation
	// don't forget the address slot 2 validation

	if(empty($params[8])){
		$msg .= "Please enter your City<br /";
	}

	if(empty($params[10])){
		$msg .= "Please enter your zipcode<br /";
	}

	if(empty($params[11])){
		$msg .= "Please enter your phone area code<br /";
	}

	if(empty($params[12])){
		$msg .= "Please enter your 1st 3 digits of your number<br /";
	}

	if(empty($params[13])){
		$msg .= "Please enter your last 4 digits of your number<br /";
	}

	if(empty($params[14])){
		$msg .= "Please enter your email<br /";
	}

	if(empty($params[15])){
		$msg .= "Please choose your gender<br /";
	}

	if(empty($params[16])){
		$msg .= "Please choose your experience level<br /";
	}

	if(empty($params[17])){
		$msg .= "Please choose your category<br /";
	}

	if($msg){
		write_form_error_page($msg);
		exit;
	}
}

function write_form_error_page($msg){
	write_header();
	write_form();
	echo "<div class=''";
	echo "<h2>Sorry, an error occured<br />",
	$msg,"</h2>";
	echo "</div>";
	write_footer();
}

function write_form(){
	    print <<<ENDBLOCK
	<section class="sub-section black reg-black" >
		<h2 class="reg-header">First Step in the Race!</h2>

		<!-- skeleton for the form referenced from view-source:http://jadran.sdsu.edu/~jadrn000/forms/form3.html -->
		<fieldset>
		<legend>Registration for the SDSU Marathon</legend>
		<form name="runner_info" class="runner" method="post" action="process_request.php">
		<ul>
			<li>
				<label for="fname">First Name</label>
				<input type="text" name="fname" id="fname" value="$_POST[fname]" maxlength="32" pattern="[A-Za-z-' ]{1,32}" title="Enter in letters only" placeholder="Marshall" required>
				<label for="mname">Middle Name</label> 	
				<input type="text" name="mname" value="$_POST[mname]" maxlength="32" pattern="[A-Za-z-' ]{1,32}" title="Enter in letters only">
				<label for="lname">Last Name</label> 
				<input type="text" name="lname" id="lname" value="$_POST[lname]"maxlength="32" pattern="[A-Za-z-' ]{1,32}" title="Enter in letters only" placeholder="Faulk" required>
			</li>

			<li> 
				<label for="d">Date of Birth</label> 
				<input type="text" name="m" id="m"  value="$_POST[m]" placeholder="MM" size="2" required>
				<input type="text" name="d" id="d" value="$_POST[d]" placeholder="DD" size="2" required>
				<input type="text" name="y" id="y" value="$_POST[y]" placeholder="YYYY" size="4" required >   
			</li>

			<li>
				<label for="address">Address</label>
				<input type="text" name="address" id="address" value="$_POST[address]" pattern="[A-Za-z-'. 0-9]{1,32}" required>
				<input type="text" name="address2"  value="$_POST[address2]" pattern="[A-Za-z-#' ]{1,32}" placeholder="Apt/Condo Number">  
			</li>
			<li>
				<label for="city">City</label>
				<input type="text" name="city" id="city" value="$_POST[city]" pattern="[A-Za-z- ]{1,32}" title="Enter in letters only ex: San Diego" required >	
				<label for="states">State</label>
ENDBLOCK;
			 echo "<select name='state'>";
        
$state_values = array("Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","District Of Columbia","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming");
             foreach($state_values as $item) {
                echo "<option value='$item'";
                if($item == $_POST[state])
                    echo "selected";
                echo ">$item</option>";
                }

			print <<<ENDBLOCK
			</select>
			<!-- pattern for zip code from http://html5pattern.com/Postal_Codes -->
			<label for="zipcode">Zipcode</label>
			<input type="text" name="zipcode" id="zipcode" value="$_POST[zipcode]" pattern="(\d{5}([\-]\d{4})?)" title="Enter in Numbers Only ex: 92129" placeholder="55555" required> <br>
			</li>

			<li>
				<label for="phone">Phone Number</label>
				(<input type="text" name="phonestart" size="3" value="$_POST[phonestart]" minlength="3" maxlength="3" pattern="[0-9]{3}"  placeholder="XXX" title="Enter in area code ex: 619">)
				<input type="text" name="phonemid" size="3" value="$_POST[phonemid]" minlength="3" maxlength="3" pattern="[0-9]{3}" id="phone-mid" placeholder="XXX" title="Enter in the first 3 digits ex: 524">
				<input type="text" name="phoneend" size="4" value="$_POST[phoneend]" minlength="4" maxlength="4" pattern="[0-9]{4}" id="phone-end" placeholder="XXXX" title="Enter in the last 4 digits ex: 1480">
			</li>

			<li>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" value="$_POST[email]" placeholder="name@email.com" required>
			</li>
ENDBLOCK;
$gender_choice = array("male","female");
			echo"<li>";
			echo"<label for='gender'>Gender</label>";
            foreach($gender_choice as $item) {
                echo "<input type='radio' name='gender'  value='$item'";
                if($item == $_POST[gender])
                    echo " checked='checked'";
                echo " />$item";
                }

            echo "</li>";

$exp_choice = array("novice","experienced","expert");
			echo"<li>";
			echo"<label for='experience'>Experience</label>";
            foreach($exp_choice as $item) {
                echo "<input type='radio' name='exp'  value='$item'";
                if($item == $_POST[exp])
                    echo " checked='checked'";
                echo " />$item";
                }            
            echo "</li>";
$category_choice = array("teen","adult","senior");
			echo"<li>";
			echo"<label for='category'>Category</label>";
            foreach($category_choice as $item) {
                echo "<input type='radio' name='category'  value='$item'";
                if($item == $_POST[category])
                    echo " checked='checked'";
                echo " />$item";
                }            
            echo "</li>";          

            print <<<ENDBLOCK
			<li>
				<label for="medical">Medical Conditions</label>
			</li>

			<li>
				<textarea name="medical-conditions" id="medical" rows="5" cols="45" maxlength="200" placeholder="List Medical Conditions Here..."></textarea>
			</li>
		</ul>

		<div class="button-section">
			<input type="reset" value="Clear Data" class="button-clear" />
			<input type="submit" value="Submit" class="button-submit" />
			<h3 id="what_kind">&nbsp;</h3>
		</div>
		
		</form>
		</fieldset>
		 
	</section>
ENDBLOCK;

}

function store_data_in_db($params) {
    # get a database connection
    $db = get_db_handle();  ## method in helpers.php
    //$name = $params[0] . ' ' . $params[1] . ' ' . $params[2];
    $dob = $params[3] . '/' . $params[4] . '/' . $params[5];
    $phone = $params[11] .'-' . $params[12] . '-' .  $params[13];
##OK, duplicate check passed, now insert
    $sql = "INSERT INTO person(first_name,last_name, dob, address, address2, city, state, zip, phone, email, gender, experience, category, medical, image) ".
    "VALUES('$params[0]','$params[2]','$dob','$params[6]','$params[7]','$params[8]', '$params[9]', '$params[10]', '$phone', '$params[14]', '$params[15]', '$params[16]', '$params[17]', '$params[18]', '$params[19]');";
##echo "The SQL statement is ",$sql;    
    mysqli_query($db,$sql);
    $how_many = mysqli_affected_rows($db);
    echo("There were $how_many rows affected");
    close_connector($db);
    }

?>
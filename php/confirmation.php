
<?php
 $UPLOAD_DIR = '../im_g@t3s';
 $COMPUTER_DIR = '../im_g@t3s/';
$fname = $_FILES['file']['name'];

write_header();
echo <<<ENDBLOCK
    <section class="sub-section black reg-black" >
    <h1>$params[0], thank you for registering.</h1>
    <img src="$UPLOAD_DIR/$fname" width='200px' />
    <table>
        <tr>
            <td>Name</td>
            <td>$params[0] $params[1] $params[2]</td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td>$params[3]/$params[4]/$params[5]</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>$params[6] $params[7]</td>
        </tr>
        <tr>
            <td>City</td>
            <td>$params[8]</td>
        </tr>
        <tr>
            <td>State</td>
            <td>$params[9]</td>
        </tr>
        <tr>
            <td>Zip Code</td>
            <td>$params[10]</td>
        </tr>

        <tr>
            <td>Phone</td>
            <td>$params[11]-$params[12]-$params[13]</td>
        </tr>

        <tr>
            <td>email</td>
            <td>$params[14]</td>
        </tr>

        <tr>
            <td>Gender</td>
            <td>$params[15]</td>
        </tr>
        
        <tr>
            <td>Experience</td>
            <td>$params[16]</td>
        </tr>

        <tr>
            <td>Category</td>
            <td>$params[17]</td>
        </tr>   

        <tr>
            <td>Medical</td>
            <td>$params[18]</td>
        </tr> 

        <tr>
            <td>Photo Name</td>
            <td>$params[20]</td>
        </tr>

            <td>Photo Param</td>
            <td>$params[19]</td>
        </tr>

    </table>

    <h1> Have fun on Race Day!</h1>
    </section>                          
ENDBLOCK;

write_footer();
?>

<?php
include "test_input.php";
//  var_dump($_POST);   

if (isset($_POST)) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // prepare sql and bind parameters


        /* using ternary if operators
        (condition) ? (true return value) : (false return value)
        Example usage for: Ternary Operator:
        $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

        // The above is identical to this if/else statement
        if (empty($_POST['action'])) {
            $action = 'default';
        } else {
            $action = $_POST['action'];
        }   */
        $firstname=(isset($_POST["firstname"])) ? test_input($_POST["firstname"]) : '';
        $lastname=(isset($_POST["lastname"])) ? test_input($_POST["lastname"]) : '';
        $email=(isset($_POST["email"])) ? test_input($_POST["email"]) : '';
        $usrtel=(isset($_POST["usrtel"])) ? test_input($_POST["usrtel"]) : '';
        $country_code=(isset($_POST["country_code"])) ? test_input($_POST["country_code"]) : '';
        $homepage=(isset($_POST["homepage"])) ? test_input($_POST["homepage"]) : '';

        $address=(isset($_POST["address"])) ? test_input($_POST["address"]) : '';
        $street=(isset($_POST["street"])) ? test_input($_POST["street"]) : '';
        $city=(isset($_POST["city"])) ? test_input($_POST["city"]) : '';
        $postcode=(isset($_POST["postcode"])) ? test_input($_POST["postcode"]) : '';

        $myFile=(isset($_POST["myFile"])) ? test_input($_POST["myFile"]) : '';
        $img=(isset($_POST["img"])) ? test_input($_POST["img"]) : '';
        $message=(isset($_POST["message"])) ? test_input($_POST["message"]) : '';
        $gender=(isset($_POST["gender"])) ? test_input($_POST["gender"]) : '';
        $vehicle1=(isset($_POST["vehicle1"])) ? test_input($_POST["vehicle1"]) : '';
        $vehicle2=(isset($_POST["vehicle2"])) ? test_input($_POST["vehicle2"]) : '';
        $favcolour=(isset($_POST["favcolour"])) ? test_input($_POST["favcolour"]) : '';
        $bday=(isset($_POST["bday"])) ? test_input($_POST["bday"]) : '';
        $date1=(isset($_POST["date1"])) ? test_input($_POST["date1"]) : '';
        $date2=(isset($_POST["date2"])) ? test_input($_POST["date2"]) : '';
        $daytime=(isset($_POST["daytime"])) ? test_input($_POST["daytime"]) : '';
        $daymonth=(isset($_POST["daymonth"])) ? test_input($_POST["daymonth"]) : '';
        $usr_time=(isset($_POST["usr_time"])) ? test_input($_POST["usr_time"]) : '';
        $week_year=(isset($_POST["week_year"])) ? test_input($_POST["week_year"]) : '';
        $quantity=(isset($_POST["quantity"])) ? test_input($_POST["quantity"]) : '';
        $points=(isset($_POST["points"])) ? test_input($_POST["points"]) : '';
        $points1=(isset($_POST["points1"])) ? test_input($_POST["points1"]) : '';
        $a=(isset($_POST["a"])) ? test_input($_POST["a"]) : '';
        $b=(isset($_POST["b"])) ? test_input($_POST["b"]) : '';
        /*
        $googlesearch=(isset($_POST["googlesearch"])) ? test_input($_POST["googlesearch"]) : '';
        */

        
        $sql = "INSERT INTO `tablename`(
        `firstname`, 
        `lastname`, 
        `email`, 
        `usrtel`, 
        `country_code`, 
        `homepage`, 
        `address`, 
        `street`, 
        `city`, 
        `postcode`, 
        `myFile`, 
        `img`, 
        `message`, 
        `gender`, 
        `vehicle1`, 
        `vehicle2`, 
        `favcolour`, 
        `bday`, 
        `date1`, 
        `date2`, 
        `daytime`, 
        `usr_time`, 
        `week_year`, 
        `quantity`, 
        `points`, 
        `points1`, 
        `a`, 
        `b`) 
        VALUES (
        :firstname, 
        :lastname, 
        :email, 
        :usrtel, 
        :country_code, 
        :homepage, 
        :address, 
        :street, 
        :city, 
        :postcode, 
        :myFile, 
        :img, 
        :message, 
        :gender, 
        :vehicle1, 
        :vehicle2, 
        :favcolour, 
        :bday, 
        :date1, 
        :date2, 
        :daytime, 
        :usr_time, 
        :week_year, 
        :quantity, 
        :points, 
        :points1, 
        :a, 
        :b
        )";

         
        $stmt =$pdo->prepare($sql);
        $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':usrtel', $usrtel, PDO::PARAM_STR);
        $stmt->bindParam(':country_code', $country_code, PDO::PARAM_STR);
        $stmt->bindParam(':homepage', $homepage, PDO::PARAM_STR);
        $stmt->bindParam(':address', $address, PDO::PARAM_STR);
        $stmt->bindParam(':street', $street, PDO::PARAM_STR);
        $stmt->bindParam(':city', $city, PDO::PARAM_STR);
        $stmt->bindParam(':postcode', $postcode, PDO::PARAM_STR);
        $stmt->bindParam(':myFile', $myFile, PDO::PARAM_STR);
        $stmt->bindParam(':img', $img, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
        $stmt->bindParam(':vehicle1', $vehicle1, PDO::PARAM_STR);
        $stmt->bindParam(':vehicle2', $vehicle2, PDO::PARAM_STR);
        $stmt->bindParam(':favcolour', $favcolour, PDO::PARAM_STR);
        $stmt->bindParam(':bday', $bday, PDO::PARAM_STR);
        $stmt->bindParam(':date1', $date1, PDO::PARAM_STR); 
        $stmt->bindParam(':date2', $date2, PDO::PARAM_STR);
        $stmt->bindParam(':daytime', $daytime, PDO::PARAM_STR);
        $stmt->bindParam(':usr_time', $usr_time, PDO::PARAM_STR);
        $stmt->bindParam(':week_year', $week_year, PDO::PARAM_STR); 
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_STR);
        $stmt->bindParam(':points', $points, PDO::PARAM_STR);
        $stmt->bindParam(':points1', $points1, PDO::PARAM_STR);
        $stmt->bindParam(':a', $a, PDO::PARAM_STR); 
        $stmt->bindParam(':b', $b, PDO::PARAM_STR); 
        $stmt->execute(); 


    echo 'New records created successfully';
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$pdo = null;
    
}
?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<title>HTML Basic Form using PDO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="typeset.css">
<link rel="stylesheet" type="text/css" href="forms.css">
<link href="https://fonts.googleapis.com/css?family=Poppins|Muli" rel="stylesheet">

<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!–[if IE 7 ]> <html lang="en" class="ie7″> <![endif]–> 
<!–[if IE 8 ]> <html lang="en" class="ie8″> <![endif]–> 
<!–[if IE 9 ]> <html lang="en" class="ie9″> <![endif]–> 
<!–[if (gt IE 9)|!(IE)]><!–> <html lang="en"> <!–<![endif]–> 
 
</head>


<body> 
<h2>Skeleton Form to MySQL Database with PDO</h2>
<p>This form attempts to show how to use the different W3 Schools HTML5 element examples, with PHP PDO to submit them. </p>
<p>There's heaps of great <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5/Constraint_validation">form validation </a>information on Mozilla's developer site. </p>
<p>It's using a JQuery function for Captcha, but I don't know who originally wrote it. *Sorry*, but thank you for sharing.</p>
<!--
<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
-->
<form method="POST" action="" id="form1" oninput="x.value=parseInt(a.value)+parseInt(b.value)"  onsubmit="return checkform(this);" >
    <fieldset>
        <legend>Input Field examples:</legend>
         
            <label for="firstname">First name:</label> 
            <input type="text" id="firstname" name="firstname" placeholder="First name"  required onblur="checkValidity('name', ' ', 'Invalid name entered!')"><span></span>
            <br>

            <label for="lastname">Last name:</label> 
            <input type="text" id="lastname" name="lastname" placeholder="Last name"  required onblur="checkValidity('name', ' ', 'Invalid name entered!')"> 
            <br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Email address" required onblur="checkValidity('email', '@', 'Invalid e-mail address')" >
            <br>
            <label for="usrtel">Telephone:</label>
            <input type="tel" id="usrtel" name="usrtel" placeholder="Telephone">
            <br>
            <label for="country_code">Country:</label>
            <input type="text" id="country_code" name="country_code" placeholder="Country" pattern="[A-Za-z]{3}" title="Three letter country code"  maxlength="3">
            <br>
            
            <label for="homepage">Add your homepage:</label>
            <input type="url" id="homepage" name="homepage" placeholder="Your homepage">
            <br>

            <label for="address">Street address:</label>
            <input type="text" id="address"  name="address" placeholder="Address" >
            <br>

            <label for="city">City:</label>
            <input  type="text" id="city" name="city" placeholder="City" >
            <br>


            <br>
            <label for="state">State:</label>
            <select name="state" id="state" >
              <option value="0"></option>
  <option value="1" data-img="https://bit.ly/1qfgFN2">ACT</option>
              <option value=" " >NSW</option>
              <option value=" " >Qld</option>
              <option value=" " >SA</option>
              <option value=" " >Tas</option>
              <option value=" " >Vic</option>
              <option value=" " >WA</option>
              <option value="0" >- External -</option>
              <option value=" " >JBT</option>
              <option value=" " >AAT</option>
              <option value=" " >Christmas Island</option>
              <option value=" " >Cocos (Keeling) Island</option>
              <option value=" " >Coral Sea Islands</option>
              <option value=" " >Heard Island</option>
              <option value=" " >McDonald Island</option>
              <option value=" " >Norfolk Island</option>
            </select>
            <br>

            <label for="postcode">Post code:</label>
            <input type="text" id="postcode" name="postcode" placeholder="Post Code" maxlength="6">


            <label for="myFile">Select a file:</label>
            <input type="file" id="myFile" name="myFile">
            <br>

            <label for="img">Select images:</label>
            <input type="file" id="img" name="img" multiple>
            <br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="10" cols="30" role="textbox" aria-multiline="true" required="required">
            </textarea><!-- contenteditable="true" for single row -->
            <br>

            <br>
            <label for="browsers">Browser:</label>
            <input list="browsers" placeholder="Browser">
            <datalist id="browsers">
                <option value="Internet Explorer"></option>
                <option value="Firefox">Firefox</option>
                <option value="Chrome">Chrome</option>
                <option value="Opera">Opera</option>
                <option value="Safari">Safari</option>
            </datalist> 

            <br>
            <label for="gender">Gender:</label><br>
            <input type="radio" name="gender" value="male"  role="radio" checked tabindex="0"> Male<br>
            <input type="radio" name="gender" value="female"  role="radio" aria-checked="false" tabindex="-1"> Female<br>
            <input type="radio" name="gender" value="other"  role="radio" aria-checked="false" tabindex="-1"> Other<br>
            <br>


            <label for="vehicle1" class="inline">I have a bike</label>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="inline">
            <br>
            <label for="vehicle2" class="inline">I have a car</label>
            <input type="checkbox" name="vehicle2" value="Car" class="inline">
            <br>
            <label for="vehicl3">disabled unchecked</label>
            <input type="checkbox" id="vehicle3" disabled="disabled" />
            <br>
            <label for="vehicle4">disabled checked </label>
            <input type="checkbox" id="vehicle4" disabled="disabled" checked="checked" />
            <br>

            <label for="favcolor" class="inline">Select your favorite color:</label>
            <input type="color" id="favcolor" name="favcolor" class="inline auto">
            <br>
            
            <label for="bday" class="inline">Birthday:</label>
            <input type="date" id="bday" name="bday">
            <br>

            
            <label for="date1" class="inline">Enter a date before 1980-01-01:</label>
            <input type="date" name="date1" max="1979-12-31"><br>
            
            <label for="date2" class="inline">Enter a date after 2000-01-01:</label>
            <input type="date" name="date2" min="2000-01-02"><br>
            <br>

            
            <label for="daytime" class="inline">Birthday (date and time):</label>
            <input type="datetime-local" id="daytime" name="daytime">
            <br>
            
            <label for="daymonth" class="inline">Birthday (month and year):</label>
            <input type="month" id="daymonth" name="daymonth">
            <br>
            
            <label for="usr_time" class="inline">Select a time:</label>
            <input type="time" id="usr_time" name="usr_time">
            <br>
            
            <label for="week_year" class="inline">Select a week:</label>
            <input type="week" id="week_year" name="week_year">
            <br>

            
            <label for="quantity">Quantity (between 1 and 5):</label>
            <input type="number" id="quantity" name="quantity" min="1" max="5">
            <br>

            <label for="points">Number Range:</label>
            <input type="range" id="points"  name="points" min="0" max="10">
            <br>

            <label for="points1">Number Steps:</label>
            <input type="number" name="points1" name="points1" step="3">
            <br>

            <label for="a" class="inline auto">0</label>
            <input type="range"  id="a" name="a" value="50" class="inline auto">
            <label for="b" class="inline auto">100 </label>+
            <input type="number" id="b" name="b" value="50" class="inline auto" style="width:5.5vw;text-align:center;">
            <label for="ab" class="inline auto">=</label>
            <output name="x" id="ab" for="a b" class="inline auto"></output>
            <br>
            <!--
            <label for="googlesearch">Search Google:</label>
            <input type="search" id="googlesearch" name="googlesearch">
            -->
            <br>
            <!-- START CAPTCHA -->
            <br>
            <div class="capbox">

            <div id="CaptchaDiv"></div>

            <div class="capbox-inner">
            Type the above number:<br>

            <input type="hidden" id="txtCaptcha">
            <input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

            </div>
            </div>
            <br><br>
            <!-- END CAPTCHA -->

            <br><br>
            <input type="reset"  value="Clear">
            <input type="submit" value="Submit as normal">
            <input type="submit" formtarget="_blank"
            value="Submit to a new window">
            <br>
            <input type="image" src="cross.png" alt="Submit" width="18" height="18" style="border:5px solid red;border-radius:50px;">Press the button to submit
        </legend>
    </fieldset>
</form>
 
  


<script>
// Captcha Script
function checkform(theform){
    var why = "";

    if(theform.CaptchaInput.value == ""){
        why += "- Please Enter CAPTCHA Code.\n";
    }
    if(theform.CaptchaInput.value != "") {
        if(ValidCaptcha(theform.CaptchaInput.value) == false){
        why += "- The CAPTCHA Code Does Not Match.\n";
        }
    }
    if(why != ""){
        alert(why);
        return false;
    }
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
    var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
    var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
    if (str1 == str2){
        return true;
    }else{
        return false;
    }
}

function removeSpaces(string){
    return string.split(' ').join('');
}

</script>


</body>
</html>

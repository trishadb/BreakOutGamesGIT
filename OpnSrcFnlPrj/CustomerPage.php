<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css" />
        <script type="text/javascript" src="javascript/script.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <form name="customer" id ="customer"  method="get" action="FinalPage.html">
            <fieldset style="width:14%">
                <h1>Customer Information</h1>
                <p> <strong>First Name:</strong>
                    <input type="text" name="first" id="first" class="first" size="10"/><br /> 
                </p>
                <p> <strong>Last Name:</strong>
                    <input type="text" name="last" id="last" class="last" size="10"/><br /> 
                </p>
                <p> <strong>E-Mail:</strong>
                    <input type="text" name="mail" id="mail" class="mail" size="20"/><br /> 
                </p>
                <p> <strong>Phone Number:</strong>
                    <input type="text" name="number" id="number" class="number" size="10"/><br /> 
                </p>			
            </fieldset>	

            <fieldset style="width:14%">
                <h1>Billing Information</h1>
                <p> <strong>Card type:</strong>
                    <select name="item" id="item" size="1"> 
                        <option>Visa</option> 
                        <option>Master Card</option> 
                        <option>American Express</option>
                        <option>Discover Network</option> 
                    </select> 
                </p>
                <p> <strong>Card Name:</strong>
                    <input type="text" name="CardName" id="CardName" class="CardName" size="15"/><br /> 
                </p>
                <p> <strong>Card Number:</strong>
                    <input type="text" name="CardNumber" id="CardNumber" class="CardNumber" size="18"/><br /> 
                </p>
                <p> <strong>CVC</strong>
                    <input type="text" name="cvc" id="cvc" class="cvc" size="1"/><br /> 
                </p>
                <p> <strong>Expiration date</strong>
                    <select id="M" name='expireMM' id = 'expireMM'>
                        <option value=''>M</option>
                        <option value='1'>01</option>
                        <option value='2'>02</option>
                        <option value='3'>03</option>
                        <option value='4'>04</option>
                        <option value='5'>05</option>
                        <option value='6'>06</option>
                        <option value='7'>07</option>
                        <option value='8'>08</option>
                        <option value='9'>09</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                    </select>
                    <select id="Y" name='expireYY' id='expireYY'>
                        <option value=''>Y</option>
                        <option value='15'>2015</option>
                        <option value='16'>2016</option>
                        <option value='17'>2017</option>
                        <option value='17'>2018</option>
                        <option value='19'>2019</option>
                        <option value='20'>2020</option>
                        <option value='21'>2021</option>
                        <option value='22'>2022</option>
                        <option value='23'>2023</option>
                        <option value='24'>2024</option>
                        <option value='25'>2025</option>
                        <option value='26'>2026</option>
                    </select> 
                </p>
                <button type="submit" value="Submit">Next</button>
                <button type="reset" value="Reset">Reset</button>
            </fieldset>
    </form>

    <?php include ('includes/footer.php'); ?>
</body>
</html>

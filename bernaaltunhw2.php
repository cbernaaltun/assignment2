<!DOCTYPE html>
<html>
<head>
    <title> Currency Converter  </title> </head>
<body  align = "center">
<h1>  Currency Converter   </h1> 

<div style="width:50%; margin-left:25%;">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div style="width:100%; display:inline-block;">
        <div style="width:5%; float:left;"> 
            From:
        </div> 
        <div style="width:10%; float:left; margin-left:5%;"> 
            <input type= "text" name = "from" />   
        </div>
        <div style="width:5%; float:left; margin-left:20%;">
            Currency: 
        </div>
        <div style="width:10%; float:left; margin-left:5%;"> 
            <select name="from_dropdown">
                <option value = "USD">Us Dollar</option>
                <option value = "EUR">Euro</option>
                <option value = "CAD">Canadian Dollar</option>
            </select>
        </div>
    </div>
    <br/>
    <div style="width:100%;  display:inline-block;">
        <div style="width:5%; float:left;"> 
            To:
        </div>
        <div style="width:10%; float:left; margin-left:5%;"> 
            <input type= "text" name = "to" /> 
        </div>  
        <div style="width:5%; float:left; margin-left:20%;">
            Currency: 
        </div>
        <div style="width:10%; float:left; margin-left:5%;">
            <select name="to_dropdown">
                <option value = "USD">Us Dollar</option>
                <option value = "EUR">Euro</option>
                <option value = "CAD">Canadian Dollar</option>
            </select>
        </div>
        <br/>
    </div>    
    <div style="width:100%;  display:inline-block;">
        <div style="width:10%; float:left; margin-left:55%;">            
            <input  type = "submit" name="sbmt" value = "Convert" style="float:right"/>
        </div>
    </div>
</form>
</div>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cc_from = htmlspecialchars($_REQUEST['from']);

    $cc_from_dropdown = $_REQUEST['from_dropdown'];

    $cc_to_dropdown = $_REQUEST['to_dropdown'];
    
    if ($cc_from_dropdown == "USD")
    {
        if($cc_to_dropdown == "EUR") {
            $output = $cc_from * 0.905092;
            $to = $output;
            echo "<h1>" .$output. " Euros" ."</h1>";
        } else if($cc_to_dropdown == 'CAD') {
            $output = $cc_from * 1.25187;
            $to = $output;
            echo "<h1>" .$output. "Canadian Dollar" ."</h1>";;
        }
    }

    if ($cc_from_dropdown == "EUR")
    {
        if($cc_to_dropdown == "USD") {
            $output = $cc_from * 1.10486;
            echo "<h1>" .$output. " Dollar" ."</h1>";
        } else if($cc_to_dropdown == 'CAD') {
            $output = $cc_from * 1.38314;
            echo "<h1>" .$output. "Canadian Dollar" ."</h1>";
        }
    }

    if ($cc_from_dropdown == "CAD")
    {
        if($cc_to_dropdown == "USD") {
            $output = $cc_from * 0.798805;
            echo "<h1>" .$output. " Dollar" ."</h1>";
        } else if($cc_to_dropdown == 'EUR') {
            $output = $cc_from * 0.722992;
            echo "<h1>" .$output. "Euros" ."</h1>";
        }
    }
}
?> 


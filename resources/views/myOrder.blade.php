<!DOCTYPE html>
<html lang="en">
<head>
    <title>PAYPAL</title>
</head>
<body>
    <center>
<h4>I want to pay 500 USD</h4>
<form method="post" action="{!! URL::to('paypal') !!}" >
    @csrf
   <input type="hidden" name="amount" value="500"> 
   <input type="submit" name="paynow" value="Pay Now">
</form>
</center>
</body>
</html>
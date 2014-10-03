<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title><?php echo date('Y-m-d'); ?> Customer Name - Invoice 130</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/example.js"></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">Jess Fishenden
3 Woodside Mews	
Leeds, LS7 2UP

jess@qw6.net
jessfishenden.com</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="" alt="" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title">Client
c/o Organisation
Address
City
POST CODE</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>pa-<?php echo date('Ym'); ?>-001</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date"><?php echo date('d F Y'); ?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due (&pound;)</td>
                    <td><div class="due">65.00</div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost (&pound;)</th>
		      <th>Quantity</th>
		      <th>Price (&pound;)</th>
		  </tr>
		  
		  <tr class="item-row removable">
		      <td class="item-name"><div class="delete-wpr"><textarea>Item</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Description (1/10/2014 &ndash; 30/10/2011)</textarea></td>
		      <td><textarea class="cost">65.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">65.00</span></td>
		  </tr>
		  
		  		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">&pound;65.00</div></td>
		  </tr>
		  <tr class="removable">
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line"><div class="delete-wpr"><a class="delete" href="javascript:;" title="Remove row">X</a></div>Discount (&pound;)</td>
		      <td class="total-value"><textarea id="discount">0.00</textarea></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total (&pound;)</td>
		      <td class="total-value"><div id="total">65.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid (&pound;)</td>

		      <td class="total-value"><textarea id="paid">0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due (&pound;)</td>
		      <td class="total-value balance"><div class="due">65.00</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>Payment is due by <?php echo date('d F Y'); ?>.
Please make payment by bank transfer to: Ms J R Fishenden, HSBC, 40-46-33, 91280643.  Or by paypal to j@qw6.net</textarea>
		</div>
		
	</div>
	
</body>

</html>
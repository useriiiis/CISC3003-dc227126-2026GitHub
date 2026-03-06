/* add loop and other code here ... in this simple exercise we are not
   going to concern ourselves with minimizing globals, etc */

// Loop through cart items and output each row using outputCartRow()
for (var i = 0; i < filenames.length; i++) {
    var total = calculateTotal(quantities[i], prices[i]);
    outputCartRow(filenames[i], titles[i], quantities[i], prices[i], total);
}

// Calculate subtotal by summing all item totals
var subtotal = 0;
for (var j = 0; j < filenames.length; j++) {
    subtotal += calculateTotal(quantities[j], prices[j]);
}

// Calculate tax (10%)
var tax = subtotal * 0.1;

// Calculate shipping ($40 unless subtotal > 1000, then $0)
var shipping = (subtotal > 1000) ? 0 : 40;

// Calculate grand total
var grandTotal = subtotal + tax + shipping;

// Output the total rows
document.write('<tr class="totals">');
document.write('<td colspan="4">Subtotal</td>');
document.write('<td>$' + subtotal.toFixed(2) + '</td>');
document.write('</tr>');
document.write('<tr class="totals">');
document.write('<td colspan="4">Tax</td>');
document.write('<td>$' + tax.toFixed(2) + '</td>');
document.write('</tr>');
document.write('<tr class="totals">');
document.write('<td colspan="4">Shipping</td>');
document.write('<td>$' + shipping.toFixed(2) + '</td>');
document.write('</tr>');
document.write('<tr class="totals focus">');
document.write('<td colspan="4">Grand Total</td>');
document.write('<td>$' + grandTotal.toFixed(2) + '</td>');
document.write('</tr>');

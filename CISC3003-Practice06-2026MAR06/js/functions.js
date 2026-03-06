/* define functions here */

/**
 * Calculates the total amount for a cart item (quantity * price)
 * @param {number} quantity - The quantity of the item
 * @param {number} price - The unit price of the item
 * @returns {number} The product of quantity and price
 */
function calculateTotal(quantity, price) {
    return quantity * price;
}

/**
 * Outputs a single cart row to the document using the supplied data
 * @param {string} file - The image filename
 * @param {string} title - The product title
 * @param {number} quantity - The quantity
 * @param {number} price - The unit price
 * @param {number} total - The total amount (quantity * price)
 */
function outputCartRow(file, title, quantity, price, total) {
    document.write('<tr>');
    document.write('<td><img src="images/' + file + '"></td>');
    document.write('<td>' + title + '</td>');
    document.write('<td>' + quantity + '</td>');
    document.write('<td>$' + price.toFixed(2) + '</td>');
    document.write('<td>$' + total.toFixed(2) + '</td>');
    document.write('</tr>');
}

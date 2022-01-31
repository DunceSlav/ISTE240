/* JavaScript for Pizza Ordering Form */

function validateForm() {
    var x = document.forms["OrderForm"]["customerName"].value;
    if (x == null || x == "") {
        document.forms["OrderForm"]["customerName"].style.backgroundColor = 'pink';
        return false;
    }
}
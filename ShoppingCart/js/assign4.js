$("document").ready(function(){  
	
// Updates the first item.
function updateItem1(){
    // Takes the number in the input box.
    var num = $("#item1").val();
    var num1 = 40.00;
    var total = 0.00;
    total = num * num1;
    // Changes the html value of the Total tag to the new value.
    $("#item1_total").html(total);
    // Updates the cost.
    update_cost();
} 
// Updates the second item.
function updateItem2(){
    // Takes the number in the input box.
    var num = $("#item2").val();
    var num1 = 30.00;
    var total = 0.00;
    total = num * num1;
    // Changes the html value of the Total tag to the new value.
    $("#item2_total").html(total);
    // Updates the cost.
    update_cost();
}
// Updates the third item.
function updateItem3(){
    // Takes the number in the input box.
    var num = $("#item3").val();
    var num1 = 60.00;
    var total = 0.00;
    total = num * num1;
    // Changes the html value of the Total tag to the new value.
    $("#item3_total").html(total);
    // Updates the cost.
    update_cost();
}
// Updates the cost.
function update_cost(){
    //this is use to update the Cost value with the new values of the two totals
    var cost = $("#cost").html();
    // Converts the numbers obtained into integers.
    var item1_total = parseInt($("#item1_total").html());
    var item2_total = parseInt($("#item2_total").html());
	var item3_total = parseInt($("#item3_total").html());
    // Cost amount.
    cost = item1_total + item2_total + item3_total;
    // Cost HTML is updated.
    $("#cost").html(cost);
    // Calls the tax function.
    update_tax();
}     
// Updates tax rate.
function update_tax(){
    // Value from selected state is obtained.
    var state = $("#state option:selected").val();
    // Used to get the tax rate for the certain state.
    switch(state){
            //California with a tax rate of 8%.
            case "CA":
            var stateTax = 0.08;
            var cost = parseFloat($("#cost").html()).toFixed(2);
            var tax = parseFloat($("#tax").html()).toFixed(2);
            //the tax is equal to income tax of the state multiplied by the current cost
            tax = cost * stateTax;
            $("#tax").html(tax.toFixed(2)); // Tax area is changed.
       		// Grabs finaltax input id and sets value to two decimals
            $('#finaltax').val(tax.toFixed(2));
            break;         
            // Florida with a tax rate of 6%.
            case "FL":
            var stateTax = 0.06;
            var cost = parseFloat($("#cost").html()).toFixed(2);
            var tax = parseFloat($("#tax").html()).toFixed(2);
            tax = cost * stateTax;
            $("#tax").html(tax.toFixed(2));
			// Grabs finaltax input id and sets value to two decimals
            $('#finaltax').val(tax.toFixed(2));
            break;           
            // Massachusetts with a tax rate of 6%.
            case "MA":
            var stateTax = 0.06;
            var cost = parseFloat($("#cost").html()).toFixed(2);
            var tax = parseFloat($("#tax").html()).toFixed(2);
            tax = cost * stateTax;
            $("#tax").html(tax.toFixed(2));
			// Grabs finaltax input id and sets value to two decimals
            $('#finaltax').val(tax.toFixed(2));
            break;   
            // Arizona with a tax rate of 5%.
            case "AZ":
            var stateTax = 0.05;
            var cost = parseFloat($("#cost").html());
            var tax = parseFloat($("#tax").html());  
            tax = cost * stateTax;
            $("#tax").html(tax.toFixed(2));
			// Grabs finaltax input id and sets value to two decimals
            $('#finaltax').val(tax.toFixed(2));
            break;
    }
    // Updates total.
    update_total();
}
// Updates the total.
function update_total(){
    var cost = parseFloat($("#cost").html());
    var S_H = parseFloat($("#S_H").html());
    var tax = parseFloat($("#tax").html());
    var total = cost + S_H + tax;
    $("#total").html(total.toFixed(2));
// Grabs final total input id and sets value to total
    $('#finaltotal').val(total.toFixed(2));
}   
// Updates the shipment selection.
function update_shipping(){
    // Takes in label.
    var ship = $('input[name=shipping]:checked + label').text();
    // Updates according to selection.
    switch(ship){         
            case "5 to 10 days(+$5.99)":
            $("#S_H").html(5.99);
            break;      
            case "Following day(+$24.99)":
            $("#S_H").html(24.99);
            break;
            case "Regular":
            $('#S_H').html(0.00);
            break;
            default:
            $("#S_H").html(0.00);
            break;        
    }
    // Updates the total.
    update_total();
}

// Removes values of first product.
function removeItem1(){
    $("#item1").val(0);
    $("#item1_total").html(0);
    update_cost();   
}

// Removes values of the second product.
function removeItem2(){
    $("#item2").val(0);
    $("#item2_total").html(0);
    update_cost();  
}

// Removes values of the third product. 
function removeItem3(){
    $("#item3").val(0);
    $("#item3_total").html(0);
    update_cost();  
}  
// Adds total for item 1.
$("#item1").change(function(){    
    updateItem1();
});
// Adds total for item 2.
$("#item2").change(function(){
    updateItem2();
});
// Adds total for item 3.
$("#item3").change(function(){
    updateItem3();
});	
// Updates the shipping section.
$("input:radio").click(function(){
    update_shipping();
});
    
    //this function updates the tax section of the table
$("#state").change(function(){
    update_tax();
});
// Removes the values of item 1.
$("#item1Remove").click(function(){
    removeItem1();
});
// Removes the values of item 2.
$("#item2Remove").click(function(){
    removeItem2();
});
// Removes the values of item 3.
$("#item3Remove").click(function(){
    removeItem3();
});
});


function calculateProfit(event){
    var costprice = document.getElementById('cost_price');
    var sellingprice = document.getElementById('selling_price');
    var profit = document.getElementById('profit');

    profit.value = sellingprice.value - costprice.value;
}
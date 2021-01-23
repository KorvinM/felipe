/*app.js*/
const {checkInventory} = require('./library.js');

const order = [['sunglasses', 1], ['bags', 2]];

// Write your code below:
function handleSuccess(resolved){
  console.log(resolved);
}

function handleFailure(rejected){
    console.log(rejected);  
}

checkInventory(order).then(handleSuccess,handleFailure);

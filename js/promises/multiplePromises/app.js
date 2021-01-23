/*app.js*/
const {checkInventory, processPayment, shipOrder} = require('./library.js');

const order = {
  items: [['sunglasses', 1], ['bags', 2]],
  giftcardBalance: 79.82
};

checkInventory(order)
.then((resolvedValueArray) => {
  // Write the correct return statement here:
  return processPayment(resolvedValueArray);
 
})
//Asynchronous operations are chained by explicitly returning promises within .then()‘s executed in the correct order. 
.then((resolvedValueArray) => {
  // Write the correct return statement here:
    return shipOrder(resolvedValueArray);

})
.then((successMessage) => {
  console.log(successMessage);
})
.catch((errorMessage) => {
  console.log(errorMessage);
});


/* whale talk and password validator
 * demo arrays and loops */
//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array

// whale talk
var input = 'Tkorvinjonmobberleys';
var vowels = ['a','e','i','o','u'],
    resultArray=[];

//in the following loops, we use the array property length, and the array method push
//other array [properties](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array#Properties) and [methods](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array#Methods) are available
for (var i=0;i<input.length;i++){
  if(input[i]==='e'){
    resultArray.push(input[i]);
  } else if(input[i]==='u'){
    resultArray.push(input[i]);
  }
  
  for(var j=0;j<vowels.length;j++){
    if(input[i]===vowels[j]){
			resultArray.push(input[i]);      
    }
  }
}

console.log(resultArray);

console.log(resultArray.join('').toUpperCase());

// password validation
function hasUpperCase(input){
  for(var i=0;i<input.length;i++){
    if (input[i]===input[i].toUpperCase()){
      return true;
    }
  }
}

function hasLowerCase(input){
  for(var i=0;i<input.length;i++){
    if (input[i]===input[i].toLowerCase()){
      return true;
    }
  }
}

function isLong(input){
  if (input.length>8){
    return true;
 
  }
}

function hasSpecialChar(input){
  var specialCharacters = ['&','%', '*', '#', '?'];
  for(var i=0;i<input.length;i++){
   for (var j=0; j<specialCharacters.length;j++){
     if(input[i] === specialCharacters[j]){
       return true;
     }
   }
  }
  
}

function isPasswordValid(input){

  if(!hasUpperCase(input)){
    console.log('Invalid password! Needs an uppercase character.');
  }

  if(!hasLowerCase(input)){
    console.log('Invalid password! Needs a lowercase character.');
  }

  if (!isLong(input)){
    console.log('Invalid input: too short.');
  }

  if (!hasSpecialChar(input)){
    console.log('Invalid input: no special character.');
  }
  
  if(hasUpperCase(input) && hasLowerCase(input) && isLong(input) && hasSpecialChar(input)){
    console.log('Valid password!');
  }
}

isPasswordValid('Pokkkkkk?');


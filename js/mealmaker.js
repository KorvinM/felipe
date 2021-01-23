const menu = {
  _courses: {
    appetizers: [],
    mains: [],
    desserts: []
  },
  get courses(){
    return {
      appetizers: this.appetizers,
      mains: this.mains,
      desserts: this.desserts
    }
  },
  addDishToCourse(courseName, dishName, dishPrice){
    const dish = {
      name: dishName,
      price: dishPrice
    };
    this._courses[courseName].push(dish);
    //console.log('dish added',dish);
    //console.log('Courses:', this._courses);
  },
  getRandomDishFromCourse(courseName){
    const dishes = this._courses[courseName];
    const randomIndex = Math.floor(Math.random()* dishes.length);
    return dishes[randomIndex];
  },
  generateRandomMeal: function(){
    const appetizer= this.getRandomDishFromCourse('appetizers');
    //console.log(appetizer);
    const main= this.getRandomDishFromCourse('mains');
    const dessert= this.getRandomDishFromCourse('desserts');
    const totalPrice = appetizer.price+main.price+dessert.price;
    return `Your meal is ${appetizer.name}, ${main.name}, and for dessert ${dessert.name}. The price will be $${totalPrice}`;
  } 
};//end of menu object

menu.addDishToCourse('appetizers', 'Prawn Cocktail', 3);
menu.addDishToCourse('appetizers', 'Green Salad', 2.50);
menu.addDishToCourse('appetizers', 'Egg Fried Rice', 3);
menu.addDishToCourse('mains', 'Beef Stew', 4.99);
menu.addDishToCourse('mains', 'Pasta Carbonara', 4.99);
menu.addDishToCourse('mains', 'Nettle Rissotto', 4.60);
menu.addDishToCourse('desserts', 'Banana Split', 2);
menu.addDishToCourse('desserts', 'Tart', 2.50);
menu.addDishToCourse('desserts', 'Cake', 3);

let meal = menu.generateRandomMeal();

console.log(meal);


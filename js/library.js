class Media {
  constructor(title){
    this._title = title;
    this._isCheckedOut = false;
    this._ratings = [];
  }
  get title(){
    return this._title;
  };
  get isCheckedOut(){
    return this._isCheckedOut;
  };
  get ratings(){
    return this._ratings;
  };
  set isCheckedOut(value){
    this._isCheckedOut = value;
  }
  toggleCheckOutStatus(){
		this.isCheckedOut = !this.isCheckedOut;
  }
  
  getAvarageRating(){
    let ratingsSum = this.ratings.reduce((currentSum, rating) => currentSum + rating, 0);
    let lengthOfRatings = this.ratings.length;
    let ratingsMean = ratingsSum/lengthOfRatings;
    return ratingsMean;
  }
  addRating(rating){
    this.ratings.push(rating);
  }  
} //end of Class Media

class Book extends Media{
  constructor(author,title,pages){
    super(title);
    this._author = author;
    this._pages = pages;
  }
  get author(){
    return this._author;
  }
    get pages(){
    return this._pages;
  }
}

class Movie extends Media{
  constructor(director,title, runTime){
    super(title);
    this._director = director;
    this._runTime = runTime;
  }
  get director(){
    return this._director;
  }
  get runTime(){
    return this._runTime;
  }
}

const historyOfEverything = new Book('Bill Bryson', 'A Short History of Nearly Everything', 544);

historyOfEverything.toggleCheckOutStatus();
console.log(historyOfEverything.isCheckedOut);

historyOfEverything.addRating(4);
historyOfEverything.addRating(5);
historyOfEverything.addRating(5);
console.log(historyOfEverything.getAvarageRating());
const speed = new Movie('Jan de Bont', 'Speed', 116);

speed.toggleCheckOutStatus();
console.log(speed.isCheckedOut);
speed.addRating(1);speed.addRating(1);speed.addRating(5);
console.log(speed.getAvarageRating());

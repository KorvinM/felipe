class School{
  constructor(name,level,numOfStudents){
    this._name = name;
    this._level = level;
    this._numOfStudents = numOfStudents;
  }
  get name(){
    return this._name;
  }
  get level(){
    return this._level;
  }
  get numOfStudents(){
    return this._numOfStudents;    
  }
  quickFacts(){
    console.log(`${this.name} educates ${this.numOfStudents} students at the ${this.level} school level`);
  }
  
  static pickSubstituteTeacher(substituteTeachers){
		let randomTeacher = Math.floor(Math.random()*(substituteTeachers.length-1));
    return substituteTeachers[randomTeacher];
  }
  set numOfStudents(newNumberOfStudents){
    if(typeof newNumOfStudents === 'number'){
      this._numOfStudents = newNumOfStudents;
    }
  }
} //end of School Class

class PrimarySchool extends School{
  constructor(name, numOfStudents, pickupPolicy){
    super(name,'primary',numOfStudents);
    this._pickupPolicy = pickupPolicy;   
  }
  get pickupPolicy(){
    return this._pickupPolicy;
  }
}//end of PrimarySchool Class

class HighSchool extends School{
  constructor(name, numOfStudents, sportsTeams){
		super(name, 'high', numOfStudents);
    this._sportsTeams = sportsTeams;
  }
  get sportsTeams(){
    return this._sportsTeams;
    console.log(sportsTeams);
  }
}

const lorraineHansbury = new PrimarySchool('Lorraine Hansbury', 514, 'Students must be picked up by a parent, guardian, or a family member over the age of 13.');
lorraineHansbury.quickFacts();

School.pickSubstituteTeacher(['Jamal Crawford', 'Lou Williams', 'J. R. Smith', 'James Harden', 'Jason Terry', 'Manu Ginobli']);

const alSmith = new HighSchool('Al E. Smith', 415, ['Baseball', 'Basketball', 'Volleyball', 'Track and Field'] );

console.log(alSmith.sportsTeams);



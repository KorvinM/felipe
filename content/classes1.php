<?php //classes.php
?>

<article id="classes">
  <header>
    <h1>Classes</h1>
  </header>
  <div class="article-content col" style="">
<p>The following is a basic class with a constructor and methods
<pre><code class="language-js">class Surgeon {
  constructor(name, department) {
    this._name = name;
    this._department = department;
    this._remainingVacationDays = 20;
  }
  get name(){
    return this._name;
  }
  get department(){
    return this._department;
  }
    get remainingVacationDays(){
    return this._remainingVacationDays;
  }
  takeVacationDays(daysOff){
    this._remainingVacationDays = this.remainingVacationDays - daysOff;
  }
}//endof Surgeon class

const surgeonCurry = new Surgeon('Curry', 'Cardiovascular');
const surgeonDurant = new Surgeon('Durant', 'Orthopedics');

console.log(surgeonCurry.name);
surgeonCurry.takeVacationDays(3);
console.log(surgeonCurry.remainingVacationDays);
</code></pre>
<div class="col">
<h2>Inheritance</h2>
<img class="c-svg" src="https://s3.amazonaws.com/codecademy-content/courses/learn-javascript-classes/diagrams/inheritance_diagram.svg" alt="">
<pre><code class="language-js">class HospitalEmployee {
  constructor(name) {
    this._name = name;
    this._remainingVacationDays = 20;
  }

  get name() {
    return this._name;
  }

  get remainingVacationDays() {
    return this._remainingVacationDays;
  }

  takeVacationDays(daysOff) {
    this._remainingVacationDays -= daysOff;
  }
  //a static method
  static generatePassword(){
    return Math.floor(Math.random()*10.000);
  }
}

class Nurse extends HospitalEmployee {
  constructor(name, certifications) {
    super(name);
    this._certifications = certifications;
  }
  get certifications(){
    return this._certifications;
  }
  addCertification(newCertification){
    this._certifications.push(newCertification);
  }
}

const nurseOlynyk = new Nurse('Olynyk', ['Trauma','Pediatrics']);
nurseOlynyk.takeVacationDays(5);
console.log(nurseOlynyk.remainingVacationDays);

nurseOlynyk.addCertification('Genetics');
console.log(nurseOlynyk.certifications)
console.log(nurseOlynyk.generatePassword);
</code></pre>
  </div>
</article>
  </div>
</article>

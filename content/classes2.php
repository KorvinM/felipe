<?php //classes2.php
?>

<article>
  <header>
    <h1>Classes 2</h1>
  </header>
  <div class="article-content col">
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

<?php //mealmaker.php
?>

<article>
  <header>
    <h1>Object projects</h1>
  </header>
  <div class="article-content col" style="">
    <div class="column-wrap">
<h2>Mealmaker</h2>
<pre data-src = "js/mealmaker.js"></pre>
</div>
<div class="column-wrap">
<h2>Team stats</h2>
<pre><code>const team= {
  _players: [
    {
  		firstName: 'Korvin',
      lastName: 'M',
      age: 48
  	},
  	{
      firstName: 'James',
      lastName:'Eyre',
      age :29
    },
 	 	{
      firstName: 'Robin',
      lastName: 'Cook',
      age:  66
    }
  ],
  _games: [
    {
      opponent: 'Broncos',
      teamPoints: 34 ,
      opponentPoints: 22
    },
    {
      opponent: 'Harlem Heroes',
      teamPoints: 44,
      opponentPoints: 43
    },
    {
      opponent: 'London Giants',
      teamPoints: 44,
      opponentPoints:66
    }
  ],
  get players(){
    return this._players;
  },
  get games(){
    return this._games;
  },
  addPlayer(firstName, lastName, age){
    let player = {
      firstName: firstName,
      lastName: lastName,
      age: age
    };
    this.players.push(player);
  },
 addGame(opponentName, myPoints, opponentPoints){
    let game = {
      opponent: opponentName,
      teamPoints: myPoints,
      opponentPoints: opponentPoints
    };
    this.games.push(game);
  }
};

team.addPlayer('Steph', 'Curry', 'Age 28');
team.addPlayer('Lisa', 'Leslie', 'Age 44');
team.addPlayer('Bugs', 'Bunny', 'Age 76');
console.log(team._players);
team.addGame('Titans', 100, 100);
console.log(team.games);
</code></pre>
</div>
  </div>
</article>

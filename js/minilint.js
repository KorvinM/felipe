//this file 
let story = 'Last weekend, I took literally the most beautiful bike ride of my life. The route is called "The 9W to Nyack" and it actually stretches all the way from Riverside Park in Manhattan to South Nyack, New Jersey. It\'s really an adventure from beginning to end! It is a 48 mile loop and it basically took me an entire day. I stopped at Riverbank State Park to take some extremely artsy photos. It was a short stop, though, because I had a really long way left to go. After a quick photo op at the very popular Little Red Lighthouse, I began my trek across the George Washington Bridge into New Jersey.  The GW is actually very long - 4,760 feet! I was already very tired by the time I got to the other side.  An hour later, I reached Greenbrook Nature Sanctuary, an extremely beautiful park along the coast of the Hudson.  Something that was very surprising to me was that near the end of the route you actually cross back into New York! At this point, you are very close to the end.';

let overusedWords = ['really', 'very', 'basically'];

let unnecessaryWords = ['extremely', 'literally', 'actually' ];
//split the long string into words by passing in ' ' to the .split method
let storyWords = story.split(' ');
//console.log(storyWords.length);
//console.log(storyWords);


//filter out the unnecessaryWords
let betterWords = storyWords.filter(function(word){
  return !unnecessaryWords.includes(word);
});
//console.log(betterWords);


let reallyCount = 0,
    veryCount = 0,
    basicallyCount = 0,
    overusedCount = 0;

//count the overused words
for (word of betterWords){
  if (word ==='really'){
    reallyCount +=1;
  } else if (word === 'very'){
    veryCount +=1;   
  } else if (word =='basically'){
    basicallyCount +=1;   
  }
}

overusedCount = reallyCount+veryCount+basicallyCount;

//count the number of words by iterating over the array, incrementing our count for each word that ends with '.' or '!'
let sentences = 0;
betterWords.forEach(word => {
  if (word[word.length-1] === '.' || word[word.length-1]==='!'){
    sentences+=1;
  }
});

console.log('Word count after processing: ' + betterWords.length);
console.log('Sentence count: ' + sentences);
console.log('Overused words: ' + overusedCount);

console.log(betterWords.join(' '));

/*ideas to extend/

    For the overused words, remove it every other time it appears.

    Write a function that finds the word that appears the greatest number of times.

    Replaced overused words with something else.
    (or highlight them)
*/

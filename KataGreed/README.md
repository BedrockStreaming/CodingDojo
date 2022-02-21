# kata-greed
Inspired from [CodingDojo.org](https://codingdojo.org/kata/Greed/)

## Goals
* The Greed class must return the correct score according to the rules (see below).
* Start first with a single class with a single method, ie a naive approach.
* Refactor (using multiple classes) to end up with a cyclomatic complexity below 10.

## Workforce & Process
* Estimated time: 4h00
* Goal: Refactoring and splitting code into subclasses
* Alternative: a branch `kata-greed/refacto` exists as base to focus the exercise on the refacto only
* Solution: a branch `kata-greed/solution-valentin-claras` exists as a solution proposal

### Description
In the first 10 minutes, create a branch `kata-greed/team-name-date`, and check that everyone can commit and push.

⚠️ **Make sure that everyone has read this readme and understood the rule with the examples.**

Then take 5 minutes to discuss an initial strategy all together.

Finally, proceed with short iterations as follows:
* ⌨️ One *driver*, who do the coding,
* 🧑‍✈️️ One *pilot*, who gives the coding instruction,
* 📻 One *communicator*, (only when the group is larger thant 4) who talk with the *students*, and the *pilot*,
* 🏫 All other attendees as *students*, who spectate, and discuss the next iteration strategy,

_Randomly set a driver, pilot and communicator for the first step._

Note that the *students* should not talk directly to the *pilot*, and that the *communicator* should not only repeat what students say, but summarize the discussion.

### Steps
1. The *driver* pulls the branch,
2. The *pilot* gives instruction to the *driver*,
3. After 8 minutes, the *driver*, push his/her code,
4. The *communicator* goes back to the *students*,
5. During 5 minutes, everyone talks about the iteration and what the next step should be,
6. The *pilot* becomes the new *communicator*,
7. The *driver* becomes the new *pilot*,
8. One *student* becomes the new *driver*,
9. Go back to step one.

### Conclusion

The exercise stops after 3h, more or less 12 rotations. Then, a retrospective is done:
* Check if `make all` is ok (2 minutes).
* Everyone gives his/her feelings about the exercise. (2 minutes / people).
* Presentation of a possible solution (10 minutes).
* Discuss what can be improved about the exercise.

## Rules
Write a class Greed with a score() method that accepts an array of exactly 6 die values (1 to 6). Scoring rules are based on [the french game 10000](https://fr.wikipedia.org/wiki/10000#Jeu_%C3%A0_6_d%C3%A9s) as follows:

* A single one (100)
* Only two one (200)
* A single five (50)
* Only two five (100)
* Triple ones [1,1,1] (1000)
* Others triple are 100 times the dice value
  * [2,2,2] (200)
  * [3,3,3] (300)
  * [4,4,4] (400)
  * [5,5,5] (500)
  * [6,6,6] (600)
* Fourth dice of the same value multiply the triple score by 2.
* Five dice of the same value multiply the triple score by 4.
* Six dice of the same value multiply the triple score by 10.
* Three Pairs [2,2,3,3,4,4] (800)
* Small straight [1, 2, 3, 4, 5] or [2, 3, 4, 5, 6] (600)
* Straight [1,2,3,4,5,6] (1200)

All rules are exclusive, so dice can only count for one rule. Rules that score using more dice, have a higher priority.

### Example
* [1, 2, 2, 4, 5, 5] should score 200
* [1, 2, 2, 2, 5, 5] should score 400
* [1, 2, 3, 4, 5, 5] should score 650
* [1, 1, 5, 3, 3, 3] should score 550
* [1, 2, 3, 4, 5, 6] should score 1200
* [1, 1, 1, 2, 4, 5] should score 1050
* [1, 1, 1, 3, 5, 5] should score 1100
* [1, 1, 1, 1, 5, 5] should score 2100
* [2, 2, 2, 3, 3, 3] should score 500
* [2, 2, 2, 2, 2, 3] should score 800
* [2, 2, 2, 2, 2, 2] should score 2000
* [1, 1, 2, 2, 5, 5] should score 800

## Kickstart
A basic class and test are already setup. 

A basic console command is also available to play the game, assuming you can roll die.

### Hints
* Focus toward getting the total score first
* Use a design pattern.

### Tools
All tools are described running ```make help```.

To use the app, run ```php console.php```

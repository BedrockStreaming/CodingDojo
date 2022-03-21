# Kata-vista
A fun and random way to try "test driven development".

## Goal
* Update the `\Painter` class so the describe method return a string that match landmarks described by the `./console.php vista:describe` command.

## Workforce & Process
* Estimated time: 2h
* Goal: first approach to TDD and coding dojo.

### Description
In the first 10 minutes, create a branch `kata-vista/team-name-date`, and check that everyone can commit and push.

⚠️ **Make sure that everyone has read this readme and understood the rule with the examples.**

Finally, proceed with short iterations as follows:
* ⌨️ One *driver*, who do the coding,
* 🧑‍✈️️ One *pilot*, who gives the coding instruction,
* 🏫 All other attendees as *spectator*, who watch,

_Randomly set a driver and a pilot for the first step, then the driver should execute the command `./console.php vista:describe`._

Note that the *spectator* should not talk. This kata is intended to have really short iterations.

### Steps
1. The *driver* pulls the branch,
2. The *pilot* gives instruction to the pilot to make the tests pass (with `make all`)
3. Once all tests are ok, the *driver* commit,
4. Then, the *driver* execute the command with the arguments given by the last `vista:describe`,
5. The *pilot* then gives instruction to the *driver* to write a new failing test according to the new description (except in the last iteration),
6. Once the test is written, the *driver* commit and push,
8. The *driver* becomes the new *pilot*,
9. One *student* becomes the new *driver*,
10. Go back to step one.

### Conclusion

The exercise stops after everyone has become driver and pilot twice. In the last iteration, do not write a failing test:
* Check if `make all` is ok (2 minutes).
* Describe your painting using `./console.php vista:paint`.
* Everyone gives his/her feelings about the exercise. (3 minutes / people).
* Discuss what can be improved about the exercise.

## Kickstart
The base framework for the painter is here and tests are already setup.

### Hints
* Do not worry about code quality and architecture.
* Focus on making short iteration.
* You can always visualize your painting with the command `./console.php vista:paint`.

### Tools
All tools are described running ```make help```.

To use the app, run `php console.php vista:describe`

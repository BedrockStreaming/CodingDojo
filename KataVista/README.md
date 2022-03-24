# Kata-vista
A fun and random way to try "test driven development".

## Goal
* This kata aims at working on a first approach to TDD. You should read the [TDD manifesto](https://tddmanifesto.com/) first if you're not familiar with this.
* Update the `\Painter` class so the describe method return a string that match landmarks described.

## Workforce & Process
* Estimated time: 2h
* Goal: first approach to TDD and coding dojo.

### Description
In the first 10 minutes, create a branch `kata-vista/team-name-date`, and check that everyone can commit and push.

⚠️ **Make sure that everyone has read this readme and understood the rule with the goal.**

Finally, proceed with short iterations as follows:
* ⌨️ One *driver*, who do the coding,
* 🧑‍✈️️ One *pilot*, who gives the coding instruction,
* 🏫 All other attendees as *spectator*, who watch,

Note that the *spectator* can talk freely with the driver. This kata is intended to have really short iterations.

### Kickstart
_Randomly set a driver and a pilot for the first step._

You will have to add tests to the `PainterTest` class, then update the `Painter` class so description of the painting match elements that are described.
The painting is composed of 3 landmarks at foreground, 4 landmarks at the middleground, and 5 landmarks in the background.

First, the driver should execute the command `./console.php vista:describe`.
*The command act as a project manager, and will give you new instruction as you go.*
Keep track of the output for the next iteration as you will need the incremental argument list.

Each time a new description is given, you must write a new test, then make it passes.
As you go, you'll get more description, old tests should still be compatible, but new one will be more and more precise.

Alternatively, use the command on a single computer with the `--loop` option.

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
* Everyone gives his/her feelings about the exercise. (2 minutes / people).
* Discuss what can be improved about the exercise.

## Kickstart
The base framework for the painter is here and tests are already setup.

### Hints
* Do not worry about code quality and architecture.
* The kata is all about testing, not building and organizing the classes inside the project.
* Focus on making short iteration.
* You can always visualize your painting with the command `./console.php vista:paint`.
* Do not overthink things when you don't have clear indications about where to go.

### Tools
All tools are described running ```make help```.
To use the app, run `php ./console.php vista:describe`
To test your result, run `php ./console.php vista:paint`
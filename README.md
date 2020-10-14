# Libra Fire

* This mini project is a response to the task.

## Criteria

You have to design a system that is responsible for the managing the grades for a list of
students. You should be able to calculate the average of the grades for a given student,
identify if he has passed or failed and return the student’s statistic.
Each school board can have a different rule to calculate if he has passed or not and which
format (JSON or XML) it returns results.

### Notes:

- A student is registered with only one school board.
- A student can have 1 to 4 grades
- Implement two school boards, CSM and CSMB - CSM considers pass if the average
is bigger or equal to 7 and fail otherwise. Returns JSON format.
- CSMB discards the lowest grade, if you have more than 2 grades, and considers
pass if the average grade of the grades is bigger than 8. Returns XML format.
- Each student result, either XML or JSON, will contain the student id, name, list of
grades, averages and final result (Fail, Pass)
- Entry point of your app should be through HTTP request. If I type:
domain-of-your-app.test/students/1
or
domain-of-your-app.test?student=1
(whatever you want of these two)
It should return report of student with ID of 1 for example, with the fields provided
above.

### Guidelines

1. You must use OOP PHP
2. You must use MySQL and provide the SQL file
3. Use composer loader
4. Please send a GIT repo (github, gitlab, bitbucket) with the code.
5. Make sure the code actually runs. By that, I mean fork a fresh copy of the project
from GIT, run composer install (if needed), import database file (provided in GIT),
and then test the app.6. Provide a clear instructions on how to setup/run the app
7. Don’t have the entire project in one git commit. Have multiple commits for different
changes. It will be even better (but optional) if every small feature has it’s own branch
that is merged back into develop (gitflow)
8. Please use Repository Pattern

# Instruction to install

* Clone repo
* To install dependencies please run "composer install"
* To create a database and tables please run sql script (db.sql).
* Create `php.log` file in `storage` folder to keep tracking the log errors

Enjoy :)
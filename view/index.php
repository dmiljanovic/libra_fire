<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">

        <title>LibraFire Test</title>
    </head>
    <body>
        <div class="container">
            <div class="text-center" style="margin: 20px 0px 20px 0px;">
                <span class="text-secondary">Student Grade Simulator</span>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="/students" class="nav-item nav-link">Students</a>
                    </div>
                </div>
            </nav>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h3>SCHOOL BOARD TEST</h3>
                    <p>
                        You have to design a system that is responsible for the managing the grades for a list of
                        students. You should be able to calculate the average of the grades for a given student,
                        identify if he has passed or failed and return the student’s statistic.
                        Each school board can have a different rule to calculate if he has passed or not and which
                        format (JSON or XML) it return results.
                    </p>
                    <p>Notes:</p>
                    <ul>
                        <li>
                            A student is registered with only one school board.
                        </li>
                        <li>
                            A student can have 1 to 4 grades.
                        </li>
                        <li>
                            Implement two school boards, CSM and CSMB - CSM considers pass if the average
                            is bigger or equal to 7 and fail otherwise. Returns JSON format.
                        </li>
                        <li>
                            CSMB discards the lowest grade, if you have more than 2 grades, and considers
                            pass if the average grade of the grades is bigger than 8. Returns XML format.
                        </li>
                        <li>
                            Each student result, either XML or JSON, will contain the student id, name, list of
                            grades, averages and final result (Fail, Pass).
                        </li>
                        <li>
                            Entry point of your app should be through HTTP request. If I type:
                            <ul>
                                <li>domain-of-your-app.test/students/1</li>
                                or
                                <li>domain-of-your-app.test?student=1</li>
                                (whatever you want of these two)
                                It should return report of student with ID of 1 for example, with the fields provided
                                above.
                            </ul>
                        </li>
                    </ul>
                    <h3>GUIDELINES</h3>
                    <ol>
                        <li>
                            You must use OOP PHP.
                        </li>
                        <li>
                            You must use MySQL and provide the SQL file.
                        </li>
                        <li>
                            Use composer loader.
                        </li>
                        <li>
                            Please send a GIT repo (github, gitlab, bitbucket) with the code.
                        </li>
                        <li>
                            Make sure the code actually runs. By that, I mean fork a fresh copy of the project
                            from GIT, run composer install (if needed), import database file (provided in GIT),
                            and then test the app.
                        </li>
                        <li>
                            Provide a clear instructions on how to setup/run the app.
                        </li>
                        <li>
                            Don’t have the entire project in one git commit. Have multiple commits for different
                            changes. It will be even better (but optional) if every small feature has it’s own branch
                            that is merged back into develop (gitflow).
                        </li>
                        <li>
                            Please use Repository Pattern.
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
        </script>

    </body>
</html>

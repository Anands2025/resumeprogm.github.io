<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        body {
            background-color: ivory;
            font-family: Arial, Helvetica, sans-serif;
        }

        .formtable {
            margin: auto;
            width: 500px;
            margin: 0 auto;
            text-align: left;
        }

        .mheading {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin: 20px;
            padding: 10px;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type=file] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        input[type=date] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div>
        <h2 class="mheading">Enter your details</h2>
        <form method="post" action="bio.php" enctype="multipart/form-data">
            <table class="formtable">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" required></td>
                </tr>
                <tr>
                    <td>D.O.B</td>
                    <td><input type="date" name="dob" required></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea rows="5" name="address" required></textarea></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><select required name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">others</option>
                        </select></td>
                </tr>

                <tr>
                    <td>Highest Education</td>
                    <td><select required name="education">
                            <option value="Highschool">High School</option>
                            <option value="UG">UG</option>
                            <option value="PG">PG</option>
                            <option value="Others">Others</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Course</td>
                    <td><input type="text" name="course" required></td>
                </tr>
                <tr>
                    <td>Graduated year</td>
                    <td><input type="text" name="gyear" required></td>
                </tr>
                <tr>
                    <td>University</td>
                    <td><input type="text" name="university" required></td>
                </tr>
                <tr>
                    <td>Hobbies</td>
                    <td><input type="text" name="hobbies" required></td>
                </tr>
                <tr>
                    <td>Skills</td>
                    <td><input type="text" name="skills" required></td>
                </tr>
                <tr>
                    <td>Languages</td>
                    <td><input type="text" name="language" required></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Submit" name="submit"></td>
                </tr>
        </form>
        </table>
    </div>
</body>

</html>
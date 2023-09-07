<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $education = $_POST['education'];
    $course = $_POST['course'];
    $image=$_FILES['image']['name'];
    $target_dir = "uploads/".$image;
    move_uploaded_file($_FILES['image']['tmp_name'],$target_dir);
    $gyear = $_POST['gyear'];
    $university = $_POST['university'];
    $hob=$_POST['hobbies'];
    $ski=$_POST['skills'];
    $lan=$_POST['language'];
    $hobbies= explode(",",$hob);
    $skills = explode(",", $ski);
    $languages = explode(",",$lan);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FFFAF0; /* Creamy background color */
            color: #333; /* Dark gray text color */
        }

        .header {
            background-color: #007BFF; /* Vibrant blue header background */
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        .footer {
            background-color: #007BFF;
            color: white;
            padding: 10px 0;
            text-align: center;
            bottom: 0;
            width: 100%;
        }

        h2 {
            color: #007BFF; /* Vibrant blue headings color */
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Biodata</h1>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <img src="uploads/<?php echo $image; ?>" class="img-fluid rounded-circle" alt="Profile Image" width="250">
            </div>
            <div class="col-md-6">
                <h2>Personal Details</h2>
                <p><strong>Name:</strong> <?php echo $name; ?></p>
                <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <p><strong>Phone:</strong> <?php echo $phone; ?></p>
                <p><strong>Address:</strong> <?php echo $address; ?></p>
                <!-- Personal details here -->
            </div>
        </div>

        <hr>

        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Educational Details</h2>
                <p><strong>Highest Education:</strong> <?php echo $education; ?></p>
                <p><strong>University:</strong> <?php echo $university; ?></p>
                <p><strong>Course:</strong> <?php echo $course; ?></p>
                <p><strong>Graduation Year:</strong> <?php echo $gyear; ?></p>
                <!-- Educational details here -->
            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Hobbies</h2>
                <ul class="list-unstyled">
                    <?php foreach ($hobbies as $h) { ?>
                        <li><?php echo $h; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Skills</h2>
                <ul class="list-unstyled">
                    <?php foreach ($skills as $s) { ?>
                        <li><?php echo $s; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Languages</h2>
                <ul class="list-unstyled">
                    <?php foreach ($languages as $l) { ?>
                        <li><?php echo $l; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy;<?php echo $name; ?></p>
    </div>
</body>

</html>

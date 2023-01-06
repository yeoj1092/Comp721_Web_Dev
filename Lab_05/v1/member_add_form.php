<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lab05 Task 2 - VIP member Registration System</title>
    <h1>Web Development - Week 05</h1>
    <h2>Task 2: VIP member Registration System</h2>
</head>

<body>
    <h1>Add Data Form</h1>
    <form method="post" action="member_add.php">
        <p> <label for="fname">Enter First Name: </label>
            <input type="text" name="fname" id="fname" />
        </p>
        <p> <label for="lname">Enter Last Name: </label>
            <input type="text" name="lname" id="lname" />
        </p>
        <p> <label for="gender">Enter gender: (M/F) </label>
            <input type="text" name="gender" id="gender" maxlength="1" />
        </p>
        <p> <label for="email">Enter email: </label>
            <input type="text" name="email" id="email" />
        </p>
        <p> <label for="phone">Enter Phone: </label>
            <input type="text" name="phone" id="phone" />
        </p>
        <p> <input type="submit" value="Add Item" /></p>
    </form>

    <p><a href='vip_member.php'>Return to Home</a></p>
</body>

</html>
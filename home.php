<?php //include "db_manager.php"; ?>

<html>
    <header>
        <title>| Home</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </header>
<body>

<h1 align="center">Student Details</h1>

<table align="center" style="margin-top:100px">
    <tr>
        <td>Name</td>
        <td><input type="hidden" id="s_id" name="s_id"></td>
        <td><input type="text" id="txt_name" name="txt_name"></td>
    </tr>
    <tr>
        <td>Course</td>
        <td>&nbsp;</td>
        <td><input type="text" id="txt_course" name="txt_course"></td>
    </tr>
    <tr>
        <td>Birthday</td>
        <td>&nbsp;</td>
        <td><input type="date" id="txt_dof" name="txt_dof"></td>
    </tr>
    <tr>
        <td>Marks</td>
        <td>&nbsp;</td>
        <td><input type="text" id="txt_marks" name="txt_marks"></td>
    </tr>
    <tr>
        <td colspan="3">
            <input type="button" value="Save" onclick="save_details();">
            <input type="button" value="Update" onclick="update_details();">
            <input type="button" value="Delete" onclick="delete_details();">
            <input type="button" value="Report" onclick="report_details();">
            <input type="button" value="search" onclick="search_details();">
        </td>        
    </tr>
    
<table>

</body>

<script type="text/javascript" src="home.js"></script>

</html>






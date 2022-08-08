<html>

<head>
<title>Form Validation</title>

<script src="../js/js.js"></script>

</head>
<body>
		<h1>REGISTRATION FORM</h1>
        <hr>

        <table>
		<form name="RegForm" onsubmit="return validation()" method="post">
			<tr>
                <td>
First Name: 
</td><td>
    <input type="text"  name="FName" />


</td></tr><tr><td>
Last Name: 
</td><td>
    <input type="text"  name="LName" />

</td></tr><tr><td>
			
Age: 
</td><td>
    <input type="text" name="Age" />

    </td></tr><tr><td>


				Designation:
                </td><td>
				<select type="text" value="" name="Degicnation">
					<option>Junior Prgrammer</option>
					<option>Senor Programmer</option>
					<option>Project Lead</option>
				</select>


            </td></tr><tr><td>


				Preferred Language:
                </td><td>
				<select type="text" value="" name="PLang">
					<option>JAVA</option>
					<option>PHP</option>
					<option>C++</option>
				</select>


            </td></tr><tr><td>
			
Email:
</td><td>
     <input type="email" name="EMail" />

     </td></tr><tr><td>
			
Password: 
</td><td>
<input type="text" name="Password" />

                        </td></tr><tr><td>
			
Please chose a file: 
</td><td>
    <input type="file" name="Filename" />

                        </td></tr><tr><td>
			<br>
                        
				<input type="submit"
					value="send" name="Submit" />
				<input type="reset"
					value="Reset" name="Reset" />
                    </td><td>

            </td></tr>

		</form>
</table>
	</body>
</html>
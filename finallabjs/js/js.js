
			function validation() {
				var fname =
					document.forms.RegForm.FName.value;
                var lname =
					document.forms.RegForm.LName.value;
				var email =
					document.forms.RegForm.EMail.value;
				var file =
					document.forms.RegForm.Filename.value;
				var what =
					document.forms.RegForm.Degicnation.value;
                var what2 =
					document.forms.RegForm.PLang.value;
				var password =
					document.forms.RegForm.Password.value;
				var age =
					document.forms.RegForm.Age.value;
				var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; //Javascript reGex for Email Validation.
				var regage=/^\d{10}$/;									 // Javascript reGex for Phone Number validation.
				var regName = /\d+$/g;								 // Javascript reGex for Name validation

				if (fname == "" || regName.test(fname)) {
					window.alert("Please enter your name properly.");
					fname.focus();
					return false;
				}

				if (file == "") {
					window.alert("Please select a file.");
					file.focus();
					return false;
				}
				
				if (email == "" || !regEmail.test(email)) {
					window.alert("Please enter a valid e-mail.");
					email.focus();
					return false;
				}
				
				if (password == "") {
					alert("Please enter your password");
					password.focus();
					return false;
				}

				if(password.length <6){
					alert("Password should be atleast 6 character long");
					password.focus();
					return false;

				}
				if (age == "" || !regage.test(age)) {
					alert("Please enter valid Age.");
					phone.focus();
					return false;
				}

				if (what.selectedIndex == -1) {
					alert("Please enter your Degicnation.");
					what.focus();
					return false;
				}
                if (what2.selectedIndex == -1) {
					alert("Please enter your Prefered Language.");
					what.focus();
					return false;
				}

				return true;
			}


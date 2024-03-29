// // Defining a function to display error message
// function printError(elemId, hintMsg) {
//   document.getElementById(elemId).innerHTML = hintMsg;
// }

// // Defining a function to validate form
// function validateForm() {
//   // Retrieving the values of form elements
//   var name = document.contactForm.name.value;
//   var email = document.contactForm.email.value;
//   var phone = document.contactForm.phone.value;

//   // Defining error variables with a default value
//   var nameErr = (emailErr = mobileErr = true);

//   // Validate name
//   if (name == "") {
//     printError("nameErr", "Please enter your name");
//   } else {
//     var regex = /^[a-zA-Z\s]+$/;
//     if (regex.test(name) === false) {
//       printError("nameErr", "Please enter a valid name");
//     } else {
//       printError("nameErr", "");
//       nameErr = false;
//     }
//   }

//   // Validate email address
//   if (email == "") {
//     printError("emailErr", "Please enter your email address");
//   } else {
//     // Regular expression for basic email validation
//     var regex = /^\S+@\S+\.\S+$/;
//     if (regex.test(email) === false) {
//       printError("emailErr", "Please enter a valid email address");
//     } else {
//       printError("emailErr", "");
//       emailErr = false;
//     }
//   }

//   // Validate mobile number
//   if (phone == "") {
//     printError("mobileErr", "Please enter your mobile number");
//   } else {
//     var regex = /^[1-9]\d{9}$/;
//     if (regex.test(phone) === false) {
//       printError("mobileErr", "Please enter a valid 10 digit mobile number");
//     } else {
//       printError("mobileErr", "");
//       mobileErr = false;
//     }
//   }

//   // Prevent the form from being submitted if there are any errors
//   if ((nameErr || emailErr || mobileErr) == true) {
//     return false;
//   }
//   // Display input data in a dialog box before submitting the form
//   alert(
//     "CONGRATULATIONS!, You have managed to book a technician, we will try to reach you within 10 minitues via a call or message, Keep in touch."
//   );
// }

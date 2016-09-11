<form>
  <label for="mail">I would like you to provide me an e-mail</label>
  <input type="email" id="email" name="email">
  <button>Submit</button>
</form>
     
     <script>
     	
     	var email = document.getElementById("mail");

email.addEventListener("keyup", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("I expect an e-mail, darling!");
  } else {
    email.setCustomValidity("");
  }
});
     </script>
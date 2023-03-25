<script lang="js">
		var contactForm = document.getElementById('contact-form');
contactForm.addEventListener('submit', function(event) {
  // Controlla se il campo dell'email è valido
  var emailInput = contactForm.querySelector('input[type="email"]');
  if (emailInput.validity.valid) {
    // Invia il form se l'email è valida
    return true;
  } else {
    // Altrimenti mostra un messaggio di errore e impedisce l'invio del form
    emailInput.setCustomValidity('Inserisci un indirizzo email valido');
    emailInput.reportValidity();
    event.preventDefault();
    return false;
  }
});
	</script>
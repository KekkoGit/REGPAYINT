<div class="box-container">
         <label for="password">Inserisci la Password: &nbsp; </label>
         <input type="password" name="password" placeholder="Inserisci il tua password" id="password" required="submit">
         <label for="password" id="togglePasswordBtn">
            <img src="img/nonvedo.png" alt="Mostra Password" width="20" height="auto">
         </label>
      </div>
      <script>
         const passwordInput = document.getElementById('password');
         const togglePasswordBtn = document.getElementById('togglePasswordBtn');
         const eyeIcon = togglePasswordBtn.querySelector('img');

         togglePasswordBtn.addEventListener('click', function() {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            eyeIcon.src = type === 'password' ? 'img/nonvedo.png' : 'img/vedo.png';
            eyeIcon.alt = type === 'password' ? 'Mostra Password' : 'Nascondi Password';
         });
      </script>
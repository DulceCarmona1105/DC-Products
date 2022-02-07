<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>
    <link href="{{asset('ccs/iniciar.css')}}" rel="stylesheet">
</head>
<body>
<form action="#login" class="Form">
  <h1 class="Form-title">Login</h1>
  <div class="Form-fields">
      <input type="email"
             id="email"
             class="ControlInput ControlInput--email"
             placeholder=" "
             required
      >
      <label for="email"
             class="Control-label Control-label--email"
      >Correo</label>
      <div class="Control-requirements Control-requirements--email">
        Debe ser un correo válido
      </div>

        <!-- this is here to give power to the :checked css selector -->
        <input type="checkbox"
               id="show-password"
               class="show-password"
        >
    
        <label for="show-password"
               class="Control-label Control-label--showPassword"
        >
          
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32" class="svg-toggle-password" title="Toggle Password Security">
            <title>Hide/Show Password</title>
            <path d="M24,9A23.654,23.654,0,0,0,2,24a23.633,23.633,0,0,0,44,0A23.643,23.643,0,0,0,24,9Zm0,25A10,10,0,1,1,34,24,10,10,0,0,1,24,34Zm0-16a6,6,0,1,0,6,6A6,6,0,0,0,24,18Z"/>
              <rect x="20.133" y="2.117" height="44" transform="translate(23.536 -8.587) rotate(45)" class="closed-eye"/>
              <rect x="22" y="3.984" width="4" height="44" transform="translate(25.403 -9.36) rotate(45)" style="fill:#fff" class="closed-eye"/>
          </svg>
        </label>
    
        <input type="text"
               id="password"
               placeholder=" "
               autocomplete="off"
               autocapitalize="off"
               autocorrect="off"
               required
               pattern=".{6,}"
               class="ControlInput ControlInput--password"
        >

        <label for="password"
               class="Control-label Control-label--password"
        >Contraseña</label>
    
      
      
        <button type="submit" class="Button Form-submit">
          Iniciar sesión
          <svg width='26px' height='26px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="Button-spinner">
              <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
              <circle cx="50" cy="50" r="40" stroke="#fff" fill="none" stroke-width="18" stroke-linecap="round"></circle>
              <circle cx="50" cy="50" r="40" stroke="#e7542b" fill="none" stroke-width="9" stroke-linecap="round" class="spinner"></circle>
          </svg>
        </button>
    
    
  </div>
</form>
</body>
</html>
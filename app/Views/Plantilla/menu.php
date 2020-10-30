<nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/Formacion">Formación<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/Mitologia">Mitología</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Partes
        </a>
        <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url(); ?>/Halo">Halo</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>/Disco">Disco</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>/Bulbo">Bulbo</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
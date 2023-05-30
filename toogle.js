
    let navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    navLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        // Fecha o menu responsivo após um link ser clicado
        var navbarToggler = document.querySelector('.navbar-toggler');
        var navbarCollapse = document.querySelector('.navbar-collapse');

        navbarToggler.classList.add('collapsed');
        navbarCollapse.classList.remove('show');
      })
    });


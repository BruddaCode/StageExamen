document.addEventListener('DOMContentLoaded', function () {
    const dropdownButton = document.getElementById('dropdown-button');
    const navbarCta = document.getElementById('navbar-cta');
    
    function toggleDropdown() {
      navbarCta.classList.toggle('hidden');
    }
    
    dropdownButton.addEventListener('click', toggleDropdown);
    
  });

  
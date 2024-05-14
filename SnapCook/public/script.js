document.addEventListener('DOMContentLoaded', function () {
    const dropdownButton = document.getElementById('dropdown-button');
    const navbarCta = document.getElementById('navbar-cta');
    
    function toggleDropdown() {
      navbarCta.classList.toggle('hidden');
    }
    
    dropdownButton.addEventListener('click', toggleDropdown);
    
  });

  document.getElementById('imageButton').addEventListener('click', function() {
    // Code to handle image insertion or dropping
    // This could involve opening a file dialog or interacting with a file drop area
    // Once the image is selected or dropped, you can insert it into the desired location
  });

  
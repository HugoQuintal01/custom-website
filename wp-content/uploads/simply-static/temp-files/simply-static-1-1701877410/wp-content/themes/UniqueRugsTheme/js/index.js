function loadingAnimation() {
    const coverTransition = document.getElementById("cover-transition-id");

    // Display the loading screen
    coverTransition.style.display = 'flex';

    // Gradually reduce opacity
    function hide() {
        let opacity = 1;

        function fadeOut() {
            opacity -= 0.02; // Adjust the step as needed for smoother or faster fade-out

            if (opacity > 0) {
                // Apply the current opacity
                coverTransition.style.opacity = opacity;

                // Request the next animation frame
                requestAnimationFrame(fadeOut);
            } else {
                // Set display to none when opacity is fully faded
                coverTransition.style.display = 'none';
            }
        }

        // Start the fade-out animation
        fadeOut();
    }

    // Call the hide function after a delay
    setTimeout(hide, 1000);
}

loadingAnimation();


// Menu Animation
/*
document.getElementById('menu-item-01').addEventListener('mouseover', function() {
    document.getElementById('menu-fixed-image-01').style.right = '20%';
});

document.getElementById('menu-item-01').addEventListener('mouseout', function() {
    document.getElementById('menu-fixed-image-01').style.right = '-20%';
});

document.getElementById('menu-item-02').addEventListener('mouseover', function() {
    document.getElementById('menu-fixed-image-02').style.top = '30%';
});

document.getElementById('menu-item-02').addEventListener('mouseout', function() {
    document.getElementById('menu-fixed-image-02').style.top = '-60%';
});

document.getElementById('menu-item-03').addEventListener('mouseover', function() {
    document.getElementById('menu-fixed-image-03').style.top = '40%';
});

document.getElementById('menu-item-03').addEventListener('mouseout', function() {
    document.getElementById('menu-fixed-image-03').style.top = '-60%';
});

document.getElementById('menu-item-04').addEventListener('mouseover', function() {
    document.getElementById('menu-fixed-image-04').style.right = '20%';
});

document.getElementById('menu-item-04').addEventListener('mouseout', function() {
    document.getElementById('menu-fixed-image-04').style.right = '-20%';
});

document.getElementById('menu-item-05').addEventListener('mouseover', function() {
    document.getElementById('menu-fixed-image-05').style.top = '30%';
});

document.getElementById('menu-item-05').addEventListener('mouseout', function() {
    document.getElementById('menu-fixed-image-05').style.top = '-60%';
});
*/

// Optimized Menu
const menuItems = [
    { menuItemId: 'menu-item-01', fixedImageId: 'menu-fixed-image-01', hoverRight: '20%', outRight: '-20%', hoverTop: '', outTop: '' },
    { menuItemId: 'menu-item-02', fixedImageId: 'menu-fixed-image-02', hoverRight: '', outRight: '', hoverTop: '30%', outTop: '-60%' },
    { menuItemId: 'menu-item-03', fixedImageId: 'menu-fixed-image-03', hoverRight: '', outRight: '', hoverTop: '40%', outTop: '-60%' },
    { menuItemId: 'menu-item-04', fixedImageId: 'menu-fixed-image-04', hoverRight: '20%', outRight: '-20%', hoverTop: '', outTop: '' },
    { menuItemId: 'menu-item-05', fixedImageId: 'menu-fixed-image-05', hoverRight: '', outRight: '', hoverTop: '30%', outTop: '-60%' },
  ];
  
  function addMenuHoverEffects(menuItems) {
    menuItems.forEach(item => {
      const menuItem = document.getElementById(item.menuItemId);
      const fixedImage = document.getElementById(item.fixedImageId);
  
      menuItem.addEventListener('mouseover', () => {
        if (item.hoverRight !== '') {
          fixedImage.style.right = item.hoverRight;
        }
  
        if (item.hoverTop !== '') {
          fixedImage.style.top = item.hoverTop;
        }
      });
  
      menuItem.addEventListener('mouseout', () => {
        if (item.outRight !== '') {
          fixedImage.style.right = item.outRight;
        }
  
        if (item.outTop !== '') {
          fixedImage.style.top = item.outTop;
        }
      });
    });
  }
  
addMenuHoverEffects(menuItems);

// Open Menu
document.getElementById('open-menu-button').addEventListener('click', function() {
    document.querySelector('.menu-open').style.top = '0';
    document.querySelector('.home').style.overflow = 'hidden';
});

// Close Menu
document.getElementById('close-menu-button').addEventListener('click', function() {
    document.querySelector('.menu-open').style.top = '-100vh';
    document.querySelector('.home').style.overflow = 'scroll';
});
  
// Update Input user name
document.getElementById('input-user-name').addEventListener('input', function() {
  document.getElementById('user-name').innerText = ' ' + this.value;
});


// Open Contact Popup
document.getElementById('button-open-contact-popup').addEventListener('click', function() {
  document.getElementById('contact-us-popup-id').style.display = 'flex';
  document.querySelector('.home').style.overflow = 'hidden';
});

// Close Contact Popup
document.getElementById('close-button-contact-popup').addEventListener('click', function() {
  document.getElementById('contact-us-popup-id').style.display = 'none';
  document.querySelector('.home').style.overflow = 'scroll';
});
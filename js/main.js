document.addEventListener('DOMContentLoaded', function() {
  var cards = document.querySelectorAll('.container-card .slide-card .card');
  var badges = document.querySelectorAll('.container-card .slide-card .card .badge');
  var preveiwContainer = document.querySelector('.container-popup');
  var previewBox = preveiwContainer.querySelectorAll('.popup-card');

  cards.forEach(function(card, index) {
    var delayTimer;

    card.addEventListener('mouseover', function() {
      clearTimeout(delayTimer);
      badges[index].style.visibility = 'hidden';
    });

    card.addEventListener('mouseout', function() {
      delayTimer = setTimeout(function() {
        badges[index].style.visibility = 'visible';
      }, 500);
    });

    card.addEventListener('click', function() {
      var name = card.getAttribute('data-name');
      showPreview(name);
    });
  });

  function showPreview(name) {
    preveiwContainer.style.display = 'flex';
    previewBox.forEach(function(preview) {
      var target = preview.getAttribute('data-target');
      if (name == target) {
        preview.classList.add('active');
      } else {
        preview.classList.remove('active');
      }
    });
  }

  previewBox.forEach(function(close) {
    close.querySelector('.fa-times').onclick = function() {
      close.classList.remove('active');
      preveiwContainer.style.display = 'none';
    };
  });
});

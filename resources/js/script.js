document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.login-btn, .cek-pesanan-btn, .pesan-btn').forEach(button => {
      button.addEventListener('click', event => {
          event.preventDefault();
          document.querySelector('.popup').classList.add('active');
          document.querySelector('.overlay').classList.add('active');
      });
  });

  document.querySelector('.overlay').addEventListener('click', () => {
      document.querySelector('.popup').classList.remove('active');
      document.querySelector('.overlay').classList.remove('active');
  });
});

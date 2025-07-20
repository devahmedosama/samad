const buttons = document.querySelectorAll('.carsol');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove active class
    buttons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');

    const targetId = button.dataset.target;
    document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
  });
});


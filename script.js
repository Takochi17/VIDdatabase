const nextButton = document.getElementById('nextButton');
const page1 = document.getElementById('page1');
const page2 = document.getElementById('page2');

nextButton.addEventListener('click', () => {
    page1.style.display = 'none';
    page2.style.display = 'block';
  });
const historyLinks = document.querySelectorAll('.history');

const historySection = document.getElementById('history');

function scrollToHistorySection(event) {
  event.preventDefault(); // Prevent the default anchor behavior
  historySection.scrollIntoView({
    behavior: 'smooth'
  });
}

historyLinks.forEach(link => {
  link.addEventListener('click', scrollToHistorySection);
});



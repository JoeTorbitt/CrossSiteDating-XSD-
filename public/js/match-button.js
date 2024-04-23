document.addEventListener('DOMContentLoaded', function() {
  const matchButtons = document.querySelectorAll('.match-button');

  matchButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      const daterId = button.dataset.daterId;

      // Send a request to the server to match the dater
      fetch(`/match/${daterId}`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      })
      .then(response => response.json())
      .then(data => {
        // Remove the dater from the daters page
        const daterElement = document.querySelector(`[data-dater-id="${daterId}"]`);
        daterElement.remove();

        // Add the dater to the matches page
        const matchesPage = document.querySelector('#matches-page');
        const matchElement = createMatchElement(data.match);
        matchesPage.appendChild(matchElement);
      });
    });
  });
});

function createMatchElement(match) {
  const matchElement = document.createElement('div');
  matchElement.classList.add('match');

  const nameElement = document.createElement('h2');
  nameElement.textContent = match.dater.name;
  matchElement.appendChild(nameElement);

  const ageElement = document.createElement('p');
  ageElement.textContent = `Age: ${match.dater.age}`;
  matchElement.appendChild(ageElement);

  const locationElement = document.createElement('p');
  locationElement.textContent = `Location: ${match.dater.location}`;
  matchElement.appendChild(locationElement);

  return matchElement;
}
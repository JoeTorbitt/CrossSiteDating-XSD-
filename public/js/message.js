document.addEventListener('DOMContentLoaded', function() {
  var messageFormContainer = document.getElementById('message-form-container');

  document.querySelectorAll('.message-button').forEach(function(button) {
    button.addEventListener('click', function() {
      var daterId = button.getAttribute('data-dater-id');

      // Create the form elements
      var messageForm = document.createElement('form');
      messageForm.id = 'message-form';
      messageForm.method = 'post';
      messageForm.action = '/messages';

      var messageInput = document.createElement('input');
      messageInput.type = 'text';
      messageInput.name = 'message';
      messageInput.placeholder = 'Type your message here...';

      var messageSubmit = document.createElement('input');
      messageSubmit.type = 'submit';
      messageSubmit.value = 'Send';

      // Append the form elements
      messageForm.appendChild(messageInput);
      messageForm.appendChild(messageSubmit);

      // Add the form to the container
      messageFormContainer.innerHTML = '';
      messageFormContainer.appendChild(messageForm);

      // Focus the message input field
      messageInput.focus();
    });
  });
});
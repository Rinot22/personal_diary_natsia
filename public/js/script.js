function registerUser() {
  // Get data
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  // Transfer data
  fetch('http://localhost:3000/register', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ username, password }),
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      alert('Registration successful!');
    } else {
      alert('Unfortunately registration failed. Please try again.');
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
}
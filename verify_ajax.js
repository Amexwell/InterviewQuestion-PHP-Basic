document
  .getElementById("usernameForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form from submitting the default way

    var username = document.getElementById("username").value.trim();
    var messageDiv = document.getElementById("message");

    // Check if input is empty
    if (username === "") {
      messageDiv.innerHTML =
        "<span style='color: red;'>Error: Please enter a username</span>";
      return;
    }

    // Create AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "info.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Handle response
    xhr.onload = function () {
      if (xhr.status === 200) {
        messageDiv.innerHTML = xhr.responseText; // Output the response from info.php
      } else {
        messageDiv.innerHTML =
          "<span style='color: red;'>Error: An error occurred</span>";
      }
    };

    // Send data
    xhr.send("username=" + encodeURIComponent(username));
  });

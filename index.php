<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" />
</head>
<body>
<section class="section">
    <h1 class="title">User Registration</h1>
    <h2 class="subtitle">
        This is the IPT10 PHP Quiz Web Application Laboratory Activity. Please register
    </h2>
    <form method="POST" action="instructions.php">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" type="text" name="complete_name" id="complete_name" placeholder="Complete Name">
            </div>
        </div>

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" name="email" id="email" type="email" />
            </div>
        </div>

        <div class="field">
            <label class="label">Birthdate</label>
            <div class="control">
                <input class="input" name="birthdate" type="date" />
            </div>
        </div>

        <div class="field">
            <label class="label">Contact Number</label>
            <div class="control">
                <input class="input" name="contact_number" type="number" />
            </div>
        </div>

        <button type="submit" class="button is-link" id="next-button" disabled>Proceed Next</button>
    </form>
</section>

<script>
var nameInput = document.getElementById('complete_name');
var emailInput = document.getElementById('email');
var nextButton = document.getElementById('next-button');
var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

function validateForm() {
    var isValid = nameInput.value.trim() !== '' && emailPattern.test(emailInput.value);
    nextButton.disabled = !isValid;
}

nameInput.addEventListener('input', validateForm);
emailInput.addEventListener('input', validateForm);
</script>
</body>
</html>

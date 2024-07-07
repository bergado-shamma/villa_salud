async function handleSignup(event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);

    const response = await fetch('sign_up_db_connection.php', {
        method: 'POST',
        body: formData
    });

    const result = await response.json();

    if (result.success) {
        alert(result.message);
        window.location = '../works/log_in.php';
    } else {
        alert(result.message);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.form');
    form.addEventListener('submit', handleSignup);
});

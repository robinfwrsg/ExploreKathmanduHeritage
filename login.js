// Mobile menu toggle (kept for consistency, though not functional)
document.querySelector('.menu-toggle').addEventListener('click', () => {
    // No action needed since nav-links are hidden
});

document.querySelector('.menu-toggle').addEventListener('touchstart', (e) => {
    e.preventDefault();
    // No action needed
});

// Form toggle between Login and Sign Up
const loginBtn = document.getElementById('login-btn');
const signupBtn = document.getElementById('signup-btn');
const loginForm = document.getElementById('login-form');
const signupForm = document.getElementById('signup-form');

loginBtn.addEventListener('click', () => {
    loginBtn.classList.add('active');
    signupBtn.classList.remove('active');
    loginForm.classList.add('active');
    signupForm.classList.remove('active');
});

signupBtn.addEventListener('click', () => {
    signupBtn.classList.add('active');
    loginBtn.classList.remove('active');
    signupForm.classList.add('active');
    loginForm.classList.remove('active');
});

// Client-side authentication simulation with redirect
const users = JSON.parse(localStorage.getItem('users')) || [];

loginForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const username = loginForm.querySelector('input[name="username"]').value;
    const password = loginForm.querySelector('input[name="password"]').value;

    const user = users.find(u => u.username === username && u.password === password);
    if (user) {
        localStorage.setItem('isLoggedIn', 'true');
        window.location.replace('kathmanduheritage.html');
    } else {
        alert('Invalid username or password.');
    }
});

signupForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const username = signupForm.querySelector('input[name="username"]').value;
    const email = signupForm.querySelector('input[name="email"]').value;
    const password = signupForm.querySelector('input[name="password"]').value;
    const confirmPassword = signupForm.querySelector('input[name="confirm-password"]').value;

    if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
    }

    if (users.some(u => u.username === username)) {
        alert('Username already exists.');
        return;
    }

    users.push({ username, email, password });
    localStorage.setItem('users', JSON.stringify(users));
    localStorage.setItem('isLoggedIn', 'true');
    window.location.replace('kathmanduheritage.html');
});

// Redirect to login page if not logged in
if (!localStorage.getItem('isLoggedIn')) {
    window.location.replace('login.html');
}

document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('theme-toggle');
    const label = document.getElementById('theme-label');
    
    // Carregar tema salvo
    if (localStorage.theme === 'dark') {
        document.documentElement.classList.add('dark');
        label.textContent = '🌙 Escuro';
    }
    
    // Toggle do tema
    toggle.addEventListener('click', function() {
        const isDark = document.documentElement.classList.toggle('dark');
        
        if (isDark) {
            localStorage.theme = 'dark';
            label.textContent = '🌙 Escuro';
        } else {
            localStorage.theme = 'light';
            label.textContent = '☀️ Claro';
        }
    });
});
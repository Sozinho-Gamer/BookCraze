document.getElementById('menu-toggle').addEventListener('click', function(event) {
    event.preventDefault();
    var menu = document.getElementById('menu');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }
});
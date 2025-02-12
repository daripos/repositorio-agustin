

document.addEventListener('DOMContentLoaded', () => {
    const answers = document.querySelectorAll('.answer');
    answers.forEach(answer => {
        answer.addEventListener('click', () => {
            alert(`Has seleccionado: ${answer.textContent}`);
        });
    });
});


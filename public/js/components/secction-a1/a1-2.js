

    document.addEventListener('DOMContentLoaded', function() {
        // Animaciones al cargar
        const elementsToAnimate = document.querySelectorAll('#leccion-a2 .animate-fadeIn, #leccion-a2 .animate-slideInLeft, #leccion-a2 .animate-slideInRight');
        elementsToAnimate.forEach((el, index) => {
            setTimeout(() => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0) translateX(0)';
            }, 100 * (index + 1));
        });

        // Mostrar vocabulario
        const classroomObjectsSpan = document.getElementById('classroom-objects');
        const dailyObjectsSpan = document.getElementById('daily-objects');

        if (classroomObjectsSpan) {
            classroomObjectsSpan.addEventListener('click', function() {
                alert('Cosas en un salón de clases: Pen (bolígrafo), pencil (lápiz), notebook (cuaderno), chair (silla), table (mesa)');
            });
        }

        if (dailyObjectsSpan) {
            dailyObjectsSpan.addEventListener('click', function() {
                alert('Objetos cotidianos: Phone (teléfono), bag (bolso), key (llave), cup (taza)');
            });
        }

        // Verificar ejercicio de artículos
        const checkArticleButtons = document.querySelectorAll('.check-article');
        checkArticleButtons.forEach(button => {
            button.addEventListener('click', function() {
                const userAnswer = this.previousElementSibling.textContent.trim().split(' ')[0].toLowerCase();
                const correctAnswer = this.dataset.answer;
                const resultSpan = this.nextElementSibling;
                const incorrectSpan = this.nextElementSibling.nextElementSibling;

                if (userAnswer === correctAnswer) {
                    resultSpan.classList.remove('hidden');
                    incorrectSpan.classList.add('hidden');
                } else {
                    resultSpan.classList.add('hidden');
                    incorrectSpan.classList.remove('hidden');
                }
            });
        });

        // Verificar ejercicio de plurales
        const checkPluralButtons = document.querySelectorAll('.check-plural');
        checkPluralButtons.forEach(button => {
            button.addEventListener('click', function() {
                const inputField = this.previousElementSibling;
                const userAnswer = inputField.value.trim().toLowerCase();
                const correctAnswer = this.dataset.answer;
                const correctSpan = this.nextElementSibling;
                const incorrectSpan = this.nextElementSibling.nextElementSibling;

                if (userAnswer === correctAnswer) {
                    correctSpan.classList.remove('hidden');
                    incorrectSpan.classList.add('hidden');
                } else {
                    correctSpan.classList.add('hidden');
                    incorrectSpan.classList.remove('hidden');
                }
            });
        });

        // Simulación de práctica de "What is this/that?"
        const practiceWhatButton = document.getElementById('practice-what');
        if (practiceWhatButton) {
            practiceWhatButton.addEventListener('click', function() {
                alert('¡Comencemos a practicar! (Imagina que ves diferentes objetos y respondes)');
                // Aquí se podría implementar una interfaz interactiva con imágenes de objetos
            });
        }

        // Simulación de escuchar pronunciación
        const listenDifferenceButton = document.querySelector('#leccion-a2 .bg-white:nth-child(2) button');
        if (listenDifferenceButton) {
            listenDifferenceButton.addEventListener('click', function() {
                alert('Reproduciendo la diferencia entre la pronunciación de "pen" y "pan"...');
                // Aquí se integraría la lógica para reproducir audio
            });
        }
    });

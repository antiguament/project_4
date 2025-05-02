<section id="improved-numbers-age" class="bg-gradient-to-br from-[#ffb74d] to-[#ff9800] py-16 md:py-24 lg:py-32 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <!-- Encabezado animado -->
        <div class="text-center mb-16">
            <div class="inline-block relative">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#e65100] mb-4 animate-float">
                    <span class="block">Numbers & Age</span>
                    <span class="text-2xl md:text-3xl font-medium text-white bg-[#ef6c00] px-6 py-2 rounded-full inline-block mt-4 shadow-lg">Interactive Learning</span>
                </h1>
                <div class="absolute -bottom-4 left-0 right-0 h-4 bg-[#fb8c00] rounded-full mx-auto animate-wave" style="width: 200px;"></div>
            </div>
        </div>

        <!-- Sección de Juegos -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <!-- Juego 1: Memory de Números Corregido -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 transform transition-all hover:scale-[1.02] hover:shadow-3xl animate-fadeInUp">
                <div class="flex items-center mb-6">
                    <div class="bg-[#ef6c00] p-3 rounded-xl mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-[#e65100]">Number Memory Game</h2>
                </div>
                
                <p class="text-[#ef6c00] mb-6">Match the numbers with their English words!</p>
                
                <div class="grid grid-cols-4 gap-3" id="number-memory-game">
                    <!-- Las tarjetas se generarán con JavaScript -->
                </div>
                
                <div class="mt-6 flex justify-between items-center">
                    <span id="memory-score" class="text-[#e65100] font-medium">Matches: 0/8</span>
                    <button id="reset-memory" class="bg-[#fb8c00] hover:bg-[#e65100] text-white font-medium py-2 px-4 rounded-lg transition-all">
                        Reset Game
                    </button>
                </div>
            </div>
            
            <!-- Nuevo Juego 2: Age Guessing Challenge -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 transform transition-all hover:scale-[1.02] hover:shadow-3xl animate-fadeInUp" style="animation-delay: 0.2s">
                <div class="flex items-center mb-6">
                    <div class="bg-[#fb8c00] p-3 rounded-xl mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-[#e65100]">Age Guessing Challenge</h2>
                </div>
                
                <p class="text-[#ef6c00] mb-6">Listen to the age and select the correct number!</p>
                
                <div class="bg-[#fff3e0] p-4 rounded-lg border-2 border-[#fb8c00] mb-4">
                    <div class="flex justify-center mb-4">
                        <button id="play-age" class="bg-[#e65100] hover:bg-[#bf360c] text-white font-medium py-2 px-4 rounded-full flex items-center transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15.536a5 5 0 001.414 1.414m2.828-9.9a9 9 0 012.728-2.728" />
                            </svg>
                            Play Age
                        </button>
                    </div>
                    <p id="age-question" class="text-center text-[#e65100] font-medium text-lg mb-4">Press the button to hear an age</p>
                </div>
                
                <div class="grid grid-cols-3 gap-3" id="age-options">
                    <!-- Las opciones se generarán con JavaScript -->
                </div>
                
                <div class="mt-4 text-center">
                    <p id="age-feedback" class="text-[#e65100] font-medium"></p>
                    <p id="age-counter" class="text-sm text-[#fb8c00] mt-2">Correct: 0 | Incorrect: 0</p>
                </div>
            </div>
        </div>

        <!-- Sección de Aprendizaje (igual que antes) -->
        <!-- ... -->
    </div>
</section>

<style>
    /* Estilos para el juego de memoria corregido */
    .memory-card {
        background-color: #fff3e0;
        border: 2px solid #fb8c00;
        border-radius: 0.5rem;
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        color: transparent;
        text-align: center;
        padding: 0.5rem;
        position: relative;
        transform-style: preserve-3d;
    }
    
    .memory-card::before, .memory-card::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .memory-card::before {
        background-color: #fff3e0;
        color: #e65100;
        content: '?';
    }
    
    .memory-card::after {
        background-color: #fb8c00;
        color: white;
        transform: rotateY(180deg);
    }
    
    .memory-card.flipped {
        transform: rotateY(180deg);
    }
    
    .memory-card.flipped::after {
        content: attr(data-content);
    }
    
    .memory-card.matched {
        background-color: #4caf50;
        border-color: #2e7d32;
    }
    
    .memory-card.matched::after {
        background-color: #4caf50;
    }
    
    /* Estilos para el nuevo juego de edad */
    .age-option {
        background-color: #fff3e0;
        border: 2px solid #fb8c00;
        border-radius: 0.5rem;
        padding: 1rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease;
        font-weight: 600;
        color: #e65100;
    }
    
    .age-option:hover {
        background-color: #ffe0b2;
    }
    
    .age-option.selected {
        background-color: #fb8c00;
        color: white;
    }
    
    .age-option.correct {
        background-color: #4caf50;
        color: white;
        border-color: #2e7d32;
    }
    
    .age-option.incorrect {
        background-color: #f44336;
        color: white;
        border-color: #c62828;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Datos para el juego de memoria corregido
        const numbersMemory = [
            { number: 7, word: "Seven" },
            { number: 12, word: "Twelve" },
            { number: 20, word: "Twenty" },
            { number: 35, word: "Thirty-five" },
            { number: 8, word: "Eight" },
            { number: 15, word: "Fifteen" },
            { number: 50, word: "Fifty" },
            { number: 100, word: "One hundred" }
        ];
        
        // Variables para el juego de memoria
        let memoryCards = [];
        let flippedCards = [];
        let matches = 0;
        
        // Inicializar el juego de memoria corregido
        function initMemoryGame() {
            const gameContainer = document.getElementById('number-memory-game');
            gameContainer.innerHTML = '';
            flippedCards = [];
            matches = 0;
            document.getElementById('memory-score').textContent = 'Matches: 0/8';
            
            // Duplicar y mezclar las tarjetas
            memoryCards = [];
            numbersMemory.forEach(item => {
                memoryCards.push({ type: 'number', content: item.number, pair: item.word });
                memoryCards.push({ type: 'word', content: item.word, pair: item.number });
            });
            
            // Mezclar las tarjetas
            memoryCards.sort(() => Math.random() - 0.5);
            
            // Crear las tarjetas en el DOM
            memoryCards.forEach((card, index) => {
                const cardElement = document.createElement('div');
                cardElement.className = 'memory-card';
                cardElement.dataset.index = index;
                cardElement.dataset.content = card.content;
                cardElement.dataset.pair = card.pair;
                
                cardElement.addEventListener('click', flipCard);
                gameContainer.appendChild(cardElement);
            });
        }
        
        // Voltear una tarjeta (versión corregida)
        function flipCard(event) {
            const card = event.currentTarget;
            
            // No hacer nada si la tarjeta ya está volteada o emparejada
            if (card.classList.contains('flipped') || flippedCards.length >= 2) {
                return;
            }
            
            // Voltear la tarjeta
            card.classList.add('flipped');
            flippedCards.push(card);
            
            // Comprobar si hay dos tarjetas volteadas
            if (flippedCards.length === 2) {
                const [firstCard, secondCard] = flippedCards;
                
                // Comprobar si son pareja
                if (firstCard.dataset.content === secondCard.dataset.pair || 
                    firstCard.dataset.pair === secondCard.dataset.content) {
                    // Pareja correcta
                    firstCard.classList.add('matched');
                    secondCard.classList.add('matched');
                    matches++;
                    document.getElementById('memory-score').textContent = `Matches: ${matches}/8`;
                    flippedCards = [];
                    
                    // Comprobar si se ha completado el juego
                    if (matches === 8) {
                        setTimeout(() => {
                            alert('🎉 Congratulations! You matched all numbers!');
                        }, 500);
                    }
                } else {
                    // Pareja incorrecta - voltear de nuevo después de un breve retraso
                    setTimeout(() => {
                        firstCard.classList.remove('flipped');
                        secondCard.classList.remove('flipped');
                        flippedCards = [];
                    }, 1000);
                }
            }
        }
        
        // Nuevo Juego: Age Guessing Challenge
        let currentAge = 0;
        let correctAnswers = 0;
        let incorrectAnswers = 0;
        
        // Inicializar el juego de adivinar edad
        function initAgeGame() {
            document.getElementById('age-feedback').textContent = '';
            document.getElementById('age-question').textContent = 'Press the button to hear an age';
            updateAgeCounter();
            
            // Generar opciones iniciales
            generateAgeOptions();
        }
        
        // Generar opciones para el juego de edad
        function generateAgeOptions() {
            const optionsContainer = document.getElementById('age-options');
            optionsContainer.innerHTML = '';
            
            // Generar una edad aleatoria entre 5 y 100
            currentAge = Math.floor(Math.random() * 96) + 5;
            
            // Generar 3 opciones (1 correcta y 2 incorrectas)
            const options = [currentAge];
            while (options.length < 3) {
                const randomOption = Math.floor(Math.random() * 96) + 5;
                if (!options.includes(randomOption) && Math.abs(randomOption - currentAge) > 5) {
                    options.push(randomOption);
                }
            }
            
            // Mezclar las opciones
            options.sort(() => Math.random() - 0.5);
            
            // Crear los botones de opción
            options.forEach(option => {
                const optionElement = document.createElement('div');
                optionElement.className = 'age-option';
                optionElement.textContent = option;
                
                optionElement.addEventListener('click', function() {
                    checkAgeAnswer(option);
                });
                
                optionsContainer.appendChild(optionElement);
            });
        }
        
        // Verificar la respuesta en el juego de edad
        function checkAgeAnswer(selectedAge) {
            const options = document.querySelectorAll('.age-option');
            const feedback = document.getElementById('age-feedback');
            
            options.forEach(option => {
                const optionAge = parseInt(option.textContent);
                option.classList.remove('selected', 'correct', 'incorrect');
                
                if (optionAge === currentAge) {
                    option.classList.add('correct');
                } else if (optionAge === selectedAge && selectedAge !== currentAge) {
                    option.classList.add('incorrect');
                }
                
                // Deshabilitar clics adicionales
                option.style.pointerEvents = 'none';
            });
            
            if (selectedAge === currentAge) {
                feedback.textContent = '✅ Correct! Well done!';
                feedback.style.color = '#4caf50';
                correctAnswers++;
            } else {
                feedback.textContent = `❌ Incorrect! The correct age was ${currentAge}`;
                feedback.style.color = '#f44336';
                incorrectAnswers++;
            }
            
            updateAgeCounter();
            
            // Habilitar botón para siguiente pregunta
            document.getElementById('play-age').disabled = false;
        }
        
        // Actualizar el contador de aciertos/errores
        function updateAgeCounter() {
            document.getElementById('age-counter').textContent = 
                `Correct: ${correctAnswers} | Incorrect: ${incorrectAnswers}`;
        }
        
        // Configurar el botón "Play Age"
        document.getElementById('play-age').addEventListener('click', function() {
            this.disabled = true;
            document.getElementById('age-question').textContent = `How old is this person?`;
            
            // Simular audio (en un caso real, sería un audio pregrabado)
            setTimeout(() => {
                // En una implementación real, aquí se reproduciría el audio diciendo la edad
                // Por ahora simulamos con texto
                document.getElementById('age-feedback').textContent = '';
                
                // Habilitar las opciones
                const options = document.querySelectorAll('.age-option');
                options.forEach(option => {
                    option.style.pointerEvents = 'auto';
                });
            }, 1000);
        });
        
        // Botón para reiniciar el juego de memoria
        document.getElementById('reset-memory').addEventListener('click', initMemoryGame);
        
        // Inicializar los juegos
        initMemoryGame();
        initAgeGame();
    });
</script>





<section id="leccion-a2" class="bg-[#ffe0b2] py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#a0346e] mb-4 animate-fadeIn">
                Lección 2: Artículos, Sustantivos y Preguntas Básicas
            </h2>
            <p class="text-lg text-[#6d165a] animate-fadeIn" style="animation-delay: 0.2s;">
                Dominando los artículos, el vocabulario esencial y las primeras preguntas.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-md p-6 animate-slideInLeft" style="animation-delay: 0.4s;">
                <h3 class="text-xl font-semibold text-[#ec5c8d] mb-4">1. Artículos Definidos e Indefinidos (A / AN / THE)</h3>
                <div class="mb-4">
                    <p class="text-[#a0346e]"><strong class="text-[#6d165a]">"A"</strong> → Usado antes de palabras que comienzan con sonido de consonante:</p>
                    <ul class="list-disc list-inside text-[#a0346e]">
                        <li>A book, a cat, a university <span class="text-sm italic">(suena como "yuniversity")</span></li>
                    </ul>
                </div>
                <div class="mb-4">
                    <p class="text-[#a0346e]"><strong class="text-[#6d165a]">"AN"</strong> → Usado antes de palabras que comienzan con sonido de vocal (a, e, i, o, u):</p>
                    <ul class="list-disc list-inside text-[#a0346e]">
                        <li>An apple, an hour <span class="text-sm italic">(la "h" es muda)</span></li>
                    </ul>
                </div>
                <div>
                    <p class="text-[#a0346e]"><strong class="text-[#6d165a]">"THE"</strong> → Para cosas específicas o ya mencionadas:</p>
                    <ul class="list-disc list-inside text-[#a0346e]">
                        <li>The sun, the book (that we talked about)</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <label for="article-exercise" class="block text-sm font-medium text-[#6d165a]">Ejercicio rápido:</label>
                    <p class="text-[#a0346e]">___ elephant is big. <button data-answer="an" class="check-article bg-[#ff8c91] hover:bg-[#ec5c8d] text-white font-semibold py-1 px-2 rounded-full text-xs transition duration-300 ease-in-out">Verificar</button> <span class="result-article text-green-500 font-semibold hidden">¡Correcto!</span><span class="result-article text-red-500 font-semibold hidden">Incorrecto</span></p>
                    <p class="text-[#a0346e]">I have ___ book. <button data-answer="a" class="check-article bg-[#ff8c91] hover:bg-[#ec5c8d] text-white font-semibold py-1 px-2 rounded-full text-xs transition duration-300 ease-in-out">Verificar</button> <span class="result-article text-green-500 font-semibold hidden">¡Correcto!</span><span class="result-article text-red-500 font-semibold hidden">Incorrecto</span></p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 animate-slideInRight" style="animation-delay: 0.6s;">
                <h3 class="text-xl font-semibold text-[#ec5c8d] mb-4">2. Sustantivos Básicos (Objetos Comunes)</h3>
                <div class="mb-4">
                    <h4 class="text-lg font-semibold text-[#a0346e] mb-2">📚 Vocabulario esencial:</h4>
                    <p class="text-[#a0346e]"><strong class="text-[#6d165a]">Cosas en un salón de clases:</strong> <span id="classroom-objects" class="cursor-pointer hover:underline">Mostrar</span></p>
                    <p class="text-[#a0346e]"><strong class="text-[#6d165a]">Objetos cotidianos:</strong> <span id="daily-objects" class="cursor-pointer hover:underline">Mostrar</span></p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-[#a0346e] mb-2">🔊 Pronunciación:</h4>
                    <p class="text-[#a0346e]">Enfatizar la diferencia entre <strong class="text-[#6d165a]">"pen"</strong> (bolígrafo) y <strong class="text-[#6d165a]">"pan"</strong> (sartén).</p>
                    <button class="mt-2 bg-[#ff8c91] hover:bg-[#ec5c8d] text-white font-semibold py-2 px-4 rounded-full transition duration-300 ease-in-out">
                        Escuchar diferencia
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 animate-slideInLeft" style="animation-delay: 0.8s;">
                <h3 class="text-xl font-semibold text-[#ec5c8d] mb-4">3. Preguntas con "WHAT" y "THIS/THAT"</h3>
                <p class="text-[#a0346e]"><strong class="text-[#6d165a]">"What is this?"</strong> → ¿Qué es esto? (cerca)</p>
                <p class="text-[#a0346e]"><strong class="text-[#6d165a]">"What is that?"</strong> → ¿Qué es eso? (lejos)</p>
                <div class="mt-4">
                    <h4 class="text-lg font-semibold text-[#a0346e] mb-2">✅ Ejemplo de diálogo:</h4>
                    <p class="text-[#a0346e]"><strong class="text-[#6d165a]">A:</strong> What is this?</p>
                    <p class="text-[#a0346e]"><strong class="text-[#6d165a]">B:</strong> This is a notebook.</p>
                    <p class="text-[#a0346e]"><strong class="text-[#6d165a]">A:</strong> And what is that? <span class="italic">(señalando algo lejos)</span></p>
                    <p class="text-[#a0346e]"><strong class="text-[#6d165a]">B:</strong> That is a pen.</p>
                    <button id="practice-what" class="mt-4 bg-[#ff8c91] hover:bg-[#ec5c8d] text-white font-semibold py-2 px-4 rounded-full transition duration-300 ease-in-out">
                        Practicar preguntas
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 animate-slideInRight" style="animation-delay: 1.0s;">
                <h3 class="text-xl font-semibold text-[#ec5c8d] mb-4">4. Plurales Básicos</h3>
                <p class="text-[#a0346e]"><strong class="text-[#6d165a]">+s:</strong> Book → Books</p>
                <p class="text-[#a0346e]"><strong class="text-[#6d165a]">+es</strong> (si termina en -s, -sh, -ch, -x, -o):</p>
                <ul class="list-disc list-inside text-[#a0346e]">
                    <li>Box → Boxes</li>
                    <li>Watch → Watches</li>
                </ul>
                <p class="text-[#a0346e]"><strong class="text-[#6d165a]">Excepciones:</strong></p>
                <ul class="list-disc list-inside text-[#a0346e]">
                    <li>Child → Children</li>
                    <li>Man → Men</li>
                </ul>
                <div class="mt-4">
                    <label for="plural-exercise" class="block text-sm font-medium text-[#6d165a]">Ejercicio:</label>
                    <p class="text-[#a0346e]">I have two ___ (book). <input type="text" data-answer="books" class="plural-input mt-1 p-1 border rounded-md w-1/2 text-[#a0346e]"><button class="check-plural bg-[#ff8c91] hover:bg-[#ec5c8d] text-white font-semibold py-1 px-2 rounded-full text-xs transition duration-300 ease-in-out">Verificar</button><span class="result-plural text-green-500 font-semibold hidden">¡Correcto!</span><span class="result-plural text-red-500 font-semibold hidden">Incorrecto</span></p>
                    <p class="text-[#a0346e]">She has three ___ (box). <input type="text" data-answer="boxes" class="plural-input mt-1 p-1 border rounded-md w-1/2 text-[#a0346e]"><button class="check-plural bg-[#ff8c91] hover:bg-[#ec5c8d] text-white font-semibold py-1 px-2 rounded-full text-xs transition duration-300 ease-in-out">Verificar</button><span class="result-plural text-green-500 font-semibold hidden">¡Correcto!</span><span class="result-plural text-red-500 font-semibold hidden">Incorrecto</span></p>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center animate-fadeIn" style="animation-delay: 1.2s;">
            <h3 class="text-xl font-semibold text-[#ec5c8d] mb-4">🎯 Objetivos de la Lección</h3>
            <ul class="list-check list-inside text-[#a0346e]">
                <li>✔ Aprender a usar a/an/the correctamente.</li>
                <li>✔ Identificar objetos comunes y nombrarlos en singular/plural.</li>
                <li>✔ Formular preguntas simples con "What is this/that?".</li>
                <li>✔ Practicar pronunciación de palabras clave.</li>
            </ul>
        </div>

        <div class="mt-8 text-center animate-fadeIn" style="animation-delay: 1.4s;">
            <h3 class="text-xl font-semibold text-[#ec5c8d] mb-4">📌 Actividad Propuesta (Práctica Adicional)</h3>
            <p class="text-[#a0346e]">¡Prepárate para la actividad "What's in the bag?" en nuestra próxima clase!</p>
            <p class="text-[#a0346e]">Mientras tanto, completa el ejercicio escrito para reforzar lo aprendido.</p>
        </div>
    </div>

    <div class="absolute top-0 left-0 w-32 h-32 bg-[#ec5c8d] rounded-full opacity-10 -translate-x-16 -translate-y-16"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-[#a0346e] rounded-full opacity-10 translate-x-32 translate-y-32"></div>



    {{-- Enlace al archivo CSS específico del componente --}}
    <link rel="stylesheet" href="{{ asset('css/components/secction-a1/a1-2.css') }}">

    {{-- Enlace al archivo JavaScript específico del componente (si es necesario) --}}
    <script src="{{ asset('js/components/secction-a1/a1-2.js') }}"></script>


</section>


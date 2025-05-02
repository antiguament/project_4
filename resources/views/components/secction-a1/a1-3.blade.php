<section id="articles" class="bg-gradient-to-br from-[#dcedc8] to-[#aed581] py-16 md:py-24 lg:py-32 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-12 md:mb-0">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#558b2f] mb-6 animate-fadeInLeft" style="animation-delay: 0.2s;">
                    Los Artículos en Inglés: A, An, The 📚
                </h2>
                <p class="text-lg md:text-xl text-[#689f38] mb-8 animate-fadeInLeft" style="animation-delay: 0.4s;">
                    En esta lección, aprenderemos a usar los artículos "a", "an" y "the" en inglés. ¡Son pequeñas palabras con grandes reglas!
                </p>
                <div class="space-y-6 animate-fadeInLeft" style="animation-delay: 0.6s;">
                    <div>
                        <h3 class="text-xl font-semibold text-[#8bc34a] mb-2">El Artículo Indefinido: "A"</h3>
                        <p class="text-[#558b2f] mb-2">Usamos "a" antes de sustantivos singulares que comienzan con un sonido de consonante.</p>
                        <ul class="list-disc list-inside text-[#689f38]">
                            <li><span class="font-bold">a</span> book (un libro)</li>
                            <li><span class="font-bold">a</span> cat (un gato)</li>
                            <li><span class="font-bold">a</span> table (una mesa)</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-[#8bc34a] mb-2">El Artículo Indefinido: "An"</h3>
                        <p class="text-[#558b2f] mb-2">Usamos "an" antes de sustantivos singulares que comienzan con un sonido de vocal.</p>
                        <ul class="list-disc list-inside text-[#689f38]">
                            <li><span class="font-bold">an</span> apple (una manzana)</li>
                            <li><span class="font-bold">an</span> elephant (un elefante)</li>
                            <li><span class="font-bold">an</span> hour (una hora) <span class="text-sm italic">(la "h" es muda)</span></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-[#8bc34a] mb-2">El Artículo Definido: "The"</h3>
                        <p class="text-[#558b2f] mb-2">Usamos "the" cuando hablamos de algo específico o algo que ya hemos mencionado.</p>
                        <ul class="list-disc list-inside text-[#689f38]">
                            <li><span class="font-bold">the</span> book (el libro / la libro - un libro específico)</li>
                            <li><span class="font-bold">the</span> sun (el sol - solo hay uno)</li>
                            <li>This is <span class="font-bold">a</span> book. <span class="font-bold">The</span> book is blue. (Este es un libro. El libro es azul.)</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-[#8bc34a] mb-2">Frase Clave:</h3>
                        <p class="text-[#558b2f]"><span class="font-bold">"This is a book. The book is blue."</span></p>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 flex justify-center animate-fadeInRight" style="animation-delay: 0.5s;">
                <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXJ0aWNsZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Libros apilados" class="rounded-lg shadow-lg max-w-md">
            </div>
        </div>

        <div class="mt-16 bg-white rounded-lg shadow-md p-8 animate-fadeInUp" style="animation-delay: 0.8s;">
            <h2 class="text-2xl font-semibold text-[#558b2f] mb-6 text-center">¡Practiquemos!</h2>
            <p class="text-lg text-[#689f38] text-center mb-4">Completa las siguientes oraciones con "a", "an" o "the":</p>
            <ul class="list-none space-y-2 text-[#558b2f]">
                <li class="font-semibold">___ cat is sleeping.</li>
                <li class="font-semibold">I have ___ apple.</li>
                <li class="font-semibold">Look at ___ moon!</li>
            </ul>
            <p class="mt-4 text-sm text-gray-500 text-center">(Respuestas: The, an, the)</p>
        </div>
    </div>

    <div class="absolute top-0 left-0 w-40 h-40 bg-[#8bc34a] rounded-full opacity-10 -translate-x-20 -translate-y-20"></div>
    <div class="absolute bottom-0 right-0 w-60 h-60 bg-[#689f38] rounded-full opacity-10 translate-x-32 translate-y-32"></div>
</section>

<style>
    /* Estilos para las animaciones */
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInLeft {
        animation: fadeInLeft 0.6s ease-out forwards;
    }

    .animate-fadeInRight {
        animation: fadeInRight 0.6s ease-out forwards;
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease-out forwards;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInLeft', 'animate-fadeInRight', 'animate-fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('#articles [class*="animate-"]').forEach(el => {
            observer.observe(el);
        });
    });
</script>















<section id="leccion-a3" class="bg-[#c8e6c9] py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#388e3c] mb-4 animate-fadeIn">
                Lección 3: Verbos Básicos, Posesión y Gustos
            </h2>
            <p class="text-lg text-[#558b2f] animate-fadeIn" style="animation-delay: 0.2s;">
                Explorando acciones cotidianas, posesión simple y expresando lo que nos gusta.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md p-6 animate-slideInLeft" style="animation-delay: 0.4s;">
                <h3 class="text-xl font-semibold text-[#81c784] mb-4">1. Verbos Básicos (Acciones Cotidianas)</h3>
                <div class="mb-4">
                    <h4 class="text-lg font-semibold text-[#558b2f] mb-2">🟢 Para niños:</h4>
                    <p class="text-[#558b2f]"><strong class="text-[#388e3c]">I like...</strong> (Me gusta...) → <span class="example-text">I like <span class="font-bold text-[#81c784]">ice cream!</span></span></p>
                    <p class="text-[#558b2f]"><strong class="text-[#388e3c]">I have...</strong> (Tengo...) → <span class="example-text">I have <span class="font-bold text-[#81c784]">a toy!</span></span></p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-[#558b2f] mb-2">🟣 Para adultos:</h4>
                    <p class="text-[#558b2f]"><strong class="text-[#388e3c]">I need...</strong> (Necesito...) → <span class="example-text">I need <span class="font-bold text-[#81c784]">a pen.</span></span></p>
                    <p class="text-[#558b2f]"><strong class="text-[#388e3c]">I want...</strong> (Quiero...) → <span class="example-text">I want <span class="font-bold text-[#81c784]">coffee.</span></span></p>
                </div>
                <div class="mt-4">
                    <h4 class="text-lg font-semibold text-[#558b2f] mb-2">📝 Vocabulario ilustrado:</h4>
                    <div class="flex flex-wrap gap-2 text-[#558b2f]">
                        <span class="bg-[#e8f5e9] py-1 px-2 rounded-full text-sm"><span role="img" aria-label="niño">👶</span> Apple</span>
                        <span class="bg-[#e8f5e9] py-1 px-2 rounded-full text-sm"><span role="img" aria-label="café">☕</span> Coffee</span>
                        <span class="bg-[#e8f5e9] py-1 px-2 rounded-full text-sm"><span role="img" aria-label="juguete">🎮</span> Toy</span>
                        <span class="bg-[#e8f5e9] py-1 px-2 rounded-full text-sm"><span role="img" aria-label="adulto">🧑</span> Notebook</span>
                        <span class="bg-[#e8f5e9] py-1 px-2 rounded-full text-sm"><span role="img" aria-label="perro">🐶</span> Dog</span>
                        <span class="bg-[#e8f5e9] py-1 px-2 rounded-full text-sm"><span role="img" aria-label="coche">🚗</span> Car</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 animate-slideInRight" style="animation-delay: 0.6s;">
                <h3 class="text-xl font-semibold text-[#81c784] mb-4">2. Posesión: "MY / YOUR"</h3>
                <p class="text-[#558b2f]"><strong class="text-[#388e3c]">My</strong> name is... (Mi nombre es...)</p>
                <p class="text-[#558b2f]"><strong class="text-[#388e3c]">Your</strong> turn! (¡Tu turno!)</p>
                <div class="mt-4">
                    <h4 class="text-lg font-semibold text-[#558b2f] mb-2">🎤 Diálogo práctico:</h4>
                    <p class="text-[#558b2f]"><strong class="text-[#388e3c]">A:</strong> What is <span class="font-bold text-[#81c784]">your</span> name?</p>
                    <p class="text-[#558b2f]"><strong class="text-[#388e3c]">B:</strong> <span class="font-bold text-[#81c784]">My</span> name is Carlos.</p>
                    <div class="mt-4">
                        <label for="my-name" class="block text-sm font-medium text-[#388e3c]">Di tu nombre:</label>
                        <input type="text" id="my-name" class="mt-1 p-2 border rounded-md w-full text-[#558b2f]" placeholder="Escribe tu nombre">
                        <button id="say-my-name" class="mt-2 bg-[#81c784] hover:bg-[#66bb6a] text-white font-semibold py-2 px-4 rounded-full transition duration-300 ease-in-out">
                            ¡Dilo!
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 animate-slideInUp" style="animation-delay: 0.8s;">
                <h3 class="text-xl font-semibold text-[#81c784] mb-4">3. Gustos: "LIKE / DON’T LIKE"</h3>
                <p class="text-[#558b2f]"><strong class="text-[#388e3c]">I like pizza!</strong> <span role="img" aria-label="cara feliz">😊</span></p>
                <p class="text-[#558b2f]"><strong class="text-[#388e3c]">I don’t like spiders!</strong> <span role="img" aria-label="cara de miedo">😨</span></p>
                <div class="mt-4">
                    <h4 class="text-lg font-semibold text-[#558b2f] mb-2">🖍️ Ejercicio para niños:</h4>
                    <div class="flex gap-4">
                        <div class="flex items-center">
                            <span class="text-[#558b2f]">Pizza:</span>
                            <button class="like-button ml-2 text-xl">😊</button>
                            <button class="dislike-button ml-1 text-xl">😞</button>
                        </div>
                        <div class="flex items-center">
                            <span class="text-[#558b2f]">Spider:</span>
                            <button class="like-button ml-2 text-xl">😊</button>
                            <button class="dislike-button ml-1 text-xl">😞</button>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h4 class="text-lg font-semibold text-[#558b2f] mb-2">📋 Ejercicio para adultos:</h4>
                    <label for="likes" class="block text-sm font-medium text-[#388e3c]">3 cosas que me gustan:</label>
                    <textarea id="likes" class="mt-1 p-2 border rounded-md w-full text-[#558b2f]" rows="2"></textarea>
                    <label for="dislikes" class="block mt-2 text-sm font-medium text-[#388e3c]">3 cosas que no me gustan:</label>
                    <textarea id="dislikes" class="mt-1 p-2 border rounded-md w-full text-[#558b2f]" rows="2"></textarea>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center animate-fadeIn" style="animation-delay: 1.0s;">
            <h3 class="text-xl font-semibold text-[#81c784] mb-4">🎯 Actividades y Ejercicios</h3>
            <p class="text-[#558b2f]">¡Prepárense para el juego interactivo "Like or Dislike?" en clase!</p>
            <p class="text-[#558b2f]">Los adultos practicarán la actividad "Find Your Match" para conocer los gustos de sus compañeros.</p>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-md p-6 animate-slideInUp" style="animation-delay: 1.2s;">
            <h3 class="text-xl font-semibold text-[#81c784] mb-4">📝 Ejercicio Escrito (Para Todos)</h3>
            <p class="text-[#558b2f]">Completa las siguientes frases:</p>
            <p class="text-[#558b2f]">I <input type="text" data-answer="have" class="written-exercise border-b border-[#81c784] w-24 text-center" placeholder="____"> a book. <button data-input="0" class="check-written bg-[#81c784] hover:bg-[#66bb6a] text-white font-semibold py-1 px-2 rounded-full text-xs transition duration-300 ease-in-out">Verificar</button><span class="result-written text-green-500 font-semibold hidden">¡Correcto!</span><span class="result-written text-red-500 font-semibold hidden">Incorrecto</span></p>
            <p class="text-[#558b2f]"><input type="text" data-answer="Do" class="written-exercise border-b border-[#81c784] w-16 text-center" placeholder="____"> you like chocolate? <button data-input="1" class="check-written bg-[#81c784] hover:bg-[#66bb6a] text-white font-semibold py-1 px-2 rounded-full text-xs transition duration-300 ease-in-out">Verificar</button><span class="result-written text-green-500 font-semibold hidden">¡Correcto!</span><span class="result-written text-red-500 font-semibold hidden">¡Incorrecto!</span></p>
            <p class="text-[#558b2f]">This is <input type="text" data-answer="my" class="written-exercise border-b border-[#81c784] w-20 text-center" placeholder="____"> pencil. <button data-input="2" class="check-written bg-[#81c784] hover:bg-[#66bb6a] text-white font-semibold py-1 px-2 rounded-full text-xs transition duration-300 ease-in-out">Verificar</button><span class="result-written text-green-500 font-semibold hidden">¡Correcto!</span><span class="result-written text-red-500 font-semibold hidden">¡Incorrecto!</span></p>
        </div>
    </div>

    <div class="absolute top-0 left-0 w-24 h-24 bg-[#81c784] rounded-full opacity-10 -translate-x-12 -translate-y-12"></div>
    <div class="absolute bottom-0 right-0 w-48 h-48 bg-[#558b2f] rounded-full opacity-10 translate-x-24 translate-y-24"></div>
</section>

<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInLeft {
        from { opacity: 0; transform: translateX(-20px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes slideInRight {
        from { opacity: 0; transform: translateX(20px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes slideInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fadeIn {
        animation: fadeIn 0.6s ease-out forwards;
    }

    .animate-slideInLeft {
        animation: slideInLeft 0.6s ease-out forwards;
    }

    .animate-slideInRight {
        animation: slideInRight 0.6s ease-out forwards;
    }

    .animate-slideInUp {
        animation: slideInUp 0.6s ease-out forwards;
    }

    .example-text {
        font-style: italic;
        display: block;
        margin-top: 0.5em;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animaciones al cargar
        const elementsToAnimate = document.querySelectorAll('#leccion-a3 .animate-fadeIn, #leccion-a3 .animate-slideInLeft, #leccion-a3 .animate-slideInRight, #leccion-a3 .animate-slideInUp');
        elementsToAnimate.forEach((el, index) => {
            setTimeout(() => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0) translateX(0)';
            }, 100 * (index + 1));
        });

        // Botón de "¡Dilo!" para el nombre
        const sayMyNameButton = document.getElementById('say-my-name');
        const myNameInput = document.getElementById('my-name');

        if (sayMyNameButton && myNameInput) {
            sayMyNameButton.addEventListener('click', function() {
                const name = myNameInput.value.trim();
                if (name) {
                    alert(`¡Hola, ${name}!`);
                } else {
                    alert('Por favor, escribe tu nombre.');
                }
            });
        }

        // Lógica para el ejercicio de gustos para niños
        const likeButtons = document.querySelectorAll('.like-button');
        const dislikeButtons = document.querySelectorAll('.dislike-button');

        likeButtons.forEach(button => {
            button.addEventListener('click', function() {
                alert(`¡Te gusta! 😊`);
            });
        });

        dislikeButtons.forEach(button => {
            button.addEventListener('click', function() {
                alert(`¡No te gusta! 😞`);
            });
        });

        // Lógica para el ejercicio escrito
        const checkWrittenButtons = document.querySelectorAll('.check-written');
        checkWrittenButtons.forEach(button => {
            button.addEventListener('click', function() {
                const inputIndex = parseInt(this.dataset.input);
                const inputField = document.querySelectorAll('.written-exercise')[inputIndex];
                const userAnswer = inputField.value.trim().toLowerCase();
                const correctAnswer = inputField.dataset.answer.toLowerCase();
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
    });
</script>
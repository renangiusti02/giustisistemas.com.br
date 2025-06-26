// Importações
import 'bootstrap'; // bootstrap + popper
import $ from 'jquery';
window.$ = $;
window.jQuery = $;

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

import AOS from 'aos';
import 'aos/dist/aos.css';

// Funções auxiliares (do seu main.js)
const select = (el, all = false) => {
    el = el.trim();
    if (all) {
        return [...document.querySelectorAll(el)];
    } else {
        return document.querySelector(el);
    }
};

const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
        if (all) {
            selectEl.forEach(e => e.addEventListener(type, listener));
        } else {
            selectEl.addEventListener(type, listener);
        }
    }
};

const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener);
};

window.addEventListener('load', () => {
    // AOS
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
        disable: 'mobile',
        offset: 100,
    });

    // Navbar links active state on scroll
    let navbarlinks = select('#navbarNav .nav-link', true);
    const navbarlinksActive = () => {
        let position = window.scrollY + 200;
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return;
            let section = select(navbarlink.hash);
            if (!section) return;
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active');
            } else {
                navbarlink.classList.remove('active');
            }
        });
    };
    navbarlinksActive();
    onscroll(document, navbarlinksActive);

    // Scroll com offset
    const scrollto = (el) => {
        let header = select('#header');
        let offset = header.offsetHeight;
        let elementPos = select(el).offsetTop;
        window.scrollTo({
            top: elementPos - offset,
            behavior: 'smooth'
        });
    };

    // Toggle .header-scrolled
    let selectHeader = select('#header');
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add('header-scrolled');
            } else {
                selectHeader.classList.remove('header-scrolled');
            }
        };
        headerScrolled();
        window.addEventListener('scroll', headerScrolled);
    }

    // Back to top button
    let backtotop = select('.back-to-top');
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active');
            } else {
                backtotop.classList.remove('active');
            }
        };
        toggleBacktotop();
        window.addEventListener('scroll', toggleBacktotop);
    }

    // Mobile nav toggle
    const navbarToggler = select('.navbar-toggler');
    const navbarCollapse = select('#navbarNav');

    // Close mobile menu ao clicar nav-link
    let navLinks = select('#navbarNav .nav-link', true);
    navLinks.forEach(navLink => {
        navLink.addEventListener('click', () => {
            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
            }
        });
    });

    // Fechar menu ao clicar fora
    document.addEventListener('click', function(e) {
        if (!navbarCollapse.contains(e.target) && !navbarToggler.contains(e.target)) {
            navbarCollapse.classList.remove('show');
        }
    });

    // Scroll com offset para links .scrollto
    on('click', '.scrollto', function(e) {
        if (select(this.hash)) {
            e.preventDefault();
            scrollto(this.hash);
        }
    }, true);

    // Scroll ao carregar página com hash
    if (window.location.hash) {
        if (select(window.location.hash)) {
            scrollto(window.location.hash);
        }
    }

    // Inicia Swiper testimonials
    new Swiper('.testimonials-slider', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        }
    });

    // Validação formulário contato (se existir)
    function isValidEmail(email) {
        return /\S+@\S+\.\S+/.test(email);
    }

    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            let contactFormMessages = contactForm.querySelector("#contact-form-messages");
            let errorMessage = contactForm.querySelector("#error-message");
            let sentMessage = contactForm.querySelector("#sent-message");
            let loadingMessage = contactForm.querySelector("#loading");

            contactFormMessages.classList.remove("d-none");
            errorMessage.style.display = "none";
            sentMessage.style.display = "none";
            loadingMessage.style.display = "block";

            let fullName = contactForm.querySelector("#fullName").value.trim();
            let email = contactForm.querySelector("#email").value.trim();
            let phone = contactForm.querySelector("#phone").value.trim();
            let message = contactForm.querySelector("#message").value.trim();

            if (!fullName || !email || !phone || !message) {
                alert("Por favor, preencha todos os campos.");
                loadingMessage.style.display = "none";
                errorMessage.style.display = "block";
                return;
            }

            if (!isValidEmail(email)) {
                alert("Por favor, digite um email válido.");
                loadingMessage.style.display = "none";
                errorMessage.style.display = "block";
                return;
            }

            if (window.location.hostname !== '127.0.0.1' && window.location.hostname !== 'localhost') {
                grecaptcha.ready(function() {
                    grecaptcha.execute('6Lf1e1knAAAAAAgFvHDWXqOjWrwdIZl5i_450n3G', {action: 'submit'}).then(function(token) {
                        contactForm.querySelector("#g-recaptcha-response").value = token;
                        sendForm(contactForm, loadingMessage, errorMessage, sentMessage);
                    });
                });
            } else {
                sendForm(contactForm, loadingMessage, errorMessage, sentMessage);
            }
        });
    }

    function sendForm(contactForm, loadingMessage, errorMessage, sentMessage) {
        let formData = new FormData(contactForm);

        fetch("/contact", {
            method: 'POST',
            body: formData,
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(response => {
            loadingMessage.style.display = "none";
            if (!response.ok) return response.json().then(err => Promise.reject(err));
            return response.json();
        })
        .then(data => {
            sentMessage.style.display = "block";
            sentMessage.textContent = data.message || "Mensagem enviada.";
            contactForm.reset();

            let newToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            document.querySelector('input[name="_token"]').value = newToken;
        })
        .catch(error => {
            errorMessage.style.display = "block";
            if (error.errors) {
                errorMessage.textContent = Object.values(error.errors).flat().join(' ');
            } else if (error.message) {
                errorMessage.textContent = error.message;
            } else {
                errorMessage.textContent = "Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
            }
        });
    }

});

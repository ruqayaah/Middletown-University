const form1 = document.getElementById('form1');
const form2 = document.getElementById('form2');
const form3 = document.getElementById('form3');
const formHeader1 = document.getElementById('form1-header');
const formHeader2 = document.getElementById('form2-header');
const formHeader3 = document.getElementById('form3-header');
const nextButton1 = document.getElementById('next-button1');
const nextButton2 = document.getElementById('next-button2');
const prevButton2 = document.getElementById('prev-button2');
const prevButton3 = document.getElementById('prev-button3');
const submitBtn = document.getElementById('submitBtn');

// form2.style.display = 'none';
const tabs = [form1, form2, form3];
const header = [formHeader1, formHeader2, formHeader3];
let i = 0;

function next(event) {
    event.preventDefault();
    // tabs[i].toggleAttribute('display', true);
    // tabs[i + 1].toggleAttribute('display', true);
    tabs[i].style.display = 'none';
    tabs[i + 1].style.display = 'block';
    header[i].classList.remove('blue-border');
    header[i + 1].classList.add('blue-border');
    i++;
}


function prev(event) {
    event.preventDefault();
    // tabs[i].toggleAttribute('display', true);
    // tabs[i + 1].toggleAttribute('display', true);
    tabs[i].style.display = 'none';
    tabs[i - 1].style.display = 'block';
    header[i].classList.remove('blue-border');
    header[i - 1].classList.add('blue-border');
    i--;
}

nextButton1.addEventListener('click', next);
nextButton2.addEventListener('click', next);
prevButton2.addEventListener('click', prev);
prevButton3.addEventListener('click', prev);
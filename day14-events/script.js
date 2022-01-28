const timeout_id = setTimeout(() => {

    console.log('time elapsed');

}, 5000);

let counter_value = 0;

const interval_id = setInterval(() => {

    console.log('A second elapsed');
    document.querySelector('.counter').innerHTML = ++counter_value;

}, 1000);


document.querySelector('.stop-timeout').addEventListener('click', () => {

    clearTimeout(timeout_id);

})

document.querySelector('.stop-interval').addEventListener('click', () => {

    clearInterval(interval_id);

})
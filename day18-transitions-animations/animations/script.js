document.querySelector('.change-box-button').addEventListener('click', () => {
    // document.querySelector('.box').classList.toggle('changed');


    const element = document.querySelector('.box');

    let i = 0;

    const moveBox = () => {
        i += 2;
        element.style.left = i + 'px';

        if (i < 200) {
            setTimeout(moveBox, 20);
        }
    }

    moveBox();

})
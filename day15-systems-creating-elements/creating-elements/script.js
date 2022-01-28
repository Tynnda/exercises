let counter = 0;

document.querySelector('.add-list-item').addEventListener('click', () => {
    // const new_li_html = '<li>New list item</li>';

    // document.querySelector('.list').innerHTML += new_li_html;


    const new_li = document.createElement('li');
    new_li.className = 'new-list-item';
    new_li.innerText = 'List item ' + ++counter;

    const list = document.querySelector('.list');
    const remove_button = document.querySelector('.remove-list-item');

    // list.appendChild(new_li);
    // list.insertBefore(new_li, remove_button);

    list.insertBefore(new_li, list.firstChild);

    setTimeout(() => {
        list.appendChild(new_li);
    }, 2000);

    // const all_lis = list.querySelectorAll('li');

    new_li.addEventListener('click', () => {
        // list.insertBefore(new_li, list.firstChild);

        new_li.parentNode.removeChild(new_li);
    })

    console.log(new_li);
})

document.querySelector('.remove-list-item').addEventListener('click', () => {

    const li = document.querySelector('.list li')

    // deleting the li
    li.parentNode.removeChild(li);

})

let list = null;

document.querySelector('.remove-list').addEventListener('click', (event) => {

    console.log(event.target);

    list = document.querySelector('.list');

    list.parentNode.removeChild(list);

    console.log(list);
})

document.querySelector('.return-list').addEventListener('click', () => {

    document.body.appendChild(list);

})


const elementFromHTML = (html) => {
    const div = document.createElement('div');
    div.innerHTML = html;
    return div.firstChild;
}

const new_element_html = `<div class="product">
<h2 class="product__name">Product name</h2>
<p class="product__text"></p>
</div>`;

const new_element = elementFromHTML(new_element_html);
console.log(new_element);

document.body.appendChild(new_element);

document.body.appendChild(elementFromHTML('<div class="foo">Foo element</div>'));


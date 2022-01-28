document.querySelector('.pretty-checkbox').addEventListener('click', () => {

    const pretty_checkbox = document.querySelector('.pretty-checkbox');

    pretty_checkbox.classList.toggle('pretty-checkbox--on');

    const old_checkbox = pretty_checkbox.querySelector('input[type="checkbox"]');

    if (pretty_checkbox.classList.contains('pretty-checkbox--on')) {
        old_checkbox.checked = true;
    } else {
        old_checkbox.checked = false;
    }

})


// initializePrettyCheckboxes();
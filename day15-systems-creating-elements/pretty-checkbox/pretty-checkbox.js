/**
 * take one old-school checkbox and turn it
 * into a pretty one
 */
 const makeIntoPrettyCheckbox = (checkbox) => {

    // state of the system:
    let checked = null;
    let outer_div = null;

    /**
     * creates HTML around a checkbox
     */
    const createHTML = () => {
        // create the  <div class="pretty-checkbox">
        outer_div = document.createElement('div');
        outer_div.className = 'pretty-checkbox';

        // insert the <div class="pretty-checkbox">
        // before the checkbox we intend to replace
        checkbox.parentNode.insertBefore(outer_div, checkbox);

        // move the checkbox inside the <div class="pretty-checkbox">
        outer_div.appendChild(checkbox);

        // create the <div class="pretty-checkbox__widget">
        const widget = document.createElement('div');
        widget.className = 'pretty-checkbox__widget';

        // create the <div class="pretty-checkbox__bullet">
        const bullet = document.createElement('div');
        bullet.className = 'pretty-checkbox__bullet';

        // put the bullet into the widget
        widget.appendChild(bullet);

        // put the widget into the <div class="pretty-checkbox">
        outer_div.appendChild(widget);

        // hide the old checkbox
        checkbox.style.display = 'none';
    }

    /**
     * reflects the state of checkbox in the state
     * of this widget
     */
    const reflectCheckboxState = () => {

        checked = checkbox.checked; // true if checkbox checked
                                    // false if not

        if (checked) {
            outer_div.classList.add('pretty-checkbox--on');
        } else {
            outer_div.classList.remove('pretty-checkbox--on');
        }

    }

    /**
     * activates the widget so that it responds
     * to clicking
     */
    const activate = () => {
        outer_div.addEventListener('click', () => {

            if (checked) {
                checkbox.checked = false;
                outer_div.classList.remove('pretty-checkbox--on');
            } else {
                checkbox.checked = true;
                outer_div.classList.add('pretty-checkbox--on');
            }

            checked = !checked;

        })
    }

    createHTML();
    reflectCheckboxState();
    activate();
}
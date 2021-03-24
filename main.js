import Themer from '@barelyreaper/themer';

/*
 * @param options { trigger elementRef / queryString }
 */
new Themer({ trigger: document.querySelector('#themeToggleButton') })
    // or
new Themer({ trigger: document.getElementById('themeToggleButton') })
    // or
new Themer({ trigger: '#themeToggleButton' })
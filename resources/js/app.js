window.Vue = require('vue');

Vue.component('ToolBox', require('./components/ToolBox.vue'));


if (document.getElementById('filterTools')) {
    const filterTools = new Vue({
        el: '#filterTools',
        data: {
            filterBy: ''
        }
    });
}

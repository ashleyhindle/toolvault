window.Vue = require('vue');

Vue.component('ToolBox', require('./components/ToolBox.vue'));

const filterTools = new Vue({
    el: '#filterTools',
    data: {
        filterBy: ''
    }
});

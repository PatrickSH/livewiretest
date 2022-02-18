require('./bootstrap');

// CommonJS
const Swal = require('sweetalert2')

window.addEventListener('swal',function(e){
    Swal.fire(e.detail);
});

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

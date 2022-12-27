window.axios = require('axios');

// window.axios.interceptors.response.use(
//     response => {
//         APP.$Progress.finish();
//         if ( response.data.notification ) {
//             toastr.remove();
//             toastr[ response.data.notification.type ]( response.data.notification.text );
//         }
//         return Promise.resolve( response );
//     },
//     error => {
//         APP.$Progress.fail();
//         toastr.error( error.response.data.notification.text );
//         return Promise.reject( error );
//     }
// );


let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
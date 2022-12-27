import './axios';
import { createApp } from 'vue'
import LaravelVuePagination from 'laravel-vue-pagination';
import { debounce, throttle } from 'throttle-debounce';
import Shimmer from 'vue3-shimmer';

  createApp({
    components: {
        'Pagination': LaravelVuePagination
    },
    data:() => ({
        cart: [],
        count: [],
        orderCollapse: null,
        isShow: false,
        filters: {},
        products: [],
        temporary: [],
        order: 'position',
        showSelectedFilters: false,
        show: 9,
        loading:true,
        temporaryLoading:true
    }),
    created() {

    },
    mounted() {
        if(document.getElementById('store') != undefined) {
            this.getProducts(1);
        }
    },
    watch: {
        order() {
            this.getProducts(1);
        },
        show() {
            this.getProducts(1);
        }
    },
    computed: {
        productsCount() {
            return this.temporary.hasOwnProperty('data') && this.temporary.data.length > 0 ? "("  + this.temporary.data.length + ")" : '';
        }
    },
    methods: {
      toggleOrderCollapse(index) {
        this.orderCollapse = this.orderCollapse == index ? null : index;
      },
      async addToCart(product) {
        const response = await axios.post('/add-to-cart', {product_id: product.id, quantity: 1});
        document.querySelector('.cart-counts').innerText = response.data.count;
        for(let key in this.products.data) {
            if(this.products.data[key].id == product.id) {
                this.products.data[key].inCart = true;
            }
        }
      },
      addCount(item) {
        this.count.push(item)
      },
      deleteCount(item) {
        this.count.pop();
      },
      clearCount(item) {
        this.count.splice(item);
      },
      async sendRequest(page = 1, waiting = false) {
        const response = await axios.post(this.getUrl(page));
        if(response.status === 200) {
            if(waiting) {
                this.temporary = response.data.products;
            }else {
                this.products = response.data.products;
            }

        }
        this.loading = false;
        this.temporaryLoading = false;
      },
      getProducts(page = 1, waiting = false) {
          if(!waiting) {
            this.loading = true;
          } else {
            this.temporaryLoading = true;
          }
        debounce(2000, (num) => {
            this.sendRequest(page, waiting);
        })(1);

      },
      getUrl(page = 1) {
        const fullUrl = new URL(location.href);
        let url = new URLSearchParams(fullUrl.search);
        url.set('order', this.order);
        url.set('show', this.show);
        url.set('page', page);
        if(Object.keys(this.filters).length > 0) {
            url.set('filters', Object.keys(this.filters).join(','));
        }
        const href = location.href.replace("#", '');
        return href + "?" + decodeURIComponent(url.toString());
      },
      addFilter(id, title) {
        if(this.filters[id]) {
            delete this.filters[id]
        } else {
            this.filters[id] = title;
        }
        this.getProducts(1, true)
      },
      filterProducts() {
        this.loading = true;
        setTimeout(() => {
            this.loading = false;
            this.temporaryLoading = false;
            this.products = this.temporary;
            this.showSelectedFilters = true;
        },1000);

      },
      removeFilter(id) {
        if(this.filters[id]) {
            delete this.filters[id]
        }
        if(Object.keys(this.filters).length == 0) {
            this.showSelectedFilters = false;
        }
        this.getProducts(1);
      },
      resetFilters() {
        this.filters = {};
        this.getProducts(1);
        this.showSelectedFilters = false;
      }
    }
  })
  .use(Shimmer)
  .mount('#app')

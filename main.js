new Vue({
    el: '#app',
    data: {
        isOpen: false
    },
    methods: {
        toggleMenu() {
            this.isOpen = !this.isOpen;
        }
    }
});
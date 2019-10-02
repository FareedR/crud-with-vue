import IndexBook from './components/IndexBook.vue';
import AddBook from './components/AddBook.vue';
import EditBook from './components/EditBook.vue';

export const routes = [
    {
        name: 'home',
        path: '/books',
        component: IndexBook
    },
    {
        name: 'store-book',
        path: '/store-book',
        component: AddBook
    },
    {
        name: 'edit-book',
        path: '/edit-book/:id',
        component: EditBook
    }
];
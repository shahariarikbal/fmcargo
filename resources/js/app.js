import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

import Header from "@/Components/Header.vue";
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

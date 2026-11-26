import './bootstrap';
import { mount } from 'svelte';
import CoffeeOSApp from './svelte/App.svelte';

const target = document.getElementById('coffeeos-app');

if (target) {
    mount(CoffeeOSApp, { target });
}

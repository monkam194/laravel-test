import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './app/Http/Livewire/**/*.php' // Pour Livewire si utilisé
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#1E40AF',    // Bleu foncé
                secondary: '#9333EA',  // Violet
                success: '#10B981',    // Vert (ajout utile)
                danger: '#EF4444',     // Rouge (ajout utile)
                warning: '#F59E0B'     // Orange (ajout utile)
            },
            container: {
                center: true,
                padding: '1.5rem'
            }
        },
    },

    plugins: [
        forms,
        require('@tailwindcss/typography'), // Plugin utile pour le contenu riche
        require('@tailwindcss/aspect-ratio') // Pour gérer les ratios d'images
    ],
};
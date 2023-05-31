import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'light-blue': '#ECF7FF', // Adjusted light-blue color
                'light-green': '#F0FFF4',
                'off-white': '#FCEFF7', // O
                'dark-green': '#006400',
                'brown': '#8B4513',

                // Modern and Clean
                main: '#FFFFFF',
                'accent-1': '#333333',
                'accent-2': '#00BFFF',
                'accent-3': '#FFD700',
        
                // Elegant and Sophisticated
                'main-2': '#212121',
                'accent-1-2': '#FFFFFF',
                'accent-2-2': '#C0C0C0',
                'accent-3-2': '#800080',
        
                // Vibrant and Energetic
                'main-3': '#FF5722',
                'accent-1-3': '#FFEB3B',
                'accent-2-3': '#4CAF50',
                'accent-3-3': '#2196F3',
        
                // Calm and Serene
                'main-4': '#F5F5F5',
                'accent-1-4': '#03A9F4',
                'accent-2-4': '#FFC107',
                'accent-3-4': '#9C27B0',
        
                // Natural and Earthy
                'main-5': '#795548',
                'accent-1-5': '#8BC34A',
                'accent-2-5': '#FF9800',
                'accent-3-5': '#FFEB3B',
        
                // Playful and Fun
                'main-6': '#FFEB3B',
                'accent-1-6': '#FF4081',
                'accent-2-6': '#3F51B5',
                'accent-3-6': '#4CAF50',
            },
        },
    },

    plugins: [forms],
};

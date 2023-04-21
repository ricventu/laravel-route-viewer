import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/js/app.jsx'],
      publicDirectory: 'resources',
      buildDirectory: 'dist',
      refresh: true,
    }),
  ],
})

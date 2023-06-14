import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
      ],
      refresh: [
        ...refreshPaths,
        'app/Http/Livewire/**',
      ],
    }),
  ],
  build: {
    target: 'esnext',
    outDir: 'public/js',
    manifest: true,
    rollupOptions: {
      input: 'resources/js/app.js',
    },
  },
});

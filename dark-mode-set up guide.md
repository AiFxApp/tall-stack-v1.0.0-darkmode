## Open `tailwind.config.js`

add this:

```
module.exports = {
  darkMode: 'class',
  // ...
}
```

https://rappasoft.com/blog/enabling-dark-mode-on-laravel-boilerplate-pro

The approach I ended up going with was toggling a dark class on the html element of the page using Alpine.js.

Here is the finished result:

```
<html
    x-cloak
    x-data="{darkMode: localStorage.getItem('dark') === 'true'}"
    x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
    x-bind:class="{'dark': darkMode}"
>
```

Make a theme switcher
Now that we have the page listening for changes on when to show the styles, we need a way to actually change it.

I went with the default location of the upper right of the page to build a tiny 1-icon component to handle the change.

I ended up just using a simple Alpine button component to swap the value of darkMode:

```
<button x-cloak x-on:click="darkMode = !darkMode;">
    <x-heroicon-s-moon x-show="!darkMode" class="p-2 ml-3 w-8 h-8 text-gray-700 bg-gray-100 rounded-md transition cursor-pointer hover:bg-gray-200" />
    <x-heroicon-s-sun x-show="darkMode" class="p-2 ml-3 w-8 h-8 text-gray-100 bg-gray-700 rounded-md transition cursor-pointer dark:hover:bg-gray-600" />
</button>
```

https://github.com/blade-ui-kit/blade-heroicons
`composer require blade-ui-kit/blade-heroicons`
`php artisan vendor:publish --tag=blade-heroicons-config`

Figure out how to swap the logo
The logo was the same concept, I just needed to show/hide the correct one based on the current theme:

```
<img x-cloak src="{{ asset('img/logo.svg') }}" :class="{'hidden': darkMode}" {{ $attributes }} alt="{{ appName() }}" />
<img x-cloak src="{{ asset('img/logo-white.svg') }}" :class="{'hidden': !darkMode}" {{ $attributes }} alt="{{ appName() }}" />
```

As set up : I used this are a constant in the theme, see -> (tailwind.config.js)
for all text and most buttons

```
text-dark hover:text-hover dark:text-std dark:hover:text-hover
```

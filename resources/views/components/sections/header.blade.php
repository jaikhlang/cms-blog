<header class="text-white bg-black shadow">
  <x-container>
    <nav class="flex items-center justify-between py-4">
      <a
        wire:navigate
        href="/"
        class="flex items-center flex-shrink-0 mr-auto"
        aria-label="{{ config('app.name') }}"
      >
        <x-logo />
      </a>

      <div>
        <a
          wire:navigate
          href="/"
          class="flex items-center flex-shrink-0 mr-auto"
          aria-label="{{ config('app.name') }}"
        >
          Home
        </a>
      </div>
      <div>
        <a
          wire:navigate
          href="/"
          class="flex items-center flex-shrink-0 mr-auto ml-2"
          aria-label="{{ config('app.name') }}"
        >
          Recruitments
        </a>

      </div>

      <div>
        <x-button
          class="ml-2"
          :icon="Auth::check() ? 'heroicon-o-cog' : 'heroicon-s-user'"
          size="xs"
          url="/admin"
        >
          {{ Auth::check() ? 'Manage' : 'Login' }}
        </x-button>
      </div>
    </nav>
  </x-container>
</header>

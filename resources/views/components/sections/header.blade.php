<header class="text-black bg-white shadow">
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


      <!--div>
        <x-button
          class="ml-2"
          :icon="Auth::check() ? 'heroicon-o-cog' : 'heroicon-s-user'"
          size="xs"
          url="/admin"
        >
          {{ Auth::check() ? 'Manage' : 'Login' }}
        </x-button>
      </div-->
    </nav>
  </x-container>
</header>
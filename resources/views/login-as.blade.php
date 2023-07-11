<x-filament::dropdown placement="bottom-end">
    <x-slot name="trigger" class="ml-4 rtl:ml-0 rtl:mr-4">
        <button
            class="block"
            aria-label="{{ __('filament::layout.buttons.user_menu.label') }}"
            wire:click="$emit('impersonate-leave')"
        >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="35" height="35">
            <linearGradient id="9Zf~EdBnGkYjb06gomJKUa" x1="9.858" x2="38.142" y1="9.858" y2="38.142" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#f44f5a" />
              <stop offset=".443" stop-color="#ee3d4a" />
              <stop offset="1" stop-color="#e52030" />
            </linearGradient>
            <path fill="url(#9Zf~EdBnGkYjb06gomJKUa)" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z" />
            <path d="M29,13.61v4.722c0,0.445,0.129,0.889,0.411,1.233c1.262,1.536,1.884,3.616,1.452,5.838c-0.531,2.732-2.731,4.933-5.463,5.463C20.92,31.732,17,28.324,17,24c0-1.686,0.598-3.232,1.592-4.44C18.869,19.223,19,18.788,19,18.351V13.61c0-0.756-0.819-1.259-1.474-0.882c-4.407,2.536-7.188,7.579-6.389,13.183c0.823,5.773,5.584,10.365,11.379,11.006C30.36,37.786,37,31.669,37,24c0-4.822-2.626-9.029-6.526-11.272C29.818,12.35,29,12.853,29,13.61z" opacity=".05" />
            <path d="M29.5,14.067v4.282c0,0.337,0.107,0.668,0.32,0.929c1.287,1.582,1.945,3.695,1.576,5.963c-0.502,3.158-3.079,5.697-6.24,6.166C20.501,32.098,16.5,28.521,16.5,24c0-1.792,0.632-3.434,1.681-4.724c0.211-0.258,0.319-0.585,0.319-0.918v-4.29c0-0.582-0.639-0.949-1.134-0.644c-3.818,2.361-6.217,6.758-5.796,11.672c0.515,6.008,5.432,10.918,11.453,11.358C30.366,37.019,36.5,31.226,36.5,24c0-4.462-2.336-8.388-5.865-10.576C30.14,13.118,29.5,13.484,29.5,14.067z" opacity=".07" />
            <path fill="#fff" d="M30,14.556v3.817c0,0.229,0.084,0.446,0.228,0.624c1.439,1.786,2.135,4.193,1.583,6.758c-0.657,3.052-3.14,5.488-6.204,6.088C20.495,32.844,16,28.937,16,24c0-1.894,0.667-3.631,1.771-5.002C17.915,18.819,18,18.601,18,18.371v-3.814c0-0.418-0.471-0.654-0.815-0.416c-3.201,2.218-5.281,5.944-5.182,10.147c0.147,6.243,5.28,11.459,11.52,11.703C30.356,36.257,36,30.775,36,24c0-4.084-2.057-7.691-5.184-9.858C30.472,13.904,30,14.136,30,14.556z" />
            <path d="M23,22h2c1.105,0,2-0.895,2-2v-8c0-1.105-0.895-2-2-2h-2c-1.105,0-2,0.895-2,2v8C21,21.105,21.895,22,23,22z" opacity=".05" />
            <path d="M23,21.5h2c0.828,0,1.5-0.672,1.5-1.5v-8c0-0.828-0.672-1.5-1.5-1.5h-2c-0.828,0-1.5,0.672-1.5,1.5v8C21.5,20.828,22.172,21.5,23,21.5z" opacity=".07" />
            <path fill="#fff" d="M25,21h-2c-0.552,0-1-0.448-1-1v-8c0-0.552,0.448-1,1-1h2c0.552,0,1,0.448,1,1v8C26,20.552,25.552,21,25,21z" />
        </svg>
        </button>
    </x-slot>
</x-filament::dropdown>
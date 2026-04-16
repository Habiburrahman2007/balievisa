@props(['url' => request()->url()])

<div x-data="copyLink('{{ $url }}')" class="inline-flex">
    <button 
        @click="copy"
        type="button"
        aria-label="Copy article link"
        class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium transition-all duration-200 border rounded-full group focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        :class="{
            'bg-green-50 text-green-700 border-green-200': copied,
            'bg-white text-slate-700 border-slate-200 hover:bg-slate-50 hover:border-slate-300': !copied,
            'bg-red-50 text-red-700 border-red-200': error
        }"
    >
        <!-- Copy Icon -->
        <svg x-show="!copied && !error" class="w-4 h-4 text-slate-400 group-hover:text-slate-600 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
        </svg>

        <!-- Check (Copied) Icon -->
        <svg x-cloak x-show="copied" class="w-4 h-4 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
        </svg>

        <!-- X (Error) Icon -->
        <svg x-cloak x-show="error" class="w-4 h-4 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>

        <span x-text="buttonText" class="tracking-wide"></span>
    </button>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('copyLink', (urlToCopy) => ({
            url: urlToCopy,
            copied: false,
            error: false,
            buttonText: 'Copy Link',
            timeout: null,

            async copy() {
                // Clear any existing timeout
                if (this.timeout) clearTimeout(this.timeout);

                try {
                    // Check if navigator.clipboard is available (requires HTTPS or localhost)
                    if (!navigator.clipboard) {
                        throw new Error('Clipboard API not available');
                    }
                    
                    await navigator.clipboard.writeText(this.url);
                    
                    this.copied = true;
                    this.error = false;
                    this.buttonText = 'Copied!';
                } catch (err) {
                    console.error('Failed to copy: ', err);
                    this.copied = false;
                    this.error = true;
                    this.buttonText = 'Copy Failed';
                }

                // Reset state after 2 seconds
                this.timeout = setTimeout(() => {
                    this.copied = false;
                    this.error = false;
                    this.buttonText = 'Copy Link';
                }, 2000);
            }
        }));
    });
</script>

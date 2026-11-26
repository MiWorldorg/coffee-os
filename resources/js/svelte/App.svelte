<script>
    const navigation = [
        { label: 'Overview', mark: '◫' },
        { label: 'Point of sale', mark: '＋' },
        { label: 'Orders', mark: '▤' },
        { label: 'Products', mark: '◈' },
        { label: 'Inventory', mark: '▦' },
        { label: 'Customers', mark: '◎' },
        { label: 'Analytics', mark: '↗' },
    ];

    const metrics = [
        { label: 'Today’s revenue', value: '$1,284.50', note: 'Preview data' },
        { label: 'Orders today', value: '48', note: 'Preview data' },
        { label: 'Average order', value: '$26.76', note: 'Preview data' },
    ];

    let active = $state('Overview');
</script>

<svelte:head>
    <title>CoffeeOS · Preview</title>
    <meta name="description" content="CoffeeOS integrated Svelte frontend preview." />
</svelte:head>

<div class="min-h-screen bg-[#f7f4ef] text-[#30231d] md:flex">
    <aside class="flex w-full flex-col bg-[#30231d] px-5 py-6 text-white md:min-h-screen md:w-64">
        <a href="/admin" class="mb-9 flex items-center gap-3 no-underline">
            <span class="grid h-10 w-10 place-items-center rounded-xl bg-[#718b72] text-xl">☕</span>
            <span>
                <span class="block text-lg font-semibold tracking-wide text-white">CoffeeOS</span>
                <span class="block text-xs text-white/55">Shop operations</span>
            </span>
        </a>

        <p class="mb-3 text-[10px] font-semibold uppercase tracking-[.2em] text-white/40">Workspace</p>
        <nav class="grid grid-cols-2 gap-2 md:grid-cols-1" aria-label="Main navigation">
            {#each navigation as item}
                <button
                    type="button"
                    aria-current={active === item.label ? 'page' : undefined}
                    onclick={() => (active = item.label)}
                    class={active === item.label
                        ? 'flex items-center gap-3 rounded-xl bg-[#718b72] px-3 py-2.5 text-left text-sm text-white transition'
                        : 'flex items-center gap-3 rounded-xl px-3 py-2.5 text-left text-sm text-white/75 transition hover:bg-white/10 hover:text-white'}
                >
                    <span class="w-5 text-center text-base">{item.mark}</span>
                    {item.label}
                </button>
            {/each}
        </nav>

        <div class="mt-auto hidden rounded-2xl border border-white/10 bg-white/5 p-4 md:block">
            <p class="text-sm font-medium text-white">Your café, in one place.</p>
            <p class="mt-1 text-xs leading-5 text-white/50">The CoffeeOS workspace is taking shape.</p>
        </div>
    </aside>

    <main class="min-w-0 flex-1 px-5 py-7 md:px-10 md:py-9">
        <header class="mb-9 flex flex-wrap items-center justify-between gap-4">
            <div>
                <p class="text-xs font-medium uppercase tracking-[.18em] text-[#718b72]">Coffee shop workspace</p>
                <h1 class="mt-2 text-2xl font-semibold tracking-tight md:text-3xl">{active}</h1>
                <p class="mt-1 text-sm text-[#8b8178]">A first look at the new CoffeeOS interface.</p>
            </div>
            <div class="flex items-center gap-3">
                <span class="rounded-full border border-[#e8e0d6] bg-white px-3 py-2 text-xs text-[#74695f]">Frontend preview</span>
                <span class="grid h-10 w-10 place-items-center rounded-full bg-[#e7eee7] text-sm font-semibold text-[#58735a]">C</span>
            </div>
        </header>

        <section class="mb-8 rounded-3xl bg-[#e7eee7] p-6 md:p-8">
            <p class="text-sm font-medium text-[#58735a]">Welcome to CoffeeOS</p>
            <h2 class="mt-2 max-w-xl text-2xl font-semibold leading-tight text-[#30231d] md:text-3xl">A calmer way to run your coffee shop.</h2>
            <p class="mt-3 max-w-xl text-sm leading-6 text-[#6d786c]">This is the integrated Svelte foundation. The figures below are sample interface content, not live business data.</p>
        </section>

        <section aria-label="Preview metrics" class="grid gap-4 md:grid-cols-3">
            {#each metrics as metric}
                <article class="rounded-2xl border border-[#eee7dc] bg-white p-5 shadow-sm shadow-[#30231d]/[0.03]">
                    <p class="text-sm text-[#8b8178]">{metric.label}</p>
                    <p class="mt-3 text-2xl font-semibold tracking-tight">{metric.value}</p>
                    <p class="mt-2 text-xs text-[#718b72]">{metric.note}</p>
                </article>
            {/each}
        </section>

        <section class="mt-6 rounded-2xl border border-dashed border-[#d9cfc2] bg-white/60 p-6">
            <p class="font-medium">Next up: real application data</p>
            <p class="mt-1 text-sm leading-6 text-[#8b8178]">The next migration step will connect the dashboard and product screens to existing Laravel routes and controllers. No sample figures are connected to the database.</p>
        </section>
    </main>
</div>

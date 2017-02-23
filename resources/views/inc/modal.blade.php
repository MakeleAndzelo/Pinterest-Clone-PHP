<div class="modal" id="{{ $id or NULL }}">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">
                {{ $title }}
            </p>
            <button class="delete"></button>
        </header>
        <section class="modal-card-body">
            {{ $slot }}
        </section>
    </div>
</div>
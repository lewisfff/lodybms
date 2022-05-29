@if($user && auth()->user() && $user->id === auth()->user()->id)
    <div class="field">
        <form action="/upload" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="file is-boxed">
                <label class="file-label">
                    <input class="file-input" type="file" class="file" name="file" accept=".db">
                    <span class="file-cta">
                        <span class="file-label">
                            {{ $text }}
                        </span>
                    </span>
                </label>
            </div>
        </form>
    </div>
@endif

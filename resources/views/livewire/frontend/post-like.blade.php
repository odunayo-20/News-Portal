<button wire:click="toggleLike"
        class="btn btn-sm px-2 py-1 {{ $liked ? 'btn-primary' : 'btn-outline-primary' }}"
        style="font-size: 12px;">
    <i class="fa fa-thumbs-up me-1" style="font-size: 12px;"></i>
    {{ $post->likes()->count() }}
</button>

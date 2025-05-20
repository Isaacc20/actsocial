<a href="{{ route('devotional_details', ['id' => $devotional['id']]) }}" class="dev-card d-flex flex-column gap-2 p-2 rounded-3 bg-white position-relative">
    <img class="cover-image rounded-2" src="{{ asset($devotional['image']) }}" alt="Cover" />

    <button class="position-absolute love">
        <i class="fa fa-heart"></i>
    </button>

    <div class="d-flex flex-column">
        <span class="dev-card-title fw-500">{{ $devotional['title'] }}</span>
        <small class="dev-card-author fw-400">{{ $devotional['author'] }}</small>
    </div>
</a>
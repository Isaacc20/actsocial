{{--@dd($devotional)--}}

<a href="{{ route('devotional_details', ['id' => $devotional['id']]) }}" class="active-dev-card d-flex flex-column gap-2 p-2 rounded-3 bg-white">
    <img class="cover-image rounded-2" src="{{ asset($devotional['image']) }}" alt="Cover" />
    <div class="d-flex justify-content-between">
        <div class="d-flex flex-column">
            <span class="dev-card-title fw-500">{{ $devotional['title'] }}</span>
            <small class="dev-card-author fw-400">{{ $devotional['author'] }}</small>
        </div>
        <div class="streak-div d-flex flex-column">
            <small class="streak">Streak</small>
            <small class="d-flex align-items-center justify-content-center rounded-circle bg-primary text-white" style=" width: 20px; height: 20px"><i class="fa fa-bolt " ></i></small>
            <small class="streak-number">{{ $devotional['streak'] }}</small>
        </div>
    </div>
</a>
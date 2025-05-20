<div class="devotional-details d-flex flex-column">
    <div class="d-flex flex-column gap-4">

        <a href="#" class="fw-400 fs-5" onclick="history.back(); return false;">< Devotionals</a>

        <div class="d-flex flex-column gap-3">

            <div class="d-flex justify-content-between align-items-center">
                <span class="fw-500 fs-4">Faith for Finances</span>
                <button class="border-none d-flex align-items-center gap-2 py-2 px-3 text-white fs-6 bg-primary rounded-pill">
                    <i class="fa fa-upload"></i> Share
                </button>
            </div>

            <div class="d-flex align-items-stretch gap-3">
                @if($devotional['format'] == 'video')
                    @include('frontend.devotional.cards.devotional_video', ['width' => '63%', 'source' => 'assets/frontend/videos/TLOOOD.MP4'])
                @else
                    @include('frontend.devotional.cards.devotional_audio')
                @endif


                @include('frontend.devotional.cards.publisher_card')
            </div>

        </div>
    </div>

    <div class="d-flex gap-3">
        <button type="button" class="d-flex align-items-center gap-2 py-2 px-3 border-primary rounded-1 fw-600">
            <i class="fa fa-bookmark"></i>
            <small>Save for later</small>
        </button>

        <button class="border-none d-flex align-items-center gap-2 py-2 px-3 text-white bg-primary rounded-1 fw-60">
            <i class="fa fa-book-open"></i>
            <small>Start Plan</small>
        </button>

    </div>

    <div class="d-flex flex-column gap-3">
        <span class="fw-500 fs-6">Related Plans</span>
        <div class="scroll-x flex-shrink-0 w-100 d-flex gap-3">
            @foreach($devotionals as $devotional)
                @include('frontend.devotional.cards.devotional_card', ['devotional', $devotional])
            @endforeach
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const video = document.getElementById('devotionalVideo');
        const playButton = document.getElementById('playButton');

        // Pause initially if autoplay is not desired visually
        video.pause();

        playButton.addEventListener('click', () => {
            if (video.paused) {
                video.play();
                playButton.style.display = 'none'; // hide button after play
            } else {
                video.pause();
                playButton.style.display = 'flex'; // show button on pause (optional)
            }
        });

        // Optional: hide play button when video ends
        video.addEventListener('ended', () => {
            playButton.style.display = 'flex';
        });
    });
</script>
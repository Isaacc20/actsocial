<div class="devotional-details d-flex flex-column">
    <div>
        <a href="#" onclick="history.back(); return false;">< Devotionals</a>
        <div class="d-flex flex-column gap-3">

            <div class="d-flex justify-content-between align-items-center">
                <span>Faith for Finances</span>
                <div class="d-flex flex-column align-items-center gap-1">
                    <small class="">Streak</small>
                    <div class="d-flex align-items-center gap-2">
                        <small class="d-flex align-items-center justify-content-center rounded-circle bg-white text-primary" style=" width: 32px; height: 32px"><i class="fa fa-bolt" ></i></small>
                        <span class="fw-600 fs-5">1</span>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column align-items-stretch gap-3">
                @include('frontend.devotional.cards.devotional_video', ['width' => '100%', 'source' => 'assets/frontend/videos/TLOOOD.MP4'])

                @include('frontend.devotional.cards.progress')

                @include('frontend.devotional.cards.key_scripture')
            </div>

        </div>
    </div>

    @include('frontend.devotional.cards.comments')

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
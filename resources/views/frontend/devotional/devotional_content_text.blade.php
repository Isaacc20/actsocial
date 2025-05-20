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

                @include('frontend.devotional.cards.progress')

                <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">

                    <div style="width: 63%">
                        <span class="fw-300 fs-6">
                            Finances can be a source of worry, but God calls us to trust Him as our provider. The world teaches us to rely on our own efforts, yet the Bible reminds us that God is our source. He owns everything (Psalm 24:1) and delights in providing for His children.
                            <br>
                            Faith for finances doesn’t mean neglecting wisdom or hard work—it means trusting that God is in control. Just as He fed Elijah through ravens (1 Kings 17:6) and provided manna for Israel (Exodus 16:35), He will make a way for you, even when resources seem scarce.
                        </span>
                        <br><br>
                        <span class="fw-bold fs-6">Reflection Questions:</span><br>
                        <span class="fw-300 fs-6">
                            Do you see God as your provider, or do you rely only on yourself?
                            What financial worries do you need to surrender to God today?
                            How can you align your financial habits with biblical principles of stewardship and generosity?
                        </span>
                        <br><br>
                        <span class="fw-bold fs-6">Prayer:</span><br>

                        <span class="fw-300 fs-6">
                            Heavenly Father, I trust You as my provider. Help me to walk in faith, not fear, knowing that You will supply all my needs. Give me wisdom to manage my finances well and a generous heart to bless others. In Jesus' name, Amen.
                        </span>
                        <br><br>
                        <span class="fw-bold fs-6">Action Step:</span><br>
                        <span class="fw-300 fs-6">
                            Write down one financial concern and surrender it to God in prayer. Take one practical step today, whether it’s creating a budget, saving, or giving in faith.
                        </span>
                    </div>

                    @include('frontend.devotional.cards.key_scripture', ['width' => '35%'])
                </div>

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
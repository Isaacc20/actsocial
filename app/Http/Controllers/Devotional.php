<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Devotional extends Controller
{
    private $user;
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth()->user();
            return $next($request);
        });
    }

    private function getAllDevotionals()
    {
        return [
            [
                'id' => 1,
                'title' => 'Faith for Finances',
                'image' => 'assets/frontend/images/pw.jpg',
                'author' => 'Agnes Ferdinard',
                'streak' => 64,
                'status' => 'in-progress',
                'format' => 'video',
            ],
            [
                'id' => 2,
                'title' => 'The Believers Authority',
                'image' => 'assets/frontend/images/pw1.jpg',
                'author' => 'John Grahams',
                'streak' => 21,
                'status' => 'in-progress',
                'format' => 'audio',
            ],
            [
                'id' => 3,
                'title' => 'God’s Extravagant Love',
                'image' => 'assets/frontend/images/pw2.jpg',
                'author' => 'Hezekiah Joseph',
                'streak' => 21,
                'status' => 'completed',
                'format' => 'text',
            ],
            [
                'id' => 4,
                'title' => 'The Deborah Generation',
                'image' => 'assets/frontend/images/product1.jpg',
                'author' => 'John Grahams',
                'streak' => 8,
                'status' => 'bookmarks',
                'format' => 'video',
            ],
            [
                'id' => 5,
                'title' => 'Walking in Grace',
                'image' => 'assets/frontend/images/profile-bg.jpg',
                'author' => 'Esther Bamidele',
                'streak' => 12,
                'status' => 'completed',
                'format' => 'text',
            ],
            [
                'id' => 6,
                'title' => 'Strength in Weakness',
                'image' => 'assets/frontend/images/rc1.jpg',
                'author' => 'Daniel Oke',
                'streak' => 17,
                'status' => 'bookmarks',
                'format' => 'audio',
            ],
            [
                'id' => 7,
                'title' => 'Joyful Living',
                'image' => 'assets/frontend/images/shoot.jpg',
                'author' => 'Sarah Ben',
                'streak' => 23,
                'status' => 'in-progress',
                'format' => 'video',
            ],
            [
                'id' => 8,
                'title' => 'Armor of God',
                'image' => 'assets/frontend/images/event-details.jpg',
                'author' => 'Philip Judah',
                'streak' => 9,
                'status' => 'completed',
                'format' => 'text',
            ],
            [
                'id' => 9,
                'title' => 'Fruits of the Spirit',
                'image' => 'assets/frontend/images/sp1.jpg',
                'author' => 'Helen Joy',
                'streak' => 15,
                'status' => 'bookmarks',
                'format' => 'audio',
            ],
            [
                'id' => 10,
                'title' => 'Kingdom Finances',
                'image' => 'assets/frontend/images/st-b.jpg',
                'author' => 'Matthew Elijah',
                'streak' => 30,
                'status' => 'in-progress',
                'format' => 'text',
            ],
            [
                'id' => 11,
                'title' => 'Healing Streams',
                'image' => 'assets/frontend/images/story1.jpg',
                'author' => 'Naomi David',
                'streak' => 18,
                'status' => 'completed',
                'format' => 'video',
            ],
            [
                'id' => 12,
                'title' => 'Living by the Word',
                'image' => 'assets/frontend/images/video-1.jpg',
                'author' => 'Victor Peters',
                'streak' => 27,
                'status' => 'bookmarks',
                'format' => 'audio',
            ],
            [
                'id' => 13,
                'title' => 'Faith Builders',
                'image' => 'assets/frontend/images/video-th.jpg',
                'author' => 'Blessing Mercy',
                'streak' => 13,
                'status' => 'in-progress',
                'format' => 'text',
            ],
            [
                'id' => 14,
                'title' => 'Daily Fire',
                'image' => 'assets/frontend/images/profile-cover.jpg',
                'author' => 'Samuel King',
                'streak' => 5,
                'status' => 'bookmarks',
                'format' => 'video',
            ],
            [
                'id' => 15,
                'title' => 'Covenant Promises',
                'image' => 'assets/frontend/images/event-3.jpg',
                'author' => 'Chisom Praise',
                'streak' => 11,
                'status' => 'completed',
                'format' => 'audio',
            ],
            [
                'id' => 16,
                'title' => 'Overcoming Fear',
                'image' => 'assets/frontend/images/event-2.jpg',
                'author' => 'Mary Amos',
                'streak' => 20,
                'status' => 'in-progress',
                'format' => 'text',
            ],
            [
                'id' => 17,
                'title' => 'Peace in the Storm',
                'image' => 'assets/frontend/images/group-pro.jpg',
                'author' => 'Deborah Zion',
                'streak' => 19,
                'status' => 'completed',
                'format' => 'video',
            ],
            [
                'id' => 18,
                'title' => 'Power of Praise',
                'image' => 'assets/frontend/images/group.jpg',
                'author' => 'Zoe Isaac',
                'streak' => 6,
                'status' => 'bookmarks',
                'format' => 'audio',
            ],
            [
                'id' => 19,
                'title' => 'Resurrected Life',
                'image' => 'assets/frontend/images/gr-c.jpg',
                'author' => 'Abel Peace',
                'streak' => 22,
                'status' => 'in-progress',
                'format' => 'video',
            ],
            [
                'id' => 20,
                'title' => 'Glorious Days',
                'image' => 'assets/frontend/images/event.jpg',
                'author' => 'Grace Daniels',
                'streak' => 29,
                'status' => 'completed',
                'format' => 'text',
            ],
        ];
    }


    public function devotional()
    {
        $active_devotionals = collect($this->getAllDevotionals())
            ->where('status', 'in-progress')
            ->values();

        $page_data['posts'] = [];
        $page_data['user'] = $this->user;
        $page_data['view_path'] = 'frontend.devotional.index';
        $page_data['full_page'] = true;
        $page_data['devotionals'] = collect($this->getAllDevotionals());
        $page_data['active_devotionals'] = $active_devotionals;
        $page_data['categories'] = [
            [
                'title' => 'Faith',
                'color' => '#FFECE5'
            ],
            [
                'title' => 'Relationships',
                'color' => '#EDECFF'
            ],
            [
                'title' => 'Prayer',
                'color' => '#FFE5E5'
            ],
            [
                'title' => 'Trust',
                'color' => '#E1ECFD'
            ],
            [
                'title' => 'Hope',
                'color' => '#CAF1DD'
            ]
        ];
        return view('frontend.index', $page_data);
    }

    public function saved_devotionals(Request $request)
    {
        $view = strtolower($request->query('view', 'in-progress'));

        $devotionals_data = [
            'in-progress' => collect($this->getAllDevotionals())->where('id', '<=', 2)->values(),
            'completed' => collect($this->getAllDevotionals())->where('id', 3)->values(),
            'bookmarks' => collect($this->getAllDevotionals())->where('id', '>=', 4)->values()
        ];

        $page_data['devotionals'] = $devotionals_data[$view] ?? [];
        $page_data['user'] = $this->user;
        $page_data['view_path'] = 'frontend.devotional.saved_devotionals';
        $page_data['full_page'] = true;
        $page_data['status_btn'] = [
            [
                'status' => $view === 'in-progress',
                'action' => route('saved_devotionals', ['view' => 'in-progress']),
                'text' => 'In Progress'
            ],
            [
                'status' => $view === 'completed',
                'action' => route('saved_devotionals', ['view' => 'completed']),
                'text' => 'Completed'
            ],
            [
                'status' => $view === 'bookmarks',
                'action' => route('saved_devotionals', ['view' => 'bookmarks']),
                'text' => 'Bookmarks'
            ]
        ];

        return view('frontend.index', $page_data);
    }

    public function devotional_categories(Request $request)
    {
        $category = strtolower($request->query('category', 'faith')); // default to 'faith'

        $all_categories = [
            'faith' => [
                ['id' => 1, 'title' => 'Faith for Finances', 'image' => 'assets/frontend/images/event-3.jpg', 'author' => 'Agnes', 'status' => 'in-progress'],
            ],
            'love' => [
                ['id' => 2, 'title' => 'God’s Love', 'image' => 'assets/frontend/images/event-3.jpg', 'author' => 'Hezekiah', 'status' => 'completed'],
            ],
            'prayer' => [
                ['id' => 3, 'title' => 'The Deborah Generation', 'image' => 'assets/frontend/images/event-3.jpg', 'author' => 'Grahams', 'status' => 'bookmarked'],
            ]
        ];

        if (!array_key_exists($category, $all_categories)) {
            abort(404);
        }

        $page_data['devotionals'] = $all_categories[$category];
//        $page_data['categories'] = array_keys($all_categories);
        $page_data['active_category'] = $category;
        $page_data['category_title'] = ucfirst($category);
        $page_data['view_path'] = 'frontend.devotional.category';
        $page_data['full_page'] = true;
        $page_data['user'] = $this->user;

        return view('frontend.index', $page_data);
    }

    public function devotional_details($id)
    {
        $devotionals = collect($this->getAllDevotionals());

        $devotional = collect($this->getAllDevotionals())->firstWhere('id', $id);

        if (!$devotional) {
            abort(404);
        }

        $page_data['devotionals'] = $devotionals;
        $page_data['devotional'] = $devotional;
        $page_data['user'] = $this->user;
        $page_data['view_path'] = 'frontend.devotional.devotional_details';
        $page_data['full_page'] = true;

        return view('frontend.index', $page_data);
    }
    public function devotional_content($id)
    {
        $devotionals = collect($this->getAllDevotionals());

        $devotional = collect($this->getAllDevotionals())->firstWhere('id', $id);

        $display = 'frontend.devotional.devotional_content_video';

        if (!$devotional) {
            abort(404);
        }

        if ($devotional['format'] === 'audio') {
            $display = 'frontend.devotional.devotional_content_audio';
        } else if ($devotional['format'] === 'text') {
            $display = 'frontend.devotional.devotional_content_text';
        }

        $page_data['devotionals'] = $devotionals;
        $page_data['devotional'] = $devotional;
        $page_data['user'] = $this->user;
        $page_data['view_path'] = $display;
        $page_data['full_page'] = true;

        return view('frontend.index', $page_data);
    }


}

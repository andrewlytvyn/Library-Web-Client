<?php

namespace App\View\Components;

use App\Topic;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class TopicList extends Component
{
    public $topiclist;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->topiclist = Topic::where('stype', 'M')->get();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.topic-list');
    }

}

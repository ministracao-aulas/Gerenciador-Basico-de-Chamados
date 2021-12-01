<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardCardStatistics extends Component
{
    public string $title;
    public string $bigText;
    public string $bigIcon;
    public string $bigIconColor;
    public string $smallIcon;
    public string $smallText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $bigText, string $bigIcon, string $bigIconColor, string $smallIcon = '', string $smallText = '')
    {
        $this->title     = $title;
        $this->bigText   = $bigText;
        $this->bigIcon   = $bigIcon;
        $this->bigIconColor = $bigIconColor;
        $this->smallIcon    = $smallIcon;
        $this->smallText    = $smallText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard-card-statistics');
    }
}

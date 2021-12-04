<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NotificationsMenu extends Component
{
    public $notifications;
    public $unread;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->notifications = auth()->user()->notifications()->limit(10)->get();
        $this->unread = auth()->user()->unreadNotifications()->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notifications-menu');
    }
}
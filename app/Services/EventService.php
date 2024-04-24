<?php 

namespace App\Services;

use App\Models\Event;

class EventService {
    
    public function getAllWebinar() {
        return Event::with('webinar_session.pembicara')
        ->where('activity_category_event', 'WEBINAR');
    }

    public function getDetailWebinar($slug) {
        return Event::with('webinar_session.pembicara')
        ->where('events.slug_event', $slug)
        ->firstOrFail();
    }

    public function getAllCampaign() {
        return Event::with('event_categories')
            ->where('activity_category_event', 'CAMPAIGN');
    }

    public function getDetailCampaign($slug) {
        return Event::with(['event_categories'])
        ->where('slug_event' , $slug)
        ->firstOrFail();
    }
}
<?php 

namespace App\Services;

use Carbon\Carbon;
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

    public function getAllRecap() {
        return Event::with('webinar_session.pembicara')
        ->where('activity_category_event', 'WEBINAR')
        ->where('date_event', '<=' , Carbon::now()->format('Y-m-d'))
        ->where('partisipan' ,'!=', null)
        ->orderBy('date_event', 'desc');
    } 

    public function getDetailRecap($slug) {
        return Event::with('webinar_session.pembicara')
        ->where('events.slug_event', $slug)
        ->firstOrFail();
    } 
}
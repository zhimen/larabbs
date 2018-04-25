<?php

namespace App\Observers;

use App\Models\Topic;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored
// Eloquent 观察器允许我们对给定模型中进行事件监控

class TopicObserver
{
    public function creating(Topic $topic)
    {
        //
    }

    public function saving(Topic $topic)
    {
        $topic->body = clean($topic->body, 'user_topic_body');
        $topic->excerpt = make_excerpt($topic->body);
    }


    public function updating(Topic $topic)
    {
        //
    }
}
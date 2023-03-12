<?php

namespace App\Repositories\Contact;

use App\Models\Contact;
use App\Repositories\BaseRepository;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }
}

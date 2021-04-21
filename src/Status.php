<?php

namespace App\Models;

class Status
{
    public const PENDING = 'pending';
    public const SUCCESS = 'success';
    public const FAILED = 'failed';
    public const WARNING = 'warning';
    public const ERROR = 'error';
    public const PUBLISHED = 'published';
    public const UNPUBLISHED = 'unpublished';
    public const APPROVED = 'approved';
    public const REJECTED = 'rejected';
}

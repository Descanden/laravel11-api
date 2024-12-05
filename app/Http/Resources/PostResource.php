<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    // Define custom properties
    public $status;
    public $message;

    /**
     * __construct
     *
     * @param mixed $status
     * @param mixed $message
     * @param mixed $resource
     * @return void
     */
    public function __construct($status, $message, $resource)
    {
        // Set custom properties
        $this->status = $status;
        $this->message = $message;

        // Pass the resource to the parent constructor
        parent::__construct($resource);
    }

    /**
     * toArray
     *
     * @param mixed $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource // This is the actual data
        ];
    }
}

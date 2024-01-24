<?php

namespace App\Dto;

class File
{
    public function __construct(
        public readonly string $name,
        public readonly string $originalName,
        public readonly string $mime,
        public readonly string $path,
        public readonly string $disk,
        public readonly int $size,
        public readonly null|string $collection = null,
    ) {}

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'file_name' => $this->originalName,
            'mime_type' => $this->mime,
            'path' => $this->path,
            'disk' => $this->disk,
            'size' => $this->size,
            'collection' => $this->collection,
        ];
    }
}

<?php

namespace App\Services\Upload;

use App\Dto\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UploadService
{
    public function create(UploadedFile $file, string $path): File
    {
        $name = $file->hashName();
        $upload = Storage::put($path, $file);

        return new File(
            name: "{$name}",
            originalName: $file->getClientOriginalName(),
            mime: $file->getClientMimeType(),
            path: $upload,
            disk: config('app.uploads.disk'),
            size: $file->getSize(),
            collection: $path,
        );
    }
}

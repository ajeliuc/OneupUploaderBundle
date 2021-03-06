<?php

namespace Oneup\UploaderBundle\Uploader\Chunk;

use Symfony\Component\HttpFoundation\File\UploadedFile;

interface ChunkManagerInterface
{
    public function clear();
    public function addChunk($uuid, $index, UploadedFile $chunk, $original);
    public function assembleChunks(\IteratorAggregate $chunks);
    public function cleanup($path);
    public function getChunks($uuid);
}

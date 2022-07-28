<?php

namespace Core\Domain\Entity\File;

class File
{
    public int $id;
    /**
     * @var string
     * @see FileTypesEnum
     */
    public string $type;
    public string $path;
    public string $name;
    public string $createdAt;

    public function __construct(int $id, string $type, string $path, string $name, string $createdAt)
    {
        $this->id        = $id;
        $this->type      = $type;
        $this->path      = $path;
        $this->name      = $name;
        $this->createdAt = $createdAt;
    }
}
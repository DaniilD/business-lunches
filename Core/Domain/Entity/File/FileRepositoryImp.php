<?php

namespace Core\Domain\Entity\File;

interface FileRepositoryImp
{
    public function getById(int $id): File;
}
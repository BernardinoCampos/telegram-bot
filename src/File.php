<?php
namespace BernardinoCampos\TelegramBot;

use function BernardinoCampos\Values\get_value;

/**
 * @see https://core.telegram.org/bots/api#file
 */
#[\AllowDynamicProperties]
class File
{
    private $values = [];
    
    private $fileUrl;

    public function getFileId(): string
    {
        return get_value($this, 'file_id');
    }

    public function getFileSize(): ?int
    {
        return get_value($this, 'file_size');
    }

    public function getFilePath(): ?string
    {
        return get_value($this, 'file_path');
    }
    
    public function setFileUrl(?string $fileUrl): void
    {
        $this->fileUrl = $fileUrl;
    }
    
    public function getFileUrl(): ?string 
    {
        return $this->fileUrl;
    }
}
<?php

namespace MaartenDeBlock\YukiApiClient\Fluent;

use MaartenDeBlock\YukiApiClient\SubClient\Archive\YukiApiArchiveClient;
use MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolders;
use MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\UploadDocument;
use MaartenDeBlock\YukiApiClient\Session\SessionManager;

class ArchiveService extends FluentServiceBase
{
    private YukiApiArchiveClient $archiveClient;

    public function __construct(YukiApiArchiveClient $archiveClient, SessionManager $sessionManager)
    {
        parent::__construct($archiveClient, $sessionManager);
        $this->archiveClient = $archiveClient;
    }

    /**
     * Get available document folders
     */
    public function folders(): object
    {
        return new class($this->archiveClient, $this->sessionManager) extends FluentServiceBase {
            private YukiApiArchiveClient $archiveClient;

            public function __construct(YukiApiArchiveClient $archiveClient, SessionManager $sessionManager)
            {
                parent::__construct($archiveClient, $sessionManager);
                $this->archiveClient = $archiveClient;
            }

            public function get(): array
            {
                $request = new DocumentFolders($this->sessionManager->getSessionId());
                $response = $this->archiveClient->documentFolders($request);
                
                return $this->toArray($response->getDocumentFoldersResult());
            }
        };
    }

    /**
     * Upload a document
     */
    public function upload(): object
    {
        return new class($this->archiveClient, $this->sessionManager) extends FluentServiceBase {
            private YukiApiArchiveClient $archiveClient;
            private ?string $fileName = null;
            private mixed $data = null;
            private int $folder = 1; // Default folder
            private ?string $administrationID = null;

            public function __construct(YukiApiArchiveClient $archiveClient, SessionManager $sessionManager)
            {
                parent::__construct($archiveClient, $sessionManager);
                $this->archiveClient = $archiveClient;
            }

            public function file(string $fileName): self
            {
                $this->fileName = $fileName;
                return $this;
            }

            public function data(mixed $data): self
            {
                $this->data = $data;
                return $this;
            }

            public function folder(int $folderId): self
            {
                $this->folder = $folderId;
                return $this;
            }

            public function administration(?string $administrationID): self
            {
                $this->administrationID = $administrationID;
                return $this;
            }

            public function execute(): array
            {
                if (!$this->fileName || !$this->data) {
                    throw new \InvalidArgumentException('Both fileName and data must be provided for upload');
                }

                $request = new UploadDocument(
                    $this->sessionManager->getSessionId(),
                    $this->fileName,
                    $this->data,
                    $this->folder,
                    $this->administrationID
                );
                
                $response = $this->archiveClient->uploadDocument($request);
                
                return $this->toArray($response->getUploadDocumentResult());
            }

            // Alias for execute for consistency
            public function get(): array
            {
                return $this->execute();
            }
        };
    }
}
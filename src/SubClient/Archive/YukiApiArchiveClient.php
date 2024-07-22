<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive;

use Phpro\SoapClient\Caller\Caller;
use MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class YukiApiArchiveClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * Returns all document folders in the archive
     *
     * @param RequestInterface & Type\DocumentFolders $parameters
     * @return ResultInterface & Type\DocumentFoldersResponse
     * @throws SoapException
     */
    public function documentFolders(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolders $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFoldersResponse
    {
        $response = ($this->caller)('DocumentFolders', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFoldersResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the document count of every document folder in the archive
     *
     * @param RequestInterface & Type\DocumentFolderCounts $parameters
     * @return ResultInterface & Type\DocumentFolderCountsResponse
     * @throws SoapException
     */
    public function documentFolderCounts(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderCounts $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderCountsResponse
    {
        $response = ($this->caller)('DocumentFolderCounts', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderCountsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns all tabs within a document folder
     *
     * @param RequestInterface & Type\DocumentFolderTabs $parameters
     * @return ResultInterface & Type\DocumentFolderTabsResponse
     * @throws SoapException
     */
    public function documentFolderTabs(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderTabs $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderTabsResponse
    {
        $response = ($this->caller)('DocumentFolderTabs', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderTabsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the documents in a document folder with options to sort, select a date and select a row number
     *
     * @param RequestInterface & Type\Documents $parameters
     * @return ResultInterface & Type\DocumentsResponse
     * @throws SoapException
     */
    public function documents(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\Documents $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsResponse
    {
        $response = ($this->caller)('Documents', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the documents in a given document folder with options to sort, select a date and select a row number
     *
     * @param RequestInterface & Type\DocumentsInFolder $parameters
     * @return ResultInterface & Type\DocumentsInFolderResponse
     * @throws SoapException
     */
    public function documentsInFolder(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInFolder $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInFolderResponse
    {
        $response = ($this->caller)('DocumentsInFolder', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInFolderResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the documents in a given document folder tab with options to sort, select a date and select a row number
     *
     * @param RequestInterface & Type\DocumentsInTab $parameters
     * @return ResultInterface & Type\DocumentsInTabResponse
     * @throws SoapException
     */
    public function documentsInTab(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInTab $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInTabResponse
    {
        $response = ($this->caller)('DocumentsInTab', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInTabResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns information of one document
     *
     * @param RequestInterface & Type\FindDocument $parameters
     * @return ResultInterface & Type\FindDocumentResponse
     * @throws SoapException
     */
    public function findDocument(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\FindDocument $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\FindDocumentResponse
    {
        $response = ($this->caller)('FindDocument', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\FindDocumentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the documents of a specific type, with options voor sorting, date selection, and paging
     *
     * @param RequestInterface & Type\DocumentsByType $parameters
     * @return ResultInterface & Type\DocumentsByTypeResponse
     * @throws SoapException
     */
    public function documentsByType(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsByType $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsByTypeResponse
    {
        $response = ($this->caller)('DocumentsByType', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsByTypeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the documents of a specific type, with options voor sorting, date selection, and paging
     *
     * @param RequestInterface & Type\ModifiedDocumentsByType $parameters
     * @return ResultInterface & Type\ModifiedDocumentsByTypeResponse
     * @throws SoapException
     */
    public function modifiedDocumentsByType(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsByType $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsByTypeResponse
    {
        $response = ($this->caller)('ModifiedDocumentsByType', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsByTypeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the documents of a specific type, with options voor sorting, date selection, and paging
     *
     * @param RequestInterface & Type\ModifiedDocumentsInFolder $parameters
     * @return ResultInterface & Type\ModifiedDocumentsInFolderResponse
     * @throws SoapException
     */
    public function modifiedDocumentsInFolder(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsInFolder $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsInFolderResponse
    {
        $response = ($this->caller)('ModifiedDocumentsInFolder', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsInFolderResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Searches documents using a given search value. Use -1 as Folder or Tab argument to search all folders or tabs, or '0001-01-01' as date selection to search all years
     *
     * @param RequestInterface & Type\SearchDocuments $parameters
     * @return ResultInterface & Type\SearchDocumentsResponse
     * @throws SoapException
     */
    public function searchDocuments(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SearchDocuments $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SearchDocumentsResponse
    {
        $response = ($this->caller)('SearchDocuments', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SearchDocumentsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the full binary data of the document
     *
     * @param RequestInterface & Type\DocumentBinaryData $parameters
     * @return ResultInterface & Type\DocumentBinaryDataResponse
     * @throws SoapException
     */
    public function documentBinaryData(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBinaryData $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBinaryDataResponse
    {
        $response = ($this->caller)('DocumentBinaryData', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBinaryDataResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the full binary data of the document
     *
     * @param RequestInterface & Type\DocumentFile $parameters
     * @return ResultInterface & Type\DocumentFileResponse
     * @throws SoapException
     */
    public function documentFile(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFile $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFileResponse
    {
        $response = ($this->caller)('DocumentFile', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFileResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns a presigned URL to retrieve the binary data of the document
     *
     * @param RequestInterface & Type\DocumentDownloadUrl $parameters
     * @return ResultInterface & Type\DocumentDownloadUrlResponse
     * @throws SoapException
     */
    public function documentDownloadUrl(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentDownloadUrl $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentDownloadUrlResponse
    {
        $response = ($this->caller)('DocumentDownloadUrl', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentDownloadUrlResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the XML data of the document
     *
     * @param RequestInterface & Type\DocumentXMLData $parameters
     * @return ResultInterface & Type\DocumentXMLDataResponse
     * @throws SoapException
     */
    public function documentXMLData(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLData $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataResponse
    {
        $response = ($this->caller)('DocumentXMLData', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the XML data of the document
     *
     * @param RequestInterface & Type\DocumentXMLDataAsBinary $parameters
     * @return ResultInterface & Type\DocumentXMLDataAsBinaryResponse
     * @throws SoapException
     */
    public function documentXMLDataAsBinary(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataAsBinary $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataAsBinaryResponse
    {
        $response = ($this->caller)('DocumentXMLDataAsBinary', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataAsBinaryResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the XML data of the document
     *
     * @param RequestInterface & Type\DocumentXMLDataAsString $parameters
     * @return ResultInterface & Type\DocumentXMLDataAsStringResponse
     * @throws SoapException
     */
    public function documentXMLDataAsString(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataAsString $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataAsStringResponse
    {
        $response = ($this->caller)('DocumentXMLDataAsString', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataAsStringResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns an image of the document, resized to a specified maximum width and height
     *
     * @param RequestInterface & Type\DocumentImage $parameters
     * @return ResultInterface & Type\DocumentImageResponse
     * @throws SoapException
     */
    public function documentImage(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentImage $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentImageResponse
    {
        $response = ($this->caller)('DocumentImage', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentImageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the number of page images for the document
     *
     * @param RequestInterface & Type\DocumentImageCount $parameters
     * @return ResultInterface & Type\DocumentImageCountResponse
     * @throws SoapException
     */
    public function documentImageCount(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentImageCount $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentImageCountResponse
    {
        $response = ($this->caller)('DocumentImageCount', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentImageCountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns documents that are bundled with a main document
     *
     * @param RequestInterface & Type\DocumentBundle $parameters
     * @return ResultInterface & Type\DocumentBundleResponse
     * @throws SoapException
     */
    public function documentBundle(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBundle $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBundleResponse
    {
        $response = ($this->caller)('DocumentBundle', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBundleResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Upload a document to the Yuki archive
     *
     * @param RequestInterface & Type\UploadDocument $parameters
     * @return ResultInterface & Type\UploadDocumentResponse
     * @throws SoapException
     */
    public function uploadDocument(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\UploadDocument $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\UploadDocumentResponse
    {
        $response = ($this->caller)('UploadDocument', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\UploadDocumentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Upload a document to the Yuki archive, with data specified for the document content
     *
     * @param RequestInterface & Type\UploadDocumentWithData $parameters
     * @return ResultInterface & Type\UploadDocumentWithDataResponse
     * @throws SoapException
     */
    public function uploadDocumentWithData(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\UploadDocumentWithData $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\UploadDocumentWithDataResponse
    {
        $response = ($this->caller)('UploadDocumentWithData', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\UploadDocumentWithDataResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Upload a bundled document to the Yuki archive, with data1 and data2 specified for the content of the two documents
     *
     * @param RequestInterface & Type\UploadDocumentWithAttachment $parameters
     * @return ResultInterface & Type\UploadDocumentWithAttachmentResponse
     * @throws SoapException
     */
    public function uploadDocumentWithAttachment(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\UploadDocumentWithAttachment $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\UploadDocumentWithAttachmentResponse
    {
        $response = ($this->caller)('UploadDocumentWithAttachment', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\UploadDocumentWithAttachmentResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Retrieve the payment methods for a invoice/receipt
     *
     * @param RequestInterface & Type\PaymentMethods $parameters
     * @return ResultInterface & Type\PaymentMethodsResponse
     * @throws SoapException
     */
    public function paymentMethods(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\PaymentMethods $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\PaymentMethodsResponse
    {
        $response = ($this->caller)('PaymentMethods', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\PaymentMethodsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Retrieve the cost categories for a invoice/receipt
     *
     * @param RequestInterface & Type\CostCategories $parameters
     * @return ResultInterface & Type\CostCategoriesResponse
     * @throws SoapException
     */
    public function costCategories(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CostCategories $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CostCategoriesResponse
    {
        $response = ($this->caller)('CostCategories', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CostCategoriesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Retrieve the payment methods for a invoice/receipt
     *
     * @param RequestInterface & Type\Currencies $parameters
     * @return ResultInterface & Type\CurrenciesResponse
     * @throws SoapException
     */
    public function currencies(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\Currencies $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CurrenciesResponse
    {
        $response = ($this->caller)('Currencies', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CurrenciesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Retrieve the menu entries for Yuki on devices
     *
     * @param RequestInterface & Type\Menu $parameters
     * @return ResultInterface & Type\MenuResponse
     * @throws SoapException
     */
    public function menu(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\Menu $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\MenuResponse
    {
        $response = ($this->caller)('Menu', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\MenuResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Retrieve the available projects
     *
     * @param RequestInterface & Type\Projects $parameters
     * @return ResultInterface & Type\ProjectsResponse
     * @throws SoapException
     */
    public function projects(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\Projects $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ProjectsResponse
    {
        $response = ($this->caller)('Projects', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ProjectsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns a session ID if a valid API key is given
     *
     * @param RequestInterface & Type\Authenticate $parameters
     * @return ResultInterface & Type\AuthenticateResponse
     * @throws SoapException
     */
    public function authenticate(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\Authenticate $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AuthenticateResponse
    {
        $response = ($this->caller)('Authenticate', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AuthenticateResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns a session ID if a valid API key and API client are given
     *
     * @param RequestInterface & Type\AuthenticateClient $parameters
     * @return ResultInterface & Type\AuthenticateClientResponse
     * @throws SoapException
     */
    public function authenticateClient(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AuthenticateClient $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AuthenticateClientResponse
    {
        $response = ($this->caller)('AuthenticateClient', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AuthenticateClientResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns a session ID if an existing Yuki username and password are given
     *
     * @param RequestInterface & Type\AuthenticateByUserName $parameters
     * @return ResultInterface & Type\AuthenticateByUserNameResponse
     * @throws SoapException
     */
    public function authenticateByUserName(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AuthenticateByUserName $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AuthenticateByUserNameResponse
    {
        $response = ($this->caller)('AuthenticateByUserName', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AuthenticateByUserNameResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns all domains that can be accessed with the given session ID
     *
     * @param RequestInterface & Type\Domains $parameters
     * @return ResultInterface & Type\DomainsResponse
     * @throws SoapException
     */
    public function domains(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\Domains $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DomainsResponse
    {
        $response = ($this->caller)('Domains', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DomainsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns all available administrations
     *
     * @param RequestInterface & Type\Companies $parameters
     * @return ResultInterface & Type\CompaniesResponse
     * @throws SoapException
     */
    public function companies(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\Companies $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CompaniesResponse
    {
        $response = ($this->caller)('Companies', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CompaniesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns an administration ID for the given administration name
     *
     * @param RequestInterface & Type\AdministrationID $parameters
     * @return ResultInterface & Type\AdministrationIDResponse
     * @throws SoapException
     */
    public function administrationID(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AdministrationID $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AdministrationIDResponse
    {
        $response = ($this->caller)('AdministrationID', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AdministrationIDResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns all administrations that can be accessed with the given session ID
     *
     * @param RequestInterface & Type\Administrations $parameters
     * @return ResultInterface & Type\AdministrationsResponse
     * @throws SoapException
     */
    public function administrations(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\Administrations $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AdministrationsResponse
    {
        $response = ($this->caller)('Administrations', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\AdministrationsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the current Yuki domain for the active session
     *
     * @param RequestInterface & Type\GetCurrentDomain $parameters
     * @return ResultInterface & Type\GetCurrentDomainResponse
     * @throws SoapException
     */
    public function getCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\GetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\GetCurrentDomainResponse
    {
        $response = ($this->caller)('GetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\GetCurrentDomainResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Set the current domain for the active session
     *
     * @param RequestInterface & Type\SetCurrentDomain $parameters
     * @return ResultInterface & Type\SetCurrentDomainResponse
     * @throws SoapException
     */
    public function setCurrentDomain(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SetCurrentDomain $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SetCurrentDomainResponse
    {
        $response = ($this->caller)('SetCurrentDomain', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SetCurrentDomainResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * The language of the current user
     *
     * @param RequestInterface & Type\Language $parameters
     * @return ResultInterface & Type\LanguageResponse
     * @throws SoapException
     */
    public function language(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\Language $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\LanguageResponse
    {
        $response = ($this->caller)('Language', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\LanguageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Returns the supported languages for the domain
     *
     * @param RequestInterface & Type\SupportedLanguages $parameters
     * @return ResultInterface & Type\SupportedLanguagesResponse
     * @throws SoapException
     */
    public function supportedLanguages(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SupportedLanguages $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SupportedLanguagesResponse
    {
        $response = ($this->caller)('SupportedLanguages', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SupportedLanguagesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Sets the language for the webservice session
     *
     * @param RequestInterface & Type\SetLanguage $parameters
     * @return ResultInterface & Type\SetLanguageResponse
     * @throws SoapException
     */
    public function setLanguage(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SetLanguage $parameters) : \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SetLanguageResponse
    {
        $response = ($this->caller)('SetLanguage', $parameters);

        \Psl\Type\instance_of(\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SetLanguageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

